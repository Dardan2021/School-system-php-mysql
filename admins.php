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
						<a href="fa.html" class="nav-link">
						<i class="fa fa-home mr-3"></i>
							Hyrje
						</a>
					</li>
				
					<li class="nav-item">
						<a href="register.html" class="nav-link">
						<i class="fas fa-user-plus"></i>
							Rregjistrohu
						</a>
					</li>
					<li class="nav-item">
						<a href="login.html" class="nav-link">
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
								<span class="ikon1 py-3 bg-danger"><i class="fas fa-user-lock"></i></span>
								<div class="card-body mx-auto">
									
									<form  class="my-3" method="POST" >
								
							<div class="input-group my-2">
									<h5 class=" px-2 ml-3">Jep emer :</h5>
									<input type="text" class="form-control pas mx-3 " name="emer" placeholder="jep email">
									
									
								</div>
											
							<div class=" my-2 input-group">
									<h5 class="">Jep mbiemer :</h5>
									<input type="text" class="form-control pas mx-3" placeholder="jep mbiemer" name="mbiemer" id="mbiemer">
									
									
								</div>
								<div class=" my-2 input-group d-flex  ">
									<h5 class="">Jep password:</h5>
									<input type="password" class="form-control mx-3" name="password"  placeholder="jep password">
									
									
								</div>
								<button   class="btn  btn-regj btn-outline-danger" type="submit" >
									Log in
										
								</button>
							</form>
									</div>
								</div>
							</div>
						</div>
					</div>
		</div>
	</section>
			
		
	
<?php

$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
	if(isset($_POST['emer'])){
		$emer=$_POST['emer'];
	}
	if(isset($_POST['mbiemer'])){
		$mbiemer=$_POST['mbiemer'];
	}
	
	if(isset($_POST['password'])){
		$password=$_POST['password'];
	}
	$sql="SELECT administrator_emer from administrator where administrator_emer='$emer' and administrator_mbiemer='$mbiemer' and admin_password='$password' ";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo'
			<!doctype html>
<html>
<head>
<style>

		</style>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="styLesheet"  href="css/all.css">
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>	
<meta charset="utf-8">
	<style>
	.card{
			color:white;
			font-size:4rem;
			animation:fromleft;
			animation-duration: 4s;
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
					
					
					
					<li class="nav-item">
						<a href="fa.html" class="nav-link">
							<i class="fas fa-sign-out-alt"></i>
							Log-out
						</a>
					</li>
				
					
					
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-3 col-lg-2 sidebar right-padding max-viewport">
		
				<ul class="navbar-nav flex-column ">
					
					
					
					
					<li class="nav-item">
						<a href="profesor-table.html" class="nav-link">
							<i class="fas fa-chalkboard-teacher"></i>
							Menaxho profesoret
						</a>
					</li>
					<li class="nav-item">
						<a href="fa.html" class="nav-link">
							<i class="fas fa-user-graduate"></i>
							Menaxho studentet
						</a>
					</li>
				
					
					
					</li>
				</ul>
			</nav>
					<div class="col-lg-4 mx-auto  text-center d-flex justify-content-center align-items-center">
							<div class="card justify-content-center align-items-center ">
							  <span class="ikon1 py-3 bg-danger"><i class="fas fa-user-plus"></i></span>
								<div class="card-body mx-auto">
									
									<form  class="my-3"  method="POST" action="register2.php">
										<div class="input-group my-2">
											<h5 class="px-3">Jep emrin:</h5>
											<input type="text" class="form-control pas mx-3" placeholder="jep emer" name="emer" id="emer">


										</div>
												<div class=" my-2 input-group">
													<h5 class="">Jep mbiemer :</h5>
									                 <input type="text" class="form-control pas mx-3" placeholder="jep mbiemer" name="mbiemer" id="mbiemer">
									
									
								                </div>
								<div class="input-group my-2">
									<h5 class=" px-3">Jep email :</h5>
									<input type="text" class="form-control pas mx-3 " placeholder="jep email" name ="email" id="email">
									
									
								</div>
								<div class=" my-2 input-group d-flex  ">
									<h5 class="">Jep password:</h5>
									<input type="password" class="form-control mx-3  pas" placeholder="jep password" name="password" id="password">
									
									
								</div>
								<button   class="btn  btn-regj btn-outline-danger" name="submit" type="submit" >
									Regjistrohu
										
								</button>
							</form>
									</div>
								</div>
							
		</div>
		<div class="col-lg-3 mx-auto  text-center d-flex justify-content-center align-items-center">
							<div class="card justify-content-center align-items-center ">
							  <span class="ikon1 py-3 bg-danger"><i class="fas fa-user-plus"></i></span>
								<div class="card-body mx-auto">
									
									<form  class="my-3"  method="POST" action="preosor.php">
										<div class="input-group my-2">
											<h5 class="px-3">Jep Presor emer:</h5>
											<input type="text" class="form-control pas mx-3" placeholder="jep emer" name="emer" id="emer">


										</div>
												<div class=" my-2 input-group">
													<h5 class="mx-3">Jep Presor mbiemer :</h5>
									                 <input type="text" class="form-control pas mx-3" placeholder="jep mbiemer" name="mbiemer" id="mbiemer">
									
									
								                </div>
								
								<div class=" my-2 input-group d-flex  ">
									<h5 class="mx-3">Jep Presor password:</h5>
									<input type="password" class="form-control mx-3  pas" placeholder="jep password" name="password" id="password">
									
									
								</div>
								<button   class="btn  btn-regj btn-outline-danger" name="submit" type="submit" >
									Regjistrohu
										
								</button>
							</form>
									</div>
								</div>
							</div>
		</div>
		<div class="row">
			
	</div>
	
	
			
		
			
	
<script src="jquery-3.4.1.min.js"></script>
        <script src="java.js"></script>
        <script src="bootstrap.bundle.min.js"></script>
		<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>';
		
	}
	?>
			
		
			
	
<script src="jquery-3.4.1.min.js"></script>
        <script src="java.js"></script>
        <script src="bootstrap.bundle.min.js"></script>
</body>
</html>