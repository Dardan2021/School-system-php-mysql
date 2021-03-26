<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="styLesheet"  href="css/all.css">
	 <title>Departamenti i Shkencave Kompjuterike Ismail Qemali</title>
    <link rel="icon" href="uv.png">
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
		.card-body{
			font-size:1.3rem;
			height:30rem;
			overflow:hidden;
			
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
	
	</style>

	
<title>Untitled Document</title>
</head>

<body>
	
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a href="" class="navbar-brand d-flex align-items-center  text-uppercase">
				<a href="" class="navbar-brand  d-flex align-items-center text-uppercase">
				<h3>Departamenti i shkencave komjuterike</h3>
				<img src="uv.png"  class=" mx-5 img-fluid" width="10%" height="10%"alt="">
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
							Te hyrja
						</a>
					</li>
					
					
					
				</ul>
			</div>
		</div>
	</nav>
	
	<section class="backgroundi">
		<div class="container-fluid">

					<div class="row min-height">

						<div class="col-lg-12 mx-auto  text-center d-flex justify-content-center align-items-center">
							<div class="card my-5 justify-content-center align-items-center ">
							  <span class="ikon1 py-3 bg-danger"><i class="fas fa-user-plus"></i></span>
								<div class="card-body my-5 mx-auto">
								
								
							<form  class="my-3"  method="GET" action="reg2.php">
									<h5 class=" px-3">Jep kursin :</h5>
									<br>	
								<div class="input-group my-2">
									<?php
								$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
									$a=$_GET['a'];
									$sql="SELECT  kurs_emer from `kurs` where viti_kurs=$a";
									$result=mysqli_query($conn,$sql);
									if($result){
										while($row=mysqli_fetch_assoc($result)){
											echo"<table=class='table'>";
											echo"<tr>";
											echo"<td>";
											echo"<input type='checkbox'  class='form-control pas mx-3' name='kursi[]' value='".$row['kurs_emer']."'> ".$row['kurs_emer']."
											";
												echo"</td>";
											echo"</tr>";
											
										}
										echo"</table>";
									}
									
										?>
								</div>
							<?php
						session_start();
						echo '<input name="n" type="hidden" value="'.$_SESSION['student_id'].'">';
						
						?>
								<button   class="btn  btn-regj btn-outline-danger" name="submit" type="submit" >
									Regjistrohu
										
								</button>
							</form>
								
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