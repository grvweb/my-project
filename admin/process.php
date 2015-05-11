<?php session_start();
if(isset($_POST['action'])){
	switch($_POST['action']){
		case "login":
		require('../apps/admin.class.php'); $admin = new admin(); $admin->login($_POST['username'],$_POST['password']);
		break;
		case "start_session":
		require('../apps/admin.class.php'); $admin = new admin(); $admin->start_session($_POST['year_id'],$_POST['branch_id']);
		break;
		case "stop_session":
		require('../apps/admin.class.php'); $admin = new admin(); $admin->stop_session();
		break;
		case "add_branch":
		require('../apps/admin.class.php'); $admin = new admin(); $admin->add_branch($_POST['name'],$_POST['year_id']);
		break;
		case "add_subjects":
		require('../apps/admin.class.php'); $admin = new admin(); $admin->add_subjects($_POST['name'],$_POST['branch_id']);
		break;
		case "add_lecturers":
		require('../apps/admin.class.php'); $admin = new admin(); $admin->add_lecturers($_POST['name']);
		break;
		case "assign":
		require('../apps/admin.class.php'); $admin = new admin(); $admin->assign($_POST['branch_id'],$_POST['subject_id'],$_POST['lecturer_id']);
		break;
	}
}
?>