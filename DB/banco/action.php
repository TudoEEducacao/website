<?php
//Created by Igor Felipe, 07/11/2015.

include "config.php";

class DBactions {
	private $name; private $email; private $login; private $pass; private $bthMonth; private $bthDay; private $bthYear; private $gender;
	protected $conn; private $conf = "";

	private $data;
	
	function __construct() {
		$this->start();
   }

   function __destruct() {
		$this->conn = null;
   }

	function setData ($_name, $_email, $_login, $_pass, $_bthMonth, $_bthDay, $_bthYear, $_gender) {
		$this->name = $_name;
		$this->email = $_email;
		$this->login = $_login;
		$this->pass = $_pass;
		$this->bthMonth = $_bthMonth;
		$this->bthDay = $_bthDay;
		$this->bthYear = $_bthYear;
		$this->gender = $_gender;
		
		$this->start();
	}

	function getData($sql) {
		try {
		    $stmt = $this->conn->query($sql);
		    $f = $stmt->fetch();
		   echo $f[1];
		}
		catch(PDOException $e) {
    		echo "Error: " . $e->getMessage();
		}
		//return $data;
	}
	
	public function start(){
		$conf = new config();
		
		// Create connection
		/*$this->conn = new mysqli($conf->getHost(), $conf->getUser(), $conf->getPass(), $conf->getName());
		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} else {
			echo "Conexao bem sucedida!<br>";
		}*/

		try {
		    $this->conn = new PDO("mysql:host=".$conf->getHost().";dbname=".$conf->getName(), $conf->getUser(), $conf->getPass());
		    // set the PDO error mode to exception
		    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    echo "Connected successfully";
		    }
		catch(PDOException $e)
		    {
		    echo "Connection failed: " . $e->getMessage();
		    }
		
		/*$this->makeQuery("
		INSERT INTO `usuario`(`nome`, `email`, `username`, `senha`, `imagem`, `id_datalogin`, `id_aniversario`, `pin`) 
		VALUES ('".$this->name."','".$this->email."','".$this->login."','".$this->pass."','https://goo.gl/LfyC4m',0,0,".rand(10,100).")");*/
	}
	
	function makeQuery ($sql) {
		if ($this->conn->query($sql) === TRUE) {
			echo "Query executada com sucesso!";
		} else {
			echo "Error executing query: " . $this->conn->error;
		}
	}
}


//Códigos obsoletos-----------------------------------------------------------///////////////
/*
$DBHost = "localhost";  // localhost or your IP
$DBUser = "root";  // Database user
$DBPasswd = "vertrigo";  // Database password
$DBName = "testeDB";  // Database name
 
$name = $email = $login = $pass = $bthMonth = $bthDay = $bthYear = $gender = " ";
$genrer = "f";
// Create connection
$conn = new mysqli($DBHost, $DBUser, $DBPasswd);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connected successfully: ".$name;
}

$sql = "CREATE";
echo "<br>".$sql."<br>";

function sendData ($_name, $_email, $_login, $_pass, $_bthMonth, $_bthDay, $_bthYear, $_gender) {
	$name = $_name;
	$email = $_email;
	$login = $_login;
	echo "<br>Name: " . $name. "<br> Email: ".$email. "<br> login: ".$login;
	
	$sql = "CREATE DATABASE ".$name;
	echo "<br>".$genrer."<br>";
	submitData();
}

function submitData (){//($conn, $sql) {
	// Create database
	echo "<br>".$sql."<br>";
	if ($conn->query($sql) === TRUE) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: " . $conn->error;
	}

	$conn->close();*/

?>