<?php
	include("../connect.php");
	
	if(isset($_GET['command'])){
		$id_taman = 123;
		$nama_taman = "adwisatya";
		$alamat	=	"dsadsa";
		$geolokasi = "123213";
		$username_admin = "admin";
		switch($_GET['command']){
			case 0 : $data = mysql_query("INSERT INTO taman (`id_taman`, `nama_taman`, `alamat`, `geolokasi`, `username_admin`) VALUES ('$id_taman', '$nama_taman','$alamat','$geolokasi','$username_admin');");
					break;
			case 1 : $data = mysql_query("DELETE FROM taman WHERE `id_taman` = '$id_taman'");
					break;
			case 2 : $data = mysql_query("UPDATE taman SET nama_taman='$nama_taman',alamat='$alamat',geolokasi='$geolokasi',username_admin='$username_admin' WHERE id_taman = '$id_taman'");
					break;
			default:
				echo "Command not found";
				break;
		}
	}else{
		$data	=	mysql_query("SELECT * from taman");
		if(mysql_num_rows($data)>0){
			while($user= mysql_fetch_array($data)){
				echo $user['nama_taman'];
			}
		}else{
			echo "Tidak ada data";
		}
	}
?>