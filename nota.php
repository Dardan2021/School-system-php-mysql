


<!doctype html>
<html><head>
     <title>Departamenti i Shkencave Kompjuterike Ismail Qemali</title>
    <link rel="icon" href="uv.png">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="styLesheet"  href="css/all.css">
	<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script><script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>

<meta charset="utf-8">
	<style>
		.navbar{
			border-top:3px solid   #f15025;
			border-bottom:3px solid #f15025;
			background-color:#242a33;
		}
		.navbar-brand{
			color:#f15025
		}
		.nav-link{
			color:#687384
		}
		.nav-link:hover{
			color:white;
		}
		.max-viewport{
			min-height:100vh;
			
		}
		.container-fluid{
			overflow:hidden;
			
		
		}
		.no-padding{
			padding:0;
		}
		.right-padding{
			padding-right;
		}
		.sidebar{
			background-color:#242a33;
		}
		.ikon{
			font-size:2rem;
			transform:rotate(-20deg);
		}
		.min-height{
			max-height:100vh;
			background:url("uvvbl.jpg");
			background-size:cover;
			background-position:center;
			
		}
		.card{
			color:white;
			font-size:4rem;
			animation:fromleft;
			animation-duration: 4s;
		
			
			
		}
		
			
		
		td{
			width:1%;
		}
		.card{
			background-color:#242a33;
		}
		.pas{
			width:10rem!important;
			height:30px;
		}
		.pas1{
			width:3rem!important;
			height:30px;
		}
		.btn-regj{
			transition:all 1s linear;
		}
		.card-body{
			width:100rem;
			height:20rem;
			overflow:auto;
		}
		.a{
			
		}
		.table{
			font-size:0.8rem;
			color:white;
		}
		.br{
			width:3rem;
		}
		.b{
			background-image:url("boo.jpg");
			
			height:100vh;
		}
		.n{
			height:100%;
		}
			</style>

	
<title>Untitled Document</title>
		

</head>

<body>
	
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a href="" class="navbar-brand  d-flex align-items-center text-uppercase">
				<h3>Departamenti i shkencave komjuterike</h3>
				<img src="uv.png"  class=" mx-5 img-fluid" width="10%" height="10%"alt="">
			</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
				<div class="bar1"><i class="fas fa-bars"></i></div>
				
		    </button>
			
			<div class="navbar-collapse collapse justify-content-end" id="myNav">
				<ul class="navbar-nav  ">
					<li class="nav-item">
						<form action="kurset.php" method="REQUEST">
						<?php
						session_start();
						
						echo '<input name="a" type="hidden" value="'.$_SESSION['presor_emer'].'">';
							
						?>
						<button type="submit" class="btn mx-3 btn-outline-danger">mbrapa</button>
					
				    </form>
					</li>
					
					
					<li class="nav-item">
						<form method="GET" action="f.php">
						<button type="submit" name="logout" class="nav-link btn btn-danger">
							<i class="fas fa-sign-out-alt"></i>
							Log-out
							</button>
						
					</form>
					</li>
					
					
					
					
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid b">
		<div class="row n ">
			
		
		
				<div class="col-lg-12 mx-auto  text-center d-flex justify-content-center align-items-center">
							<div class="card justify-content-center my-3 align-items-center ">
								<span class="ikon1 py-3 bg-danger"><i class="fas fa-user-plus"></i></span>
								<div class="card-body mx-auto">
									
							<?php
									
						
							
						
						
