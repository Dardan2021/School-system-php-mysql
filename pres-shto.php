
<?php
$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
	if(isset($_POST['emer'])){
		$emer=$_POST['emer'];
	}
	if(isset($_POST['mbiemer'])){
		$mbiemer=$_POST['mbiemer'];
	}
	
	if(isset($_POST['password'])){
		$password=$_POST['password'];
	}
	if(isset($_POST['email'])){
		$password=$_POST['email'];
	}
	$emer = mysqli_real_escape_string($conn, $_REQUEST['emer']);
$mbiemer = mysqli_real_escape_string($conn, $_REQUEST['mbiemer']);
	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn,$_REQUEST['password']);
				
	
	
	$statement="insert into presoret (presor_EMER,presor_MBIEMER,presor_EMAIL,presor_PASSWORD) values ('$emer','$mbiemer','$email','$password') ";
	$result=mysqli_query($conn,$statement);
	if($result){
		echo"u be";
	}
	
?>