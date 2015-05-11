<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Result</title>
</head>
<body>
<?php 
$_POST['year_id'] = 1;
$_POST['branch_id'] = 1;
switch($_POST['year_id']){
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
include "../admin/ajax/configure.php";
$query = "SELECT * FROM branch WHERE id = ".$_POST['branch_id'];
$branch = mysql_fetch_array(mysql_query($query));
$query = "SELECT * FROM assign WHERE branch_id = ".$_POST['branch_id'];
$result = mysql_query($query);
while($assign = mysql_fetch_assoc($result)){
?>
<center><div style=""><img style="float:left; padding-left:300px;" src="../images/ideal logo.jpg" height="100px" width="100px" /><div style="width:35%"><h1><b>Ideal Institute Of Technology<b></h1><p>Approved By AICTE, Vidyut Nagar, Kakinada.</p><b><h3>Feedback</h3></b></b></div></center>
<div style="padding-left: 6%;padding-right: 6%;">
<?php $query1 = "SELECT * FROM lecturer WHERE id = ".$assign['lecturer_id'];
$result1 = mysql_query($query1);
$lecturer = mysql_fetch_array($result1); 
$query2 = "SELECT * FROM subjects WHERE id = ".$assign['subject_id'];
$subject = mysql_fetch_array(mysql_query($query2));
$query3 = "SELECT count(*) AS total FROM results WHERE subject_id = ".$subject['id']." AND lecturer_id = ".$lecturer['id']." AND question_id = 1";
$count = mysql_fetch_array(mysql_query($query3));
?>
<div style="float: left;">Faculty Name : <?=$lecturer['name']?><br />Subject : <?=$subject['name']?> <br /> Year : <?=$year?> Year </div>
<div style="float: right;"> Branch : <?=$branch['name']?> <br /> Total Students : <?=$count['total']?>
</div>
<div>
<br /><br /><br /><br />
<table width="100%" border="1">
  <tr>
    <th scope="col">S.No</th>
    <th scope="col">Attributes </th>
    <th scope="col">Very Good</th>
    <th scope="col">Good</th>
    <th scope="col">Average</th>
    <th scope="col">Below Average</th>
    <th scope="col">Poor</th>
    <th scope="col">Weightage</th>
  </tr>
  <?php $i=1; $query4 = "SELECT * FROM questions";
  $result4 = mysql_query($query4);
  while($row = mysql_fetch_assoc($result4)){
  $query5 = "SELECT count(*) AS a FROM results WHERE subject_id = ".$subject['id']." AND question_id = ".$row['id']." AND lecturer_id = ".$lecturer['id']." AND result = 5";
  $result15 = mysql_fetch_assoc(mysql_query($query5));
  $query5 = "SELECT count(*) AS a FROM results WHERE subject_id = ".$subject['id']." AND question_id = ".$row['id']." AND lecturer_id = ".$lecturer['id']." AND result = 4";
  $result14 = mysql_fetch_assoc(mysql_query($query5));
  $query5 = "SELECT count(*) AS a FROM results WHERE subject_id = ".$subject['id']." AND question_id = ".$row['id']." AND lecturer_id = ".$lecturer['id']." AND result = 3";
  $result13 = mysql_fetch_assoc(mysql_query($query5));
  $query5 = "SELECT count(*) AS a FROM results WHERE subject_id = ".$subject['id']." AND question_id = ".$row['id']." AND lecturer_id = ".$lecturer['id']." AND result = 2";
  $result12 = mysql_fetch_assoc(mysql_query($query5));
  $query5 = "SELECT count(*) AS a FROM results WHERE subject_id = ".$subject['id']." AND question_id = ".$row['id']." AND lecturer_id = ".$lecturer['id']." AND result = 1";
  $result11 = mysql_fetch_assoc(mysql_query($query5));
  $query6 = "SELECT sum(result) AS a FROM results WHERE subject_id = ".$subject['id']." AND question_id = ".$row['id']." AND lecturer_id = ".$lecturer['id'];
  $resultsum = mysql_fetch_assoc(mysql_query($query6));
  $query7 = "SELECT sum(result) AS a FROM results WHERE subject_id = ".$subject['id']." AND lecturer_id = ".$lecturer['id'];
  $resulttotal = mysql_fetch_assoc(mysql_query($query7));
  $query8 = "SELECT count(*) AS a FROM questions";
  $totalquestions = mysql_fetch_assoc(mysql_query($query8));
  ?>
  <tr>
    <th scope="row"><?=$i?></th>
    <td><?=$row['question']?></td>
    <td align="center"><?=$result15['a']?></td>
    <td align="center"><?=$result14['a']?></td>
    <td align="center"><?=$result13['a']?></td>
    <td align="center"><?=$result12['a']?></td>
    <td align="center"><?=$result11['a']?></td>
    <td align="center"><?=($resultsum['a']/$count['total'])?></td>
  </tr>
  <?php $i++; }?>
  <tr>
  <td colspan="7" align="right">
  Total Percentage = <?=(($resulttotal['a']*2)/($count['total']*$totalquestions['a'])*10)."%"?>
  </td>
  </tr>
  <tr>
  <td colspan="7">> 90 Excellent<br />
85-90 Very Good<br />
75-85 Good<br />
65-75 Average<br />
< 65 Below Average<br />
  </td>
  </tr>
</table>
</div>
</div>
<?php }?>
</body>
</html>