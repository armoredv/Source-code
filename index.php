<?php
require 'connect.inc.php';

if(isset($_SESSION['password'])&&(!empty($_SESSION['username']))&&(!empty($_SESSION['name']))){
	Echo nl2br("WELCOME:\n".$_SESSION['name']."\n".'  <a href="logout.php"> CLICK HERE TO:logout </a>'."\n");
	include 'a.php';

	
}
else{
	include 'loginform.php';
}
echo nl2br("\n".'<a href="Registration.php">REGISTER</a>'."\n");
?>


