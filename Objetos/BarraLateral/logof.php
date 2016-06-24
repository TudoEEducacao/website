<?php
	
	$action=$_GET["acao"];

	if($action =="logof")
	{
		session_start();
		unset($_SESSION["IDsecao"]);
		session_destroy();
		header("Location: index.php");
		exit();
	}
?>