<!doctype html>
<html>
<head>
	<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="styLesheet"  href="css/all.css">
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	.card{
			color:white;
			font-size:4rem;
			animation:fromleft;
			animation-duration: 4s;
	background-color:#242a33;
			
			
		}
		
			.background{
			background-image:url("boo.jpg");
			background-size: 100% 100%;
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
			min-height:85vh;
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
			100%{
				transform:scale(1,1.3) ;
				
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
</head>

<body>
	

	
<title>Untitled Document</title>
</head>

<body>
	
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid ">
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
					
					
					
					<li class="nav-item">
						<form action="log.php" method="GET">
						<button type="submit" name="logout"> 
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
	<div class="container-fluid">
		<div class="row  background">
			<nav class="col-md-3 col-lg-2 sidebar right-padding max-viewport">
		
				<ul class="navbar-nav flex-column ">
					
					
					
					
					<li class="nav-item">
						<a href="presoret-shtim.php" class="nav-link">
							<i class="fas fa-chalkboard-teacher"></i>
							Menaxho profesoret
						</a>
					</li>
					<li class="nav-item">
						<a href="studentet-shtim.php" class="nav-link">
							<i class="fas fa-user-graduate"></i>
							Menaxho studentet 
						</a>
					</li>
				
					
					
					</li>
				</ul>
			</nav>
					
	
	
			
		
			
	
<script src="jquery-3.4.1.min.js"></script>
        <script src="java.js"></script>
        <script src="bootstrap.bundle.min.js"></script>
		<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>