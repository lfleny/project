<?php
session_start();

include_once('classes/helper/config.php');
include_once('classes/helper/tpl.php');
include_once('classes/helper/db.php');
include_once('classes/helper/models.php');


$page="";

	if(empty($_GET['page'])){
		$page="main";
	}
	else{
		$page=$_GET['page'];
	}
		
	if(file_exists('scripts/controller/'.$page.'.php')){
		include_once('scripts/controller/'.$page.'.php');
	}
	else {
		echo "ОШИБКА 404. Страница не найдена";
	}
?>