<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
	if(isset($_GET['submit'])){
		if(isset($_GET['kursi'])){
$kursit = $_GET['kursi'];
		}
else{
	$kursit="kursi[] ";
}


$st=implode("','",$kursit);
	

$n=$_GET['n'];

//STEP 1
$query1="SELECT student_id FROM `users` WHERE student_id= $n ";
$result1 = mysqli_query($conn, $query1);

if( mysqli_num_rows($result1) > 0)
  {
    while ($row = mysqli_fetch_array($result1)) {
     $student_id = $row['student_id'];
    }
      
  }
//STEP 2
$query2="SELECT kurs_id FROM `kurs` WHERE kurs_emer IN ('$st') ";
$result2 = mysqli_query($conn, $query2);

if( mysqli_num_rows($result2) > 0)
  {
    while ($row = mysqli_fetch_array($result2)) {
     $kurs_id = $row['kurs_id'];
    
  
		 
$query3 ="INSERT INTO `proces` (student_id, kurs_id) values('$student_id' , '$kurs_id')";
 
$result4=mysqli_query($conn, $query3);
			
	if($result4){
		header("Location:st.php");
	}
	else{
		header("Location:st.php");
		
	}

}
	    
  }
}

	
	?>
</body>
</html>