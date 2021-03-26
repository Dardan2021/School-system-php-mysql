<?php
$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
if (isset($_POST['fshi'])){
				$id=$_POST['id'];
				  echo' <input type="hidden" name="id" value="'.$id.'">';
						$sql='DELETE FROM presor WHERE presor_ID="'.$id.'"';
					$result=mysqli_query($conn,$sql);
					if($result){
						header ('Location:presoret-shtim.php');
					}
			 
									
				}
?>