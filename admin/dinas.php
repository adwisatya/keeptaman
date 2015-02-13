<?php
	include("../connect.php");
	if(isset($_GET['command'])){
		switch($_GET['command']){
			case 0 : $data = mysql_query("INSERT INTO pihak_berwenang (`id_lembaga`, `nama_lembaga`, `email`, `no_telepon`) VALUES ('$id', '$nama_lembaga', '$email', '$no_telepon');");
					break;
			case 1 : $data = mysql_query("DELETE FROM pihak_berwenang WHERE `id_lembaga` = '$id_lembaga'");
					break;
			case 2 : $data = mysql_query("UPDATE pihak_berwenang `nama_lembaga`='$nama_lembaga', `email`='$email', `no_telepon`='$no_telepon' WHERE `id_lembaga` = $id_lembaga");
					break;
			default:
				echo "$command not found";
				break;
		}
	}else{
		$data	=	mysql_query("SELECT * from pihak_berwenang");
		if(mysql_num_rows($data)>0){
			while($dinasterkait= mysql_fetch_array($data)){
				echo $dinasterkait['nama_lembaga'];
			}
		}else{
			echo "Tidak ada data";
		}
	}
?>