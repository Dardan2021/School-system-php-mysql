<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$id=$_POST['id'];
	$nota=$_POST['nota'];
	$user_emer=$_POST['user_emer'];


$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
	
	$sql="SELECT*from proces where  kodi_kursit='234' and presor_id='22'";
	$result=mysqli_query($conn,$sql);
	
	$numresults=mysqli_num_rows($result);
	if($numresults>0){
		while($row=mysqli_fetch_assoc($result)){
		
			$b=$row['id'];
			echo $row['nota'];
			echo "<br>";
			echo $row['id'];
			
			echo"<br>";
			$sql1="SELECT*from users where  id='$b'";
		
			$result1=mysqli_query($conn,$sql1);
			
			
			$numresults1=mysqli_num_rows($result1);
			
			if(($numresults1>0)){
				
				while($row1=mysqli_fetch_assoc($result1)){
					
				   echo $row1['user_emer'];
					echo"<br>";
					echo"<br>";
			
				
				;
					


				
		}
	}
	
		}
			
		
	}
	 
		$b="<form action='in2.php'  method='POST'>
				<input type='hidden' name='id' value='".$_POST['id']."'>
				<input type='text' name='nota' value='".$_POST['nota']."'>
				<input type='hidden' name='user_emer' value='".$_POST['user_emer']."'>
				";
		$b.="<button type='submit' name='comment'>editv</button>
				</form>";
			echo $b;		

	?>
	<?php
		

	
?>
	</body>
</html>
