<?php session_start();
unset ($_SESSION['admin']);
require "../apps/function.class.php"; $redirect = new basic();
	$redirect -> redirect_to('login.php');
?>