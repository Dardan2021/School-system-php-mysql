
<?php

	$conn=mysqli_connect("localhost","root","","register");
require'session.php';
				
if(!isset($_SESSION['m'])){
	set_session('m','registration form');
}
	
	if(isset($_POST['emer'])){
		$emer=$_POST['emer'];
	}
	if(isset($_POST['mbiemer'])){
		$mbiemer=$_POST['mbiemer'];
	}
	
	if(isset($_POST['password'])){
		$password=$_POST['password'];
	}
	$sql="SELECT administrator_emer from administrator where administrator_emer='$emer' and administrator_mbiemer='$mbiemer' and admin_password='$password' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		$numresults=mysqli_num_rows($result);
		if($numresults!=0){
		header('location:ad.php');

		}
	}
	?>