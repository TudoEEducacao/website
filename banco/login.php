<?php
include("./connection/action.php");
include("./requestSite/queries.php");
include './requestSite/cookieHandler.php';

$login = $_GET["login"];
$pass = $_GET["pass"];

$db = new DBactions();
$data = $db->getData($queryLogin."'".$login."'");

$cookie = new cookieHandler();

if($data[0] == $pass)
	$cookie->setCookie($login." ".$pass, 0.1);
?>

<html>
<body>
<!--
<form action="login.php" method="get">
login: <input type="text" name="login"><br>
senha: <input type="text" name="pass"><br>
<input type="submit">
</form>
-->
</body>
</html> 