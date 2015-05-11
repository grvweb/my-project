<?php include "../admin/ajax/configure.php";
$query = "SELECT * FROM start_session WHERE id = 1";
$result = mysql_fetch_array(mysql_query($query));
if($result['year_id'] != 0 && $result['branch_id'] != 0){
	if(!isset($inc)){
	echo 'Ok';
	}else{
	$session = 1;
	}
}else{ $session = 0;}
?>