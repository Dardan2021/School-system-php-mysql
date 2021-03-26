<!doctype html>
<html>
<head>
<style>

		</style>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="styLesheet"  href="css/all.css">
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>	
<meta charset="utf-8">
	
	
	<?php

$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");

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
	$sql="SELECT `administrator_emer` from administrator where `administrator_emer`='$emer'  and `admin_password`='$password' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		
		$numresults=mysqli_num_rows($result);
		if($numresults!=0){
			$_SESSION['emer']=$_POST['emer'];
			
			if(isset($_SESSION['emer'])){
				
			
			
			header("location:ad1.php");
			
			
                        }			
		
}
		else {
			header("location:admin.html");
	
	}
	
}
else {
	echo"nuk u be";
}
}
	?>
</body>
</html>