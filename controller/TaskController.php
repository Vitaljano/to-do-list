<?php

class TaskController{

	private $task;

	public function __construct(){
		$this->task = new Model;
	}

	public function indexAction(){
	
		$data =$this->task->getTasks();
		$view = new View;
		$view->render($data);
	}

	public function deleteTaskById($id){

		$this->task->deleteTask($id);
	}

	public function addTask($desc){
		
		$this->task->addTask($desc);
	}
	
	public function updateStatus($id,$status){

		$this->task->updateStatus($id, $status);

	}
}