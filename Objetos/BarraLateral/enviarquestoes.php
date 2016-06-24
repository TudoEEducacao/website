<?php

$action=$_GET["acao"];

if($action == "cadastrarquestoes")
{
	$Enuciado=addslashes($_POST["Enuciado"]);
	
	$resposta=addslashes($_POST["resposta"]);

	$AREA=addslashes($_POST["AREA"]);

			$enviarquestao = new database;
			$ID = $_SESSION["IDsecao"];
			$enviarquestao = $enviarquestao->registrarQuestao($Enuciado, $resposta, $ID, $AREA);
	
}

?>