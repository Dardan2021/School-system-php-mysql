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
			min-height:84vh;
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
	</style>

	
<title>Untitled Document</title>
	
	<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
	
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
						<a href="index.html" class="nav-link">
						<i class="fa fa-home mr-3"></i>
							Hyrje
						</a>
					</li>
				
					
					<li class="nav-item">
						<a href="login.html"  class="nav-link">
							<i class="fas fa-address-card"></i>
							Log-in
						</a>
					</li>
				
					
					
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
								<span class="bg-danger d-flex flex-wrap justify-content-center align-items-center p-2 my-2"><i class="fas fa-radiation-alt"></i><h5 class="mx-1">nuk gjendeni<br> student</h5></span>
								<div class="card-body mx-auto">
									
									<form  class="my-3" method="POST" action="login.php">
								
							<div class="input-group my-2">
									<h5 class=" px-2 ml-3">Jep emer :</h5>
									<input type="text" class="form-control pas mx-3 " id="emer" name="emer" placeholder="jep email">
									
									
								</div>
											
							
								<div class=" my-2 input-group d-flex  ">
									<h5 class="">Jep password:</h5>
									<input type="password" class="form-control mx-3" name="password" id="password" placeholder="jep password">
									
									
								</div>
								<input value="login"  class="btn  btn-regj btn-outline-danger" name="login" onclick="return validate();" type="submit" >
									
							</form>
								</div>
								</div>
							</div>
						</div>
					</div>
		</div>
	</section>
			
		
	<script>
		function validate(){
			var emer=document.getElementById("emer").value;
			var mbiemer=document.getElementById("mbiemer").value;
			var password=document.getElementById("password").value;
			
			if ((emer=="")||(mbiemer =="")||(password =="")){
				var message="log-in jo i plote";
				alert(message);
			}
		}
       </script>
			
		
			
	
<script src="jquery-3.4.1.min.js"></script>
        <script src="java.js"></script>
        <script src="bootstrap.bundle.min.js"></script>
</body>
</html>