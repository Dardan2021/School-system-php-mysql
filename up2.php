<?php 
	
$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");

				

	

	
	
		
		if(isset($_POST['ndrysho1'])){
	
		$id=$_POST['id'];
		$emer=$_POST['emer'];
		$mbiemer=$_POST['mbiemer'];
		$pass=$_POST['pass'];
			$email=$_POST['email'];
			$viti=$_POST['viti'];
	

	
	$sql="UPDATE users SET emer='$emer',viti_users='$viti',mbiemer='$mbiemer', password='$pass' where student_id=$id ";

$result1=mysqli_query($conn,$sql);
			if($result1){
				
			
	
		header ('Location:studentet-shtim.php');
	
			}
	


		
	}



	
	

	?>