<!doctype html>
<html>
<head>
<meta charset="utf-8">
	
 <title>Departamenti i Shkencave Kompjuterike Ismail Qemali</title>
    <link rel="icon" href="uv.png">

</head>
	
	
		
<body>
	<?php
session_start();
require_once("db1.php");

if(isset($_POST['login'])){
	if(isset($_POST['presor_emer'])){
		$presor_emer=$_POST['presor_emer'];
	}
	else{
		$presor_emer=" ";
	}
	
	
	if(isset($_POST['presor_password'])){
		$presor_password=$_POST['presor_password'];
	}
else{
	$presor_password=" ";
}
	$sql="SELECT presor_emer from `presor` where presor_emer='$presor_emer'  and presor_password='$presor_password' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		
		$numresults=mysqli_num_rows($result);
		if($numresults!=0){
                    session_start();
			$_SESSION['presor_emer']=$presor_emer;
			if(isset($_SESSION['presor_emer'])){
                            header("location:welcome1.php");
                        }
			
			
			
			
		
}
		else {
			header("Location:presor-gabim.php");
		}
	
	}
	
}
else {
	echo"nuk u be";
}
	
	?>

</body>
	
</html>
