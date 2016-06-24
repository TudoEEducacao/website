<?php

$action=$_GET["acao"];

if($action == "login")
{
	$usuario=addslashes($_POST["Usuario"]);
	
	$senha=addslashes($_POST["Senha"]);

	$login = new database;
	$login = $login->loginUser($usuario, $senha);
}



?>