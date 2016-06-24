<?php
	include "../connection/action.php";
	
	$dbName = "users"

	$db = new DBactions();
	$sql = "SELECT * FROM users";
	$db->getData($sql, true);
?>