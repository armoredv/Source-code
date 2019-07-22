<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function add(){
			if (window.XMLHttpRequest) {
				xhttp = new XMLHttpRequest();

			}else{
				xhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			var para='name='+document.getElementById('name').value;
			alert(para);
			xhttp.onreadystatechange = function(){
				if (xhttp.readyState == 4 && xhttp.status == 200) {
					document.getElementById('demo').innerHTML= xhttp.response.Text;

				}
			};
			xhttp.open("POST","sub.php",true);
			xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xhttp.send(para);
		}


	</script>
</head>
<body>
	ADD SUBJECT:<input type="text" name="name" id="name">
	<p id="demo"></p>
	<input type="submit" name="submit" onclick="add();">

</body>
</html>
