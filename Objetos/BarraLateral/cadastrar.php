<?php

$action=$_GET["acao"];

if($action == "cadastrar")
{
	$nome=addslashes($_POST["Nome"]);
	
	$tel=addslashes($_POST["Telefone"]);

	$nasc=addslashes($_POST["Nascimento"]);

	$endereco=addslashes($_POST["Endereco"]);

	$atua=addslashes($_POST["Atuacao"]);

	$email=addslashes($_POST["Email"]);

	$login=addslashes($_POST["Login"]);

	$senha=addslashes($_POST["Senha"]);

	$repetsenha=addslashes($_POST["RepetirSenha"]);

		if($senha == $repetsenha )
		{
			$cadastro = new database;
			$cadastro = $cadastro->registerUser($nome, $tel, $nasc, $endereco, $atua, $email, $login, $senha);
		}
		else
			echo '<script>alert("Senhas não confere");</script>';
		
	
}

?>