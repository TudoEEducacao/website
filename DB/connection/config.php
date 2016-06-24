<?php
//Created by Igor Felipe, 07/11/2015.

	class config {
		private $DBHost   =	"localhost"; // localhost or your IP
		private $DBUser   = "root";  	 // Database user
		private $DBPasswd = "vertrigo";  // Database password
		private $DBName   = "testMlay";  // Database name
		
		function getHost () {
			return $this->DBHost;
		}
		
		function getUser () {
			return $this->DBUser;
		}
		
		function getPass () {
			return $this->DBPasswd;
		}
		
		function getName () {
			return $this->DBName;
		}
	}
?>	
	
