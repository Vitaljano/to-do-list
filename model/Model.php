<?php



class Model {

	private $db ;

	public function __construct() {
	
		$this->db = new PDO('mysql:host=127.0.0.1;dbname=to_do_list;charset=UTF8;','root','123456');
	}

	/**
	*	Function Get array from database
	*/
	
	
	public function getTasks(){

		$sql = "SELECT * FROM tasks";

		$sth= $this->db->prepare($sql);
		$sth->execute();
		
		return $sth->fetchAll();
		
		
	}
	public function getTaskById($id){
		$sql = "SELECT * FROM tasks WHERE id = ".$id;
		
		$sth= $this->db->prepare($sql);
		$sth->execute();
		
		return $sth->fetchAll();
	}
	public function deleteTask($id){
		$sql = "DELETE FROM tasks WHERE id = ".$id;
		
		$sth= $this->db->prepare($sql);
		
		return	$sth->execute();
	}

	/**
	*	Function add taks to database
	*/
	public function addTask($task, $status=0){
		$sql = "INSERT INTO tasks ( task_description ,  status ) VALUES ('".$task."', ".$status.")";
		$sth = $this->db->prepare($sql);

		return $sth->execute();
	}

	public function updateStatus($id, $status){
		$sql = "UPDATE tasks SET status = ".$status." WHERE id = ".$id;
		$sth = $this->db->prepare($sql);

		return $sth->execute();
	}

	


}