<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php

$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
	
	$sql="SELECT  users.student_id, emer,mbiemer ,pro.kurs_id,nota,nota_1,nota_2,nota_3 from `proces`,`users`,`presor`,`kurs`,`pro` where presor_emer='Besnik' and proces.student_id=users.student_id And kurs.kurs_id=pro.kurs_id   And kurs.kurs_id=proces.kurs_id And presor.presor_id=pro.presor_id";
	$result=mysqli_query($conn,$sql);
	
	$numresults=mysqli_num_rows($result);
	if($numresults>0){
		while($row=mysqli_fetch_assoc($result)){
		
			$b=$row['student_id'];
			$a=$row['kurs_id'];
			echo $row['nota'];
			echo "<br>"; 
			echo $row['nota_1'];
			echo "<br>"; 
			echo $row['nota_2'];
			echo "<br>";
			echo $row['nota_3'];
			echo "<br>";
			echo $row['emer'];
			echo "<br>";
			echo $row['mbiemer'];
			echo "<br>";
			echo $a;
			echo "<br>";
			
			echo"<br>";
			$sql1="SELECT*from users where  student_id=$b";
		
			$result1=mysqli_query($conn,$sql1);
			
			
			$numresults1=mysqli_num_rows($result1);
			
			if(($numresults1>0)){
				
				while($row1=mysqli_fetch_assoc($result1)){
					
				   echo $row1['student_id'];
					echo"<br>";
					echo"<br>";
				$c="<form action='in2.php'  method='POST'>
				<input type='hidden' name='id' value='".$row['student_id']."'>
				<input type='text' name='nota_1' value='".$row['nota_1']."'>
				<input type='text' name='nota_2' value='".$row['nota_2']."'>
				<input type='text' name='nota_3' value='".$row['nota_3']."'>
				<button name='comment'>edit</button>
				</form>";
			echo $c;
					
					


				
		}
	}
	
		
		}}
	
?>

</body>
</html>