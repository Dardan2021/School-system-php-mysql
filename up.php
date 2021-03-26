<?php 
	
	$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
	

				

	

	
	
		
		if(isset($_POST['ndrysho1'])){
	
		$id=$_POST['id'];
		$emer=$_POST['emer'];
		$mbiemer=$_POST['mbiemer'];
		$pass=$_POST['pass'];
	

	
	$sql="UPDATE presor SET presor_emer='$emer', presor_mbiemer='$mbiemer', presor_password='$pass' where presor_ID=$id ";

$result1=mysqli_query($conn,$sql);
			if($result1){
				
			
	
		header ('Location:presoret-shtim.php');
	
			}
	


		
	}



	
	

	?>