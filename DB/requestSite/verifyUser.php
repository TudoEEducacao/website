<?php
	include "../connection/action.php";
	
	$dbName = "users";

	$db = new DBactions();
	$sql = "SELECT * FROM firstMlay";
	echo json_encode($db->getData($sql, true));
?>