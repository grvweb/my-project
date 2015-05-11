<?php include 'ajax/configure.php'; include "../apps/function.class.php"; $redirect = new basic();
if(isset($_GET['tbl']) && $_GET['tbl'] == 'branch'){
$query = "DELETE FROM branch WHERE id = ".$_GET['id'];
$result = mysql_query($query);
$query = "DELETE FROM subjects WHERE branch_id = ".$_GET['id'];
$result = mysql_query($query);
$query = "DELETE FROM assign WHERE branch_id = ".$_GET['id'];
$result = mysql_query($query);
$redirect -> redirect_to('index.php?page=branch');
}
if(isset($_GET['tbl']) && $_GET['tbl'] == 'subjects'){
$query = "DELETE FROM subjects WHERE id = ".$_GET['id'];
$result = mysql_query($query);
$query = "DELETE FROM assign WHERE subject_id = ".$_GET['id'];
$result = mysql_query($query);
$redirect -> redirect_to('index.php?page=subjects');
}
if(isset($_GET['tbl']) && $_GET['tbl'] == 'assign'){
$query = "DELETE FROM assign WHERE id = ".$_GET['id'];
$result = mysql_query($query);
$redirect -> redirect_to('index.php?page=lecturers');
}
if(isset($_GET['tbl']) && $_GET['tbl'] == 'lecturer'){
$query = "DELETE FROM lecturer WHERE id = ".$_GET['id'];
$result = mysql_query($query);
$query = "DELETE FROM assign WHERE lecturer_id = ".$_GET['id'];
$result = mysql_query($query);
$redirect -> redirect_to('index.php?page=lecturers');
}
?>