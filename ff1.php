<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php

$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
	
	$sql="SELECT proces.student_id , emer ,mbiemer ,nota from `proces`,`users` where kurs_id=11 AND proces.student_id=users.student_id ";
	$result=mysqli_query($conn,$sql);
	if($result){
	$numresults=mysqli_num_rows($result);
	if($numresults>0){
		while($row=mysqli_fetch_assoc($result)){
		
		
			
			echo $row['nota'];
			echo "<br>"; 
			echo $row['emer'];
			echo "<br>";
			echo $row['mbiemer'];
			echo "<br>";
			
			echo "<br>";
		
			
			
			
		
					
				   
					echo"<br>";
					echo"<br>";
				$c="<form action='in2.php'  method='POST'>
				<input type='hidden' name='student_id' value='".$row['student_id']."'>
					
				<input type='text' name='nota' value='".$row['nota']."'>
				
				<button name='comment'>edit</button>
				</form>";
			echo $c;
					
					


				
		}
	}
	
	}
	else{echo "nuk u be";}
		
	
	
?>

</body>
</html>