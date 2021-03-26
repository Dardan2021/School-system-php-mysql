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
	

	
	$sql="INSERT INTO presor (presor_emer, presor_mbiemer, presor_password)
VALUES ('$emer', '$mbiemer', '$password');";

$result1=mysqli_query($conn,$sql);
	if($result1){
		
		header('location:presoret-shtim.php') ;

}
	
	



	
	

	?>

