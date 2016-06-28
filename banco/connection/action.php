<?php
//Created by Igor Felipe, 07/11/2015.

include "config.php";

class DBactions {
	protected $conn; private $conf = ""; private $data;
	
	function __construct() {
		$this->openConnection();
	}

	function __destruct() {
		$this->conn = null;
	}

	function getData($sql, $verboseMode = FALSE) {

		try {
			$stmt = $this->conn->query($sql);
			$this->data = $stmt->fetch();
			
			if($verboseMode === TRUE)
				echo "<script>alert('Returned Value: " . $this->data[0] . "');</script>";
		}
		catch(PDOException $e) {
			if($verboseMode === TRUE)
				echo "Error: " . $e->getMessage();
		}

		return $this->data;
	}
	
	public function openConnection($verboseMode = FALSE){
		$conf = new config();

		try {
		    $this->conn = new PDO("mysql:host=".$conf->getHost().";dbname=".$conf->getName(), $conf->getUser(), $conf->getPass());

		    // set the PDO error mode to exception
		    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    
		    if($verboseMode === TRUE)
		    	echo "<script>alert('Connected successfully');</script>";
		    
	    }
		catch(PDOException $e)
	    {
	    	if($verboseMode === TRUE)
		    	echo "Connection failed: " . $e->getMessage() . "<br>";
	    }
	}
	
	function makeQuery ($sql, $verboseMode = FALSE) {
		try {
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();	
			
			if($verboseMode === TRUE)
				echo "<script>alert('Query executada com sucesso!');</script>";
		}
		catch(PDOException $e) {
			if($verboseMode === TRUE)
    			echo "Error: " . $e->getMessage() ;
    	}
	}
}

?>