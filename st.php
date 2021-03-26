			<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="styLesheet"  href="css/all.css">
	 <title>Departamenti i Shkencave Kompjuterike Ismail Qemali</title>
    <link rel="icon" href="uv.png">
<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
	
<meta charset="utf-8">
	<style>
		.navbar{
			border-top:3px solid  #f15025;
			border-bottom:3px solid #f15025;
			background-color:#242a33;
			overflow: hidden;
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
		.backgroundi{
			
			
		}
		.container-fluid{
			overflow:hidden;
			
		
		}
		.min-height{
			min-height:100vh;
			background:url("uvvbl.jpg");
			background-size:cover;
			background-position:center;
			animation-name:zoom;
			animation-duration:12s;
			animation-delay:1s;
		}
		.tekst-primar{
			color:white;
			font-size:4rem;
			animation:fromleft;
			animation-duration: 4s;
		
			
			
		}
		@keyframes zoom{
			0%{
				transform:scale(1);
			}
			50%{
				transform:scale(1,1.3) ;
				
		    }
			100%{
				transform:scale(1);
			}
			
		}
			
		@-webkit-keyframes fromleft{
			0%{
				transform:translateX(-120px);
				opacity:0;
			}
			50%{
				transform:translateX(20px) ;
				
		}
			100%{
				transform:translateX(0px) ;
				opacity:1;
			}
		}
		.emer-log{
		color:white;
		opacity:0.8;
		animation:fromleft1;
		animation-duration: 6s;
		margin-right:20px;
		opacity:0.9;
	
		}
		@-webkit-keyframes fromleft1{
			0%{
				transform:translateX(-130px);
				opacity:0;
			}
			50%{
				transform:translateX(10px) ;
				
		}
			100%{
				transform:translateX(0px) ;
				opacity:1;
			}
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
				<ul class="navbar-nav   ">
				
					<li class="nav-item pt-2">
						<h5 class="emer-log">mire se erdhe </h5>
					</li>
					<li class="nav-item  ">
						<form action="reg.php" method="GET">
						<?php
						
						session_start();
						$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
							$c=$_SESSION['student_id'];
								$sql="Select*from users where student_id=$c";
							$result=mysqli_query($conn,$sql);
							if($result){
								$num=mysqli_num_rows($result);
								
								while($row=mysqli_fetch_assoc($result)){
									echo '<input name="a" type="hidden" value="'.$row['viti_users'].'">';
								
								}
									
							}
						
						
						?>
						<button   class="btn btn-outline-danger emer-log"type="submit"><i class="fas fa-user-plus"></i>regjistrohu</button>
						</form>
						
					</li>
					
					<li class="nav-item   ">
						<form action="shiko.php" method="POST">
						<?php
						
						echo '<input name="n" type="hidden" value="'.$_SESSION['student_id'].'">';
							$conn=mysqli_connect("localhost","root","","final-project");
								$sql="Select*from users";
							$result=mysqli_query($conn,$sql);
							if($result){
								$num=mysqli_num_rows($result);
								
								while($row=mysqli_fetch_assoc($result)){
									echo '<input name="a" type="hidden" value="'.$row['viti_users'].'">';
								}
							}
						
						
						?>
						<button type="submit"name="sub" class="btn btn-outline-danger">Shiko</button>
						</form>
					</li>
					
					
					<li class="nav-item mx-3 mb-0">
					<form method="GET" action="f1.php">
						<button type="submit" name="logout" class="nav-link btn btn-danger">
							<i class="fas fa-sign-out-alt"></i>
							Log-out
						</button>
						
					</form>
					
				</ul>
			</div>
		</div>
	</nav>
	<section class="backgroundi">
		<div class="container-fluid">

					<div class="row min-height">

						<div class="col-lg-9 mx-auto  text-center d-flex justify-content-center align-items-center">
							<div class="banner">
							   <h1 class="tekst-primar">Mireserdhet  ne faqe</h1>
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