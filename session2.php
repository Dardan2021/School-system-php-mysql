<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<?php
session_start();
function set_sess($s,$k){
	$_SESSION[$s]=$k;
}
function get_session($t){
	if(isset($_SESSION[$t])){
		return $_SESSION[$t];
	}
}
function flashsession($t){
	if(isset($_SESSION[$t])){
		$w=$_SESSION[$t];
		unset($_SESSION[$t]);
		return $w;
	}
}
?>
