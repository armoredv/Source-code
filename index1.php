<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		
		function add(){
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();

			}
			else{
				xmlhttp= new ActiveXObject('Microsoft.XMLHTTP');

			}
			xmlhttp.onreadystatechange=function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById('listofsub').innerHTML = xmlhttp.responseText;
					
				}
			}
			var parameters='name ='+ document.getElementById('subname').value;
			xmlhttp.open('POST',"sub.php",true);

			xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
			xmlhttp.send(parameters);
			alert(parameters);
			
		
		}



	</script>
</head>
<body>
	SUBJECT:<input type="text" id="subname" >  <input type="button" value="ADD SUBJECT" onclick="add();">
	<div id="listofsub">
		
	</div>
</body>
</html>
