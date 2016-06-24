
<!DOCTYPE html>
<html>
<head>
	<title>Test</title>

	<script type="text/javascript" src="pageCreation.js"></script>

</head>
<body>

<?php
$str = "Jane & 'Tarzan'";
echo htmlentities($str, ENT_COMPAT);
echo "<br>";
echo htmlentities($str, ENT_QUOTES);
echo "<br>";
echo htmlentities($str, ENT_NOQUOTES);
?>

<p id = "GambiarraParaPHPSerLidoNoJS" style = "display: none;">
	<?php 
		$output = 'BUTTON';
		echo htmlentities($output);
	?>
</p>

<script>
	var div = document.getElementById("GambiarraParaPHPSerLidoNoJS");
	document.write(div.textContent);
	var a = new pageCreation();
	//a.showPage(["BUTTON"]);
	

</script>
</body>
</html>
