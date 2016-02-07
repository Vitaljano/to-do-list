<?php

function autoLoad($ClassName){

	if(file_exists(__DIR__."/model/".$ClassName.".php")){
		require_once __DIR__."/model/".$ClassName.".php";
	}

	if(file_exists(__DIR__."/controller/".$ClassName.".php")){
		
		require_once __DIR__."/controller/".$ClassName.".php";
	}

	if(file_exists(__DIR__."/view/".$ClassName.".php")){
		require_once __DIR__."/view/".$ClassName.".php";
	}

}


spl_autoload_register( 'autoLoad');

