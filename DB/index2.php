<script type="text/javascript">
	function reqListener(){
		console.log(this.responseText);
	}
	var oReq = new XMLHttpRequest();
	oReq.onload = function(){
		document.write(this.responseText);
	}
	oReq.open("get", "getdata.php", true);
	oReq.send();
</script>
