<?php
session_start();
$_SESSION['a'] = 'b';
if(isset($_GET['logout'])){
	session_destroy();
	header("location: login.php");
}else if(isset($_SESSION['login']['status'])){
	print "logged in";
}else{
	header("location: login.php");
}
?>