<!doctype html>
<html>
<head>
<style>

		</style>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="styLesheet"  href="css/all.css">
<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
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
		
		td{
			font-size:1rem;
			color:white;
		}
		table{
			
		}
		input{
			width:4rem;
			background-color:#242a33;
			border-width:0;
			color:white;
		}
		.mak{
			width:9rem;
		}
		.background{
			background-image:url("boo.jpg");
			background-size: 100% 100%;
		}
                .c{
                    overflow:auto;
                    max-height:20rem;
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
						<a href="index.html" class="nav-link">
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
		<div class="row background">
			<nav class="col-md-3 col-lg-2 sidebar right-padding max-viewport">
		
				<ul class="navbar-nav flex-column ">
					
					
					
					
					<li class="nav-item">
						<a href="profesor-table.html" class="nav-link">
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
		
		<div class="col-lg-3 mx-auto  text-center d-flex justify-content-center align-items-center">
							<div class="card justify-content-center align-items-center ">
							  <span class="ikon1  bg-danger"><i class="fas fa-user-plus"></i></span>
								<div class="card-body  mx-auto">
									
									<form  class="my-3"  name="myForm" method="POST"  onsubmit="return validateForm()" action="preosor.php">
										
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
			<div class="col-lg-5 mx-auto  text-center d-flex justify-content-center align-items-center">
							<div class="card justify-content-center my-3 align-items-center ">
							  <span class="ikon1  bg-danger"><i class="fas fa-user-plus"></i></span>
								<div class="card-body c mx-auto">
									<?php
									$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
									$sql1='SELECT*FROM presor';
									$result=mysqli_query($conn,$sql1);
									
									echo '<table class="table tabela">';
									echo'<tr>';
									echo'<td scope="col">Emer</td>';
									echo'<td scope="col">Mbiemer</td>';
									echo'<td scope="col">Password</td>';
									echo'</tr>';
									
									 while($row=mysqli_fetch_assoc($result)){
										
										 echo'<tr >';
										 
									
										 echo'<td scope="col">'.$row['presor_emer'].'</td>';
										 echo'<td scope="col">'.$row['presor_mbiemer'].'</td>';
										 echo'<td scope="col">  '.$row['presor_password'].'</td>';
										 echo'<form method="POST" action="form.php">';
										 echo' <input type="hidden" name="id" value="'.$row['presor_id'].'">';
										  echo' <input type="hidden" name="emer" value="'.$row['presor_emer'].'">';
										  echo' <input type="hidden" name="mbiemer" value="'.$row['presor_mbiemer'].'">';
										 echo' <input type="hidden" name="pass" value="'.$row['presor_password'].'">';
										 echo'<td><button class="btn btn-outline-success" name="ndrysho" type="submit">ndrysho</button></td>';
										  echo'</form>';
										
										 echo'</tr>';
										
									  }
									
									 
									echo'</table>';
									
									
									?>
								
									</div>
								</div>
							</div>
		</div>
		
			
	</div>
	
	
    
		
			
	
<script src="jquery-3.4.1.min.js"></script>
        <script src="java.js"></script>
        <script src="bootstrap.bundle.min.js"></script>
        <script>
		function validateForm() {
  var x = document.forms["myForm"]["emer"].value;
  if (x == "") {
    alert("Duhet te shkruash emrin");
    return false;
  }
}
</script>
		
</body>
</html>