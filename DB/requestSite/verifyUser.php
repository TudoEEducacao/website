<?php
	include "../connection/action.php";

	$dbName = "user";
	$dbName2 = "site";

	$db = new DBactions();
	$sql = "SELECT * FROM ".$dbName." WHERE ID = 0";
	$data = $db->getData($sql);

	if($data[1] == "professor"){
		$sql = "SELECT * FROM ".$dbName2." WHERE ID = 0";
		$data = $db->getData($sql);
		
		echo $data[1];
	}else{
		$sql = "SELECT * FROM ".$dbName2." WHERE ID = 1";
		$data = $db->getData($sql);
		
		echo $data[1];
	}
?>