<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	if(isset($_SESSION['emer'])){
                
		session_destroy();
		header("location:admin.html");
		
	}
	else{
		header("location:admin.html");
	}
	?>
</body>
</html>