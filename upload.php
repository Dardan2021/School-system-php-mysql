<?php
$conn=mysqli_connect("localhost","root","","final-project");
if(isset($_POST['submit'])){
	$fileCount=count($_FILES['file']['name']);
	for($i=0;$i<$fileCount;$i++){
		$fileName=$_FILES['file']['name'][$i];
		$sql="INSERT into upload (title,img) values('$fileName','$fileName')";
		$result=mysqli_query($conn,$sql);
		if($result){
			echo"file upload";
		}
		else{
			echo "file not upload";
		}
		
	}
}
?>