<?php session_start(); include "parts/header.php"; include"parts/top.php"; include "parts/nav.php"; 
	
	if(isset($_GET["page"])){
		$page = strtolower(preg_replace("/[^a-zA-Z]+/", "_", $_GET['page']));
		$page = 'pages/'.$page.'.php';
			if (file_exists($page)) {
				include $page;
			}else{ include 'pages/404.php';}
	}else{include "pages/dash.php";
	}

include "parts/footer.php"; ?>