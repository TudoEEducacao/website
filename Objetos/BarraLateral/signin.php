<?php
require './php/database.php';

$login 		= $_POST["login"];
$pass 		= $_POST["pass"];

$db = new database();
$db->openConnection();

?>