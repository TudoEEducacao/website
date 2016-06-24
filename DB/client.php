<?php
	header("Content-type: text/javascript");
	ob_start();
	include('server.php');
	$i = ob_get_contents();
	ob_end_clean();
?>

function foo(){
	var i = '<?= json_encode($i); ?>';
	console.log( i );
}
foo();

