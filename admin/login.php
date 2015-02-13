<?php
session_start();
include("../connect.php");
if(!isset($_SESSION['login']['status'])){
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username && $password){
			$hasil_query = mysql_fetch_array(mysql_query("SELECT * from admin WHERE username='$username'"));
			if($hasil_query==NULL){
				echo "Null";
			}else{
				if($password==$hasil_query['password']){
					$_SESSION['login']['status'] = true;
					$_SESSION['login']['username'] = $username;
					header("location: main.php");
				}else{
					echo "username password salah";
				}
			}
		}else{
			echo "Isikan username password";
		}
	}else{
		?>
			<form method="post" action="">
				<input type="text" name="username">
				<input type="password" name="password">
				<input type="submit" name="login">
			</form>
		<?php
	}
}else{
	header("location: main.php");
}
?>