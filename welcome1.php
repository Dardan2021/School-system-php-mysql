<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	
	session_start();
	if(isset($_SESSION['presor_emer'])){
			header("location:we.php");
		
	
	exit();}
		else{
			header("location:loginpresor.php");
		}
	
	?>
</body>
</html>