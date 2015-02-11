<?php
session_start();
//include("../connect.php");
if(!isset($_SESSION['login']['status'])){
	$username	=	"a"; //$_POST['username'];
	$password	=	"test"; //$_POST['password'];

	if($username && $password){
		//$hasil_query = mysql_query("SELECT password from admin WHERE username = '$username'");
		$hasil_query = "test";
		if($hasil_query==NULL){
			false;
		}else{
			if($password==$hasil_query){
				$_SESSION['login']['status'] = true;
				$_SESSION['login']['username'] = $username;
			}
		}
	}else{
		echo "isikan username dan password";
	}
	print_r($_SESSION['login']);
}
?>