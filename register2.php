<?php 
	
		
	$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
require'session2.php';
				


	if(isset($_POST['emer'])){
		$emer=$_POST['emer'];
	}
if(isset($_POST['viti_users'])){
		$viti=$_POST['viti_users'];
	}
	if(isset($_POST['mbiemer'])){
		$mbiemer=$_POST['mbiemer'];
	}
	
	if(isset($_POST['password'])){
		$password=$_POST['password'];
	}
	
if(isset($_POST['viti'])){
	

$viti= $_POST['viti'];
}
else{
		 $viti="viti[] ";
 }
	$st = implode ("','", $viti);
	$sql="INSERT INTO users (emer, mbiemer, password, viti_users)
VALUES ('$emer', '$mbiemer', '$password', '$st');";

$result1=mysqli_query($conn,$sql);
	if($result1){
		
		header('location:studentet-shtim.php') ;

}
	
	?>