$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
	if(isset($_GET['k'])){
			$k=$_GET['k'];
		
	
	}
	else{
		
		
		$k=$_SESSION['presor_emer'];
		}
			
	
	if(isset($_GET['d'])){
		$d=$_GET['d'];
		
	}
			else{
										$d=$_GET['d'];
			}
		
	$sql="SELECT users.student_id, emer,mbiemer ,proces.kurs_id,nota,nota_1,nota_2,nota_3 from `proces`,`users`,`presor`,`kurs`,`pro` where presor_emer='$k' and kurs.kurs_id=$d and proces.student_id=users.student_id And kurs.kurs_id=pro.kurs_id And kurs.kurs_id=proces.kurs_id And presor.presor_id=pro.presor_id";
	$result=mysqli_query($conn,$sql);
	
	$numresults=mysqli_num_rows($result);
	if($numresults>0){
		while($row=mysqli_fetch_assoc($result)){
			
			$b=$row['student_id'];
			$a=$row['kurs_id'];
			
			echo"<table class='table '>";
			echo"<tr>
			<td>Nota</td>
			<td>Nota1</td>
			<td>Nota2</td>
			<td>Nota3</td>
			<td>Emer</td>
			<td>Mbiemer</td>
			<td class='br'></td>
			<td>Hidh Nota1</td>
			<td>Hidh Nota2</td>
			<td>Hidh Nota3</td>
			
		</tr>";
			echo"<tr>";
			echo"<td>";
			echo $row['nota'];
			echo"</td>";
			echo"<td>"; 
			echo $row['nota_1'];
			echo"</td>";
			echo"<td>";
			echo $row['nota_2'];
			echo"</td>";
			echo"<td>"; 
			echo $row['nota_3'];
			echo"</td>";
			echo"<td>"; 
			echo $row['emer'];
		     echo"</td>";
				echo"<td>"; 
			echo $row['mbiemer'];
			echo"</td>";
				
			
			
			$sql1="SELECT*from users where  student_id=$b";
		
			$result1=mysqli_query($conn,$sql1);
			
			
			$numresults1=mysqli_num_rows($result1);
			
			if(($numresults1>0)){
				
				while($row1=mysqli_fetch_assoc($result1)){
					
				
					
				echo"<form action='in2.php'  onsubmit='return validate(this);' id='very_unique_id' class='contact-form'  method='GET'>";
				echo"<td><input type='hidden' name='id'  value='".$row['student_id']."'></td>";
				echo"<td><input type='text' name='nota_1' id='nota_1' value='".$row['nota_1']."'></td>";
				echo"<td><input type='text' name='nota_2' id='nota_2' value='".$row['nota_2']."'></td>";
				echo"<td><input type='text' name='nota_3' id='nota_3' value='".$row['nota_3']."'></td>";
					
					echo"<td><input type='hidden' name='d' value='".$_GET['d']."'></td>";
					
				echo"<td class='br'><button id='submit'   class='btn btn-outline-danger' name='submit'>edit</button></td>"
					;
				echo"</form>
			";
					
					echo"</tr>";
			
					
					


				
		}
	}
	
		
		}
	echo"</table>";}
	
	
?>								
							
									</div>
								</div>
							</div>
				</div>
			
	</div>
	
	
			
		
			
	
<script src="jquery-3.4.1.min.js"></script>
<script src="java.js"></script>
			<script src="bootstrap.bundle.min.js"></script>
	<script src="jquery.cookie.js"></script>
		<script>
		function validate(){
			var nota_1=document.getElementById('nota_1').value;
			var nota_2=document.getElementById('nota_2').value;
			var nota_3=document.getElementById('nota_3').value;
			var num=/^[0-9]+$/;
			
			if (nota_1 >= 30 || nota_2 >= 60 ||  nota_3 >= 10 ){
				var message='Ju lutem nota e pare duhet te jete <30,nota e dyta <60 dhe nota e 3<=10';
				alert(message);
				return false;
			}
			else if (isNaN(nota_1) || isNaN(nota_2) ||  isNaN(nota_3) ){
				var message='Duhet te vesh numer';
				alert(message);
                                return false;
			}
			else{
				return true;
			}
		}
	</script>
	 <script>
		     $( document).ready( function(){
			 
		
	
				  $("input").keypress(function(event){
				
				 console.log(event.which+"key is pressed3");
			  });
				  $("input").keyup(function(event){
				
				 console.log(event.which+"key is pressed2");
			  });
			
		  });
	  </script>

</body>
</html>
