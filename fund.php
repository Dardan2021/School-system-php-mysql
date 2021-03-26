<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	session_start();
	if(isset($_GET['logout'])){
		
		header("location:index.html");
		session_destroy();
	}
	else{
		header("Location:index.html");
	}
	?>
</body>
</html>