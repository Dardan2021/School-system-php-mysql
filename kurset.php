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
		.c{
			
			
			max-height:20rem;
			overflow:auto;
		}
		
		.a{
			background-image:url("boo.jpg");
                        min-height:100vh;
			
			background-size:cover;
			background-position:center;
		}
               
	</style>

	
	<script>if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
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
						<a href="we.php" class="nav-link">
							<i class="fas fa-address-card"></i>
							Mbrapa
						</a>
					</li>
					
					
					
					
					
					
					
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid b">
		<div class="row a">
			
		
		
				<div class="col-lg-12 mx-auto  text-center d-flex justify-content-center align-items-center">
							<div class="card justify-content-center my-3 align-items-center ">
								<span class="ikon1 py-3 bg-danger"><i class="fas fa-user-plus"></i></span>
								<div class="card-body c mx-auto">
									
									<?php
								$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
										if(isset($_REQUEST['a'])){
											$a=$_REQUEST['a'];
										}
									else{
										$a=$_REQUEST['a'];
									}
									echo $a;
									
									$sql="Select kurs.kurs_id,kurs.kurs_emer,presor_emer from pro,kurs,presor where kurs.kurs_id=pro.kurs_id And presor.presor_id=pro.presor_id And presor.presor_emer='$a'";
									
									$result=mysqli_query($conn,$sql);
									if($result){
									
									
										$num=mysqli_num_rows($result);
										if($num>0){
										while($row=mysqli_fetch_assoc($result)){
											
											echo "<form action='nota.php' method='GET'>
											<input type='hidden' value='".$row['presor_emer']."'  name='k'>";
										
											echo "<button type='submit' class='btn btn-outline-danger' name='d' value='".$row['kurs_id']."'>
											'".$row['kurs_emer']."'</button>";
											echo"</form>";
						
					
							
						
											
											
											
										}
							
										}
										else echo"nuk u be 1";
									}
									else echo"nuk u be 2";
									?>
									
							
								</div>
								</div>
							</div>
				</div>
			
	</div>
	
	
			
		
			
	
<script src="jquery-3.4.1.min.js"></script>
<script src="java.js"></script>
			<script src="bootstrap.bundle.min.js"></script>
</body>
</html>
