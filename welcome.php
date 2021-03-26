<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	
	session_start();
	
	if(isset($_SESSION['student_id'])){
	header("location:st.php");;
	exit();}
		else{
			header("location:login.html");
		}
	
	?>
</body>
</html>