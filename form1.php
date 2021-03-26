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
                .card{
                    overflow:auto;
                    height:40vhl
        
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
		
		.colore{
			background-color:rgb(255,250,250,0.7);
			color:black;
			width:5rem;
			border-radius:5%;
			
		}
                .c{
                    max-height:20rem;
			overflow:auto;
                }
                .background{
			background-image:url("boo.jpg");
			background-size: 100% 100%;
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
					
		<div class="col-lg-4 mx-auto  text-center d-flex justify-content-center align-items-center">
						
							
		                  </div>
			<div class="col-lg-5 mx-auto  text-center d-flex justify-content-center align-items-center">
							<div class="card c justify-content-center my-3 align-items-center ">
							  <span class="ikon1  bg-danger"><i class="fas fa-user-plus"></i></span>
								<div class="card-body c mx-auto">
									<?php
										
	                             $conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
									$sql2='SELECT*FROM users';
									$result2=mysqli_query($conn,$sql2);
									
									echo '<table class="table tabela">';
									echo'<tr>';
									echo'<td scope="col">Emer</td>';
									echo'<td scope="col">Mbiemer</td>';
									echo'<td scope="col">Password</td>';
									echo'<td scope="col">viti</td>';
									echo'</tr>';
									echo'<tr>';
									 if(isset($_POST['ndrysho'])){
										 $id=$_POST['id'];
									$emer=$_POST['emer'];
									$mbiemer=$_POST['mbiemer'];
									$pass=$_POST['pass'];
									$viti=$_POST['viti'];
									
									$sql1='SELECT*FROM presor where student_id='.$id.'';
									$result=mysqli_query($conn,$sql1);
										  echo'<form method="POST" action="up2.php">';
											 echo' <input type="hidden" name="id" value="'.$id.'">';
											 echo'<td scope="col"><input type="text" class="colore" name="emer" value="'.$emer.'"></td>';
											 echo'<td scope="col"><input type="text" class="colore" name="mbiemer" value="'.$mbiemer.'"></td>';
											 echo'<td scope="col"><input type="text" class="colore" name="pass" value="'.$pass.'"></td>';
										 
										  echo'<td scope="col"><input type="text" class="colore" name="viti" value="'.$viti.'"></td>';
											 echo'<td><button class="btn btn-outline-success" name="ndrysho1" type="submit">ndrysho</button></td>';
										  echo'</form>';
										
										
									
									 }
									echo'</tr>';
									 while($row=mysqli_fetch_assoc($result2)){
										
										 echo'<tr >';
										
										 echo'<td scope="col">'.$row['emer'].'</td>';
										 echo'<td scope="col">'.$row['mbiemer'].'</td>';
										 echo'<td scope="col">  '.$row['password'].'</td>';
										
										 echo'<td scope="col">  '.$row['viti_users'].'</td>';
										
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
		
</body>
</html>	