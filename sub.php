<?php
session_start();
$sub = $_POST["name"];
if(isset($sub)){
	if (!empty($sub)) {
		$query="INSERT INTO subject (subject,downvote,upvote) VALUES($sub,0,0)";
		$query_run=mysqli_query($con,$query);
		if($query_run){
			echo "ok...";
			$query1="SELECT * FROM subject";
			$query_run1=mysqli_query($con,$query1);
			if ($query_run1) {
					
					while($row=mysqli_fetch_row($query_run1)){
						
						echo "SUBJECT NAME:".$row[1].'<a onclick="increment();" >upvote</a>'.$row[2].'<a onclick="increment();" >downvote</a>'.$row[3];

					}



					
				
			}
		}

		
	}
}



?>