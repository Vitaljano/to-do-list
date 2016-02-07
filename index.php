<?php
require __DIR__."/autoloder.php";

	$obj = new TaskController();
	$obj->indexAction();

//Mini routing

if(!empty($_GET['delete'])){
	$obj->deleteTaskById($_GET['delete']);
	header('Location: ./index.php');
}

if(!empty($_GET['addTask'])){
	
	$obj->addTask($_GET['addTask']);
	header('Location: ./index.php');
}

if(!empty($_GET['status'] && $_GET['id'])){

	
	$obj->updateStatus($_GET['id'],$_GET['status']);
	
}

