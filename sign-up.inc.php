<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$conn=mysqli_connect("localhost","erudvirb_Dardi20","29w,#P7!v+8V","erudvirb_proerud");
	if(isset($_POST['sign-upsubb'])){
		$uid=$_POST['uid'];
		$mail=$_POST['mail'];
		$pwd=$_POST['pwd'];
		if (empty($uid)||empty($mail)||empty($pwd)){
			header("Location:sign-up.php?error=emptyfields&uid=".$uid."&mail=".$mail);
			exit();
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&& !preg_match("/^[a-zA-Z0-9]*$/",$uid)){
			header("Location:sign-up.php?error=invaildmailuid");
			exit();
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			header("Location:sign-up.php?error=invalidmail&uid=".$uid);
			exit();
		}
		else if(!preg_match("/^[a-zA-Z0-9]*$/",$uid)){
			header("Location:sign-up.php?error=invailduid&mail=".$mail);
			exit();
		}
		else{
			$sql="SELECT emer from usebr where  emer=?";
			$stmt=mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location:sign-up.php?error=sqlerror");
				exit();
			}
			else
			{
				mysqli_stmt_bind_param($stmt,"s",$uid);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$result=mysqli_stmt_num_rows($stmt);
				if($result>0){
				header("Location:sign-up.php?error=usertaken&mail=".$mail);
					exit();
				}
				else{
					$sql="INSERT INTO usebr(emer,email_user,pwd) values(?,?,?)";
					$stmt=mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt,$sql)){
							header("Location:sign-up.php?error=sqlerror");
						
						
					}
					else{
						$hashed=password_hash($pwd,PASSWORD_DEFAULT);
						mysqli_stmt_bind_param($stmt,"sss",$emer,$mail,$hashed);
						mysqli_stmt_execute($stmt);
						header("Location:sign-up.php?sign-up=success");
						exit();
						
					}
				}
			
		}}
		mysqli_stmt_close($stmt);
	}
	else{
		header("Location:sign-up.php");
		exit();
	}
	?>
</body>
</html>