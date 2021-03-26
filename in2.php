<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
		<?php
		
$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");

	if (isset($_GET['submit'])){
		$nota_1=$_GET['nota_1'];
		$nota_2=$_GET['nota_2'];
		$nota_3=$_GET['nota_3'];
		$id=$_GET['id'];
		$d=$_GET['d'];
	   
	  $nota=$nota_1+$nota_2+$nota_3;
	
	$sql="UPDATE `proces` SET  `nota`=$nota ,`nota_1`=$nota_1 , `nota_2`=$nota_2 , `nota_3`=$nota_3 where `student_id`=$id and `kurs_id`=$d ";
    $result= $conn->query($sql);
		if($result){
			
	include("nota.php");
		}
		else{
			echo"nuk u be";
		}
	}

	
	
?>
</body>
</html>