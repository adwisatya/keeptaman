<?php
	include("../connect.php");
	
	if(isset($_GET['command'])){
		$username = "admin";
		$password  = "adminbaru";
		$name = "administrator2";
		$email = "test";
		switch($_GET['command']){
			case 0 : $data = mysql_query("INSERT INTO admin (`username`, `password`, `name`, `email`) VALUES ('$username', '$password', '$name', '$email');");
					break;
			case 1 : $data = mysql_query("DELETE FROM admin WHERE `username` = '$username'");
					break;
			case 2 : $data = mysql_query("UPDATE admin SET password='$password',name='$name',email='$email' WHERE username = '$username'");
					break;
			default:
				echo "Command not found";
				break;
		}
	}else{
		$data	=	mysql_query("SELECT * from admin");
		if(mysql_num_rows($data)>0){
			while($user= mysql_fetch_array($data)){
				echo $user['password'];
			}
		}else{
			echo "Tidak ada data";
		}
	}
?>