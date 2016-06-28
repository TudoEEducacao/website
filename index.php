<script type="text/javascript">
	function reqListener(){
		console.log(this.responseText);
	}
	var oReq = new XMLHttpRequest();
	oReq.onload = function(){
		document.write(this.responseText);
		alert((this.responseText == 1));
	}
	oReq.open("get", "./DB/requestSite/verifyUser.php", true);
	oReq.send();
</script>


