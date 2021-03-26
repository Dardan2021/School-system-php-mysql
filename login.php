<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
<title>Untitled Document</title>
</head>
	
	
		
<body>
	<?php
session_start();
require_once("db1.php");

if(isset($_POST['login'])){
	if(isset($_POST['emer'])){
		$emer=$_POST['emer'];
	}
	else{
		$emer=" ";
	}
	
	
	if(isset($_POST['password'])){
		$password=$_POST['password'];
	}
else{
	$password=" ";
}
	$sql="SELECT `emer`,`student_id` from users where `emer`='$emer'  and `password`='$password' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		
		$numresults=mysqli_num_rows($result);
		if($numresults!=0){
			while($row=mysqli_fetch_assoc($result)){
                             session_start();
			$_SESSION['student_id']=$row['student_id'];
			if(isset($_SESSION['student_id'])){
				
			$_SESSION['emer']=$_POST['emer'];
			header("location:welcome.php");
			
			}
			
			
                        }	
		
}
		else {
			header("location:student-gabim.php");
		}
	
	}
	

else {
	echo"nuk u be";
}
}
	?>

</body>
	
</html>
