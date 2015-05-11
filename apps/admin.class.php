<?php
class admin{
	private $_basic;
	private $_db;
    public function __construct(){
        try {
            $this->_db = new PDO('mysql:host=localhost;dbname=feedback',  'root', '', array(
                PDO::ATTR_PERSISTENT => true
            ));
            $this->_db->exec("SET CHARACTER SET utf8"); 
            //notice I removed "= null" part
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
		require('function.class.php'); $this->_basic = new basic();
    }
	public function login($username,$password){
		$hash_pass = sha1($password);
		$query = "SELECT * FROM admin WHERE username = '".$username."' AND password = '".$hash_pass."' LIMIT 1";
		$result = $this->_db->prepare($query);
		$result->execute();
		$admin = $result->fetch(PDO::FETCH_ASSOC);
		$rows = $result->rowCount();
		if($rows == 1){
		$_SESSION['admin']['id']=$admin['id'];
		$_SESSION['admin']['username'] = $admin['username'];
		$this->_basic->redirect_to('index.php');
		}
	}
	public function start_session($year_id,$branch_id){
		$query = "UPDATE start_session SET year_id = ".$year_id.", branch_id = ".$branch_id." WHERE id = 1";
		$result = $this->_db->prepare($query);
		if($result->execute()){
			$this->_basic->redirect_to('start_session.php');
		}
	}
	public function stop_session(){
		$query = "UPDATE start_session SET year_id = 0, branch_id = 0, section_id = 0 WHERE id = 1";
		$result = $this->_db->prepare($query);
		if($result->execute()){
			$this->_basic->redirect_to('index.php');
		}
	}
	public function add_branch($name,$id){
		$query = "INSERT INTO branch (name,year_id) VALUES ('".$name."',".$id.")";
		$result = $this->_db->prepare($query);
		if($result->execute()){
			$this->_basic->redirect_to('index.php?page=branch');
		}
	}
	public function add_subjects($name,$id){
		$query = "INSERT INTO subjects (name,branch_id) VALUES ('".$name."',".$id.")";
		$result = $this->_db->prepare($query);
		if($result->execute()){
			$this->_basic->redirect_to('index.php?page=subjects');
		}
	}
	public function add_lecturers($name){
		$query = "INSERT INTO lecturer (name) VALUES ('".$name."')";
		$result = $this->_db->prepare($query);
		if($result->execute()){
			$this->_basic->redirect_to('index.php?page=lecturers');
		}
	}
	public function assign($branch,$subject,$lecturer){
		$query="SELECT * FROM assign WHERE subject_id = ".$subject;
		$result = $this->_db->prepare($query);
		$result->execute();
		$rows = $result->rowCount();
		if($rows == 0){
			$query = "INSERT INTO assign (branch_id,lecturer_id,subject_id) VALUES (".$branch.",".$lecturer.",".$subject.")";
			$result = $this->_db->prepare($query);
			$result->execute();
			$this->_basic->redirect_to('index.php?page=lecturers');
		}else{$this->_basic->redirect_to('index.php?page=lecturers');}
	}
}
?>