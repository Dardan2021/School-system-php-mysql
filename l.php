<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<?php

$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
	$n = mysqli_real_escape_string($conn, $_REQUEST['n']);
	
	$sql="SELECT emer from vk where  emer='eheheh'";
	$result=mysqli_query($conn,$sql);
	
	$numresults=mysqli_num_rows($result);
	if($numresults>0){
		while($row=mysqli_fetch_assoc($result)){
			$b=$row['kursi'];
		echo $b;	
			$result1=mysqli_query($conn,$sql1);
			if($result){
				echo"<p>u be</p>";
			}
		}
	}
?>
<body>
</body>
</html>