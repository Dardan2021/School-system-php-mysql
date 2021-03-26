<?php
   

$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
				$idd=$_POST['idd'];
				
						$sql="DELETE*FROM `users` WHERE student_id=$idd ";
					$result=mysqli_query($conn,$sql);
					if($result){
						header ('Location:studentet-shtim.php');
					
			 
									
				}
else{
	echo"nuk u be";
}
?>