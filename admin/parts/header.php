<?php if (!isset($_SESSION['admin']['id'])){
	require "../apps/function.class.php"; $redirect = new basic();
	$redirect -> redirect_to('login.php');
}?><!DOCTYPE html>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<title>Admin Panel</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="../css/app.v1.css" type="text/css" />
<link rel="stylesheet" href="../js/calendar/bootstrap_calendar.css" type="text/css" />
<!--[if lt IE 9]> <script src="../js/ie/html5shiv.js"></script> <script src="../js/ie/respond.min.js"></script> <script src="../js/ie/excanvas.js"></script> <![endif]-->
</head>