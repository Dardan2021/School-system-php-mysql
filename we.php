<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="styLesheet"  href="css/all.css">
 <title>Departamenti i Shkencave Kompjuterike Ismail Qemali</title>
    <link rel="icon" href="uv.png">
	
	<script>
		function noforward()
{
window.history.forward();
}
		
	</script>
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
			min-height:90vh;
			background:url("uvvbl.jpg");
			background-size:cover;
			background-position:center;
			animation-name:zoom;
			animation-duration:12s;
			animation-delay:1s;
		}
		.tekst-primar{
			color:white;
			font-size:3rem;
			animation:fromleft;
			animation-duration: 4s;
		
			
			
		}
		@keyframes zoom{
			0%{
				transform:scale(1);
			}
			50%{
				transform:scale(1,1.2) ;
				
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
		opacity:0.6;
	
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
				<ul class="navbar-nav  ">
				
					<li class="nav-item d-flex flex-wrap pt-2">
						<h5 class="emer-log">mire se erdhe </h5>
					</li>
					
					<li class="nav-item d-flex flex-wrap pt-2">
					<form action="kurset.php" method="REQUEST">
						<?php
						session_start();
						echo '<input name="a" type="hidden" value="'.$_SESSION['presor_emer'].'">';
							
						?>
						<button type="submit" class="btn btn-outline-danger">Kurset</button>
					
				    </form>
					
					<li class="nav-item">
					<form method="GET" action="f.php">
						<button type="submit" class="btn btn-outline-danger mx-3 mt-2" name="logout" class="nav-link">
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