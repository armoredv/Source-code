<!DOCTYPE html>
<html>
<head>
	<title>	Registration:</title>
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
	<div class="tm-regform" style="border: 2px solid black; ">
	<h1>REGISTRATION FORM:</h1><br>
	<form action="Registration.php" method="POST">
	Username:<input type="text" name="username"><br>
	Password:<input type="Password" name="password"><br>
	Name:    <input type="text" name="name"><br>
	Account type: <input type="radio" name="type" value="admin"> Admin <input type="radio" name="type" value="user"> User<br>
	<center><input type="submit" value="REGISTER" style="background-color: orange; color: white;width: 20% ;"></center>
	


	</form></div></center>
</body>
</html>


















<?php

require 'connect.inc.php';

if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['type'])&&isset($_POST['name'])) {
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$type=$_POST['type'];
	$name=$_POST['name'];

	if (!empty($user)&&!empty($pass)&&!empty($type)&&!empty($name)) {
				
					if ($type=='admin') {
						$query="INSERT INTO admin (username,password,name) VALUES ('$user','$pass','$name')";
						if($query_run=mysqli_query($con,$query)) {
							echo("THANKS TO REGISTER !!");
							header("location:index.php");
							
						}
						else{
						echo "failed";
						}
					}
					else{
						$query="INSERT INTO users (username,password,name) VALUES ('$user','$pass','$name')";
						if($query_run=mysqli_query($con,$query)) {
							echo("THANKS TO REGISTER !!");
							header("location:index.php");
							
						
						}
						else{
						echo "failed";
						}
					}
				



		
	}
	else {
		echo "Please fill all the fields:";
	}
}
?>
