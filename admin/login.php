<?php
session_start();
include("../connect.php");
if(true/*!isset($_SESSION['login']['status'])*/){
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username && $password){
		$hasil_query = mysql_fetch_array(mysql_query("SELECT * from admin WHERE username='$username'"));
		if($hasil_query==NULL){
			echo '<script>
						if(confirm("Username atau password salah") == true){
							window.location = "../front-end/index.html#contact";
						}
				</script>';
		}else{
			if($password==$hasil_query['password']){
				$_SESSION['login']['status'] = true;
				$_SESSION['login']['username'] = $username;
				header("location: ../front-end/page-admin.php");
			}else{
				echo '<script>
						if(confirm("Username atau password salah") == true){
							window.location = "../front-end/index.html#contact";
						}
				</script>';
			}
		}
	}else{
		echo '<script>
						if(confirm("Username atau password salah") == true){
							window.location = "../front-end/index.html#contact";
						}
				</script>';
	}
}else{
	echo '<script>
						if(confirm("Username atau password salah") == true){
							window.location = "../front-end/index.html#contact";
						}
				</script>';
}
?>