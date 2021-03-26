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
                
		session_destroy();
		header("location:index.html");
		
	}
	else{
		header("location:index.html");
	}
	?>
</body>
</html>