<?php 
	require 'config.php';
class database{

	public	function openConnection(){
		$con = mysql_connect(config::$servername, config::$hostname, config::$password, config::$db_name);

		if(mysqli_connect_errno()){
			
			echo "Falha ao conectar";
		}
		else{
			echo "Conectado com sucesso";
		}
		return $con;
	}

}
 
 ?>
