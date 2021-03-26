<!doctype html>
<html>
	
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="styLesheet"  href="css/all.css">
	
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
			min-height:100vh;
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
		
			
		@-webkit-keyframes fromleft{
			0%{
				transform:translateX(-100px);
				opacity:0;
			}
			50%{
				transform:translateX(30px) ;
				
		}
			100%{
				transform:translateX(0) ;
				opacity:1;
			}
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
		td{
			font-size:1rem;
			color:white;
		}
		.card-body{
			max-height:20rem;
			overflow: auto;
		}
	</style>

	
<title>Untitled Document</title>
</head>

<body onload="noforward()">
	
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a href="" class="navbar-brand d-flex align-items-center  text-uppercase">
				<a href="" class="navbar-brand  d-flex align-items-center text-uppercase">
				<h3>Departamenti i shkencave komjuterike</h3>
				<img src="uv.png"  class=" mx-5 img-fluid" width="10%" height="10%" alt="">
			</a>
			
			</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav">
				<div class="bar1"><i class="fas fa-bars"></i></div>
				
		    </button>
			
			<div class="navbar-collapse collapse justify-content-end" id="myNav">
				<ul class="navbar-nav  ">
					
				<li class="nav-item">
						<a href="st.php" class="nav-link">
							<i class="fas fa-address-card"></i>
							Mbrapa
						</a>
					</li>
					
					<li class="nav-item">
						<form method="GET" action="f.php">
						<button type="submit" name="logout" class="nav-link btn btn-danger">
							<i class="fas fa-sign-out-alt"></i>
							Log-out
							</button>
						
					</form>
					</li>
				
					
					
					
				</ul>
			</div>
		</div>
	</nav>
	<section class="backgroundi">
		<div class="container-fluid">

					<div class="row min-height">

						<div class="col-lg-9 mx-auto  text-center d-flex justify-content-center align-items-center">
							<div class="card justify-content-center align-items-center ">
								<span class="ikon1 py-3 bg-danger"><i class="fas fa-user-plus"></i></span>
								<div class="card-body mx-auto">
									
									<?php
									if(isset($_POST['sub'])){
								$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
									$n=$_POST['n'];
									
					$sql="Select kurs_emer,nota_1,nota_2,nota_3,nota from proces,kurs,users where kurs.kurs_id=proces.kurs_id AND users.student_id=proces.student_id AND users.student_id=$n ";
									$result=mysqli_query($conn,$sql);
									if($result){
										$num=mysqli_num_rows($result);
										if($num>0){
										
										
										while($row=mysqli_fetch_assoc($result)){
								echo"<table class='table'>";
									
									echo "
									<tr>
											<td>Emri i kursit</td>
											<td>Nota1</td>
											<td>Nota2</td>
											<td>Nota3</td>
											<td>Nota</td>
									      </tr>
									<tr>
											<td>".$row['kurs_emer']."</td>
											<td>".$row['nota_1']."</td>
											<td>".$row['nota_2']."</td>
											<td>".$row['nota_3']."</td>
											<td>".$row['nota']."</td>
									      </tr>
									</table>";
										
									}
										}
											
										else{
												echo"no";
											}
									
									}
									else{
												echo"no2";
											}}
									
									
									
									?>
									</div>
								</div>
							</div>
						</div>
					</div>
		</div>
	</section>
			
		
	
			
		
			
	
<script src="jquery-3.4.1.min.js"></script>
        <script src="java.js"></script>
        <script src="bootstrap.bundle.min.js"></script>
</body>
</html>