<?php
	
	require 'connect.inc.php';
	if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['type']))
	{			$user=$_POST['username'];
				$pass=$_POST['password'];
				$type=$_POST['type'];
	
		if (!empty($_POST['username'])||!empty($_POST['password'])) {
			if ($type=='user') {

				$query="SELECT Id,username,password,name FROM users WHERE username='$user' AND password='$pass' ";
				
				if($query_run=mysqli_query($con,$query)){
					$no_rows=mysqli_num_rows($query_run);
					
					if ($no_rows=mysqli_num_rows($query_run)) {
						if ($no_rows==0) {
							echo "Incorrect username or password ";

						}
						else if ($no_rows==1) {
						
							$id=mysqli_fetch_row($query_run);
							$_SESSION['id']=$id[0];
							$_SESSION['username']=$id[1];
							$_SESSION['password']=$id[2];
							$_SESSION['name']=$id[3];
							header("location:index.php");
						
						
						}
					}
					else
						echo "enter valid username and password";

				}
				else {
					echo"query failed";
				}
			}
				else if ($type=='Admin') {
				$user=$_POST['username'];
				$pass=$_POST['password'];
				$query="SELECT Id,username,password,name FROM admin WHERE username='$user' AND password='$pass' ";
				
				if($query_run=mysqli_query($con,$query)){
					$no_rows=mysqli_num_rows($query_run);
					
					if ($no_rows=mysqli_num_rows($query_run)) {
						if ($no_rows==0) {
							echo "invalid username or password !";

						}
						else if ($no_rows==1) {
							
							$id=mysqli_fetch_row($query_run);
							$_SESSION['id']=$id[0];
							$_SESSION['username']=$id[1];
							$_SESSION['password']=$id[2];
							$_SESSION['name']=$id[3];
							header("location:index.php");
							
							
						}
					}
					else
						echo "enter valid username and password";

				}
				else {
					echo"query failed";
				}
			}


		}
		else 
			echo "plese enter it";
	}


?>
<html>
<head>
	<title>LOGIN:</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
	<center>
	<div class="tm-regform">
	<form action="index.php" method="POST">
	USERNAME :<input type="text" name="username"><br>
	PASSWORD :<input type="password" name="password"><br>
	ACCOUNT TYPE:ADMIN<input type="radio" name="type" value="Admin"> USER<input type="radio" name="type" value="user"><br>
	<input type="submit" value="!! login !!" style="background-color: orange; color: white;width: 20% ;">
	</div>
	</center>


</form>
<body>
	</html>


