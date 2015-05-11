<?php
$query = "SELECT count(*) AS a FROM questions";
$result= mysql_fetch_assoc(mysql_query($query));
$result1 = count($_POST['percent']);
if($result['a'] == $result1){
foreach($_POST['percent'] as $key => $value){
	$query = "INSERT INTO results (subject_id,lecturer_id,question_id,result) VALUES (".$_POST['subject_id'].",".$_POST['lecturer_id'].",".$key.",".$value.")";
	mysql_query($query);
}
$_SESSION['sub']["".$_POST['subject_id'].""] = $_POST['subject_id'];
/*echo "<script>window.location.href = 'index.php';</script>";*/
header( 'Location: index.php' ) ;
}else{
	$_SESSION['error'] = 1;
	header( 'Location: index.php' ) ;
}
?>