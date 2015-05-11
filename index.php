<?php session_start(); include "admin/ajax/configure.php"; include "apps/function.class.php"; $redirect = new basic(); 
$query = "SELECT * FROM start_session WHERE id = 1";
$session = mysql_fetch_array(mysql_query($query));
if($session['year_id'] == 0 && $session['branch_id'] == 0){
$redirect -> redirect_to('wait.php');
}else{
switch($session['year_id']){
	case 1:
	$year = "First";
	break;
	case 2:
	$year = "Second";
	break;
	case 3:
	$year = "Third";
	break;
	case 4:
	$year = "Fourth";
	break;
}
$query = "SELECT * FROM branch WHERE id = ".$session['branch_id']." AND year_id = ".$session['year_id'];
$branch = mysql_fetch_array(mysql_query($query));

?>
<html lang="en" class="app">
<head>
<meta charset="utf-8" />
<title>Feedback</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>
<body class="">
<section class="vbox">
  <header class="bg-primary header header-md navbar navbar-fixed-top-xs box-shadow">
  <img style="float:right" height="100px" width="100px" src="images/ideal logo.jpg" />
   <center> <h3>Ideal Institute Of Technology, Kakinada </h3> <h4>Feedback</h4></center>
  </header>
  <section>
    <section class="hbox stretch" style="padding-top: 35px;">
     
     
      <!-- .aside -->
      <aside class="aside-lg" id="email-list">
        <section class="vbox">
          
          <section class="scrollable hover w-f">
            <ul class="list-group auto no-radius m-b-none m-t-n-xxs list-group-lg">
            <?php $query = "SELECT * FROM assign WHERE branch_id = ".$branch['id'];
			 		$result = mysql_query($query);
					while($row = mysql_fetch_assoc($result)){
						$query = "SELECT * FROM lecturer WHERE id = ".$row['lecturer_id'];
						$lecturer = mysql_fetch_array(mysql_query($query));
						$query = "SELECT * FROM subjects WHERE id = ".$row['subject_id'];
						$subject = mysql_fetch_array(mysql_query($query));
						if (!isset($_SESSION['sub']["".$row['subject_id'].""])){?>
              <li class="list-group-item">  <a href="?lec=<?=$lecturer['id']?>&sub=<?=$subject['id']?>" class="clear text-ellipsis"> <strong class="block"><?=$lecturer['name']?></strong> <small><?=$subject['name']?></small> </a> </li></ul>
              <?php }} ?>
              
          </section>
        </section>
      </aside>
      <!-- /.aside -->
    <?php include "parts/display.php"; ?>
    </section>
  </section>
</section>
<!-- Bootstrap -->
<!-- App -->
<script src="js/session_stop.js"></script>
<script src="js/app.plugin.js"></script>

</body>
</html>
<?php }?>