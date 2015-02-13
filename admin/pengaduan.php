<?php
	include("../connect.php");
	if(isset($_GET['command'])){
		/*
			$id_pengaduan = "1231";
			$id_taman = "123"; //harus lihat dari idtaman
			$nama_pelapor = "na23123ma 1213";
			$email_pelapor = "email 1213";
			$subjek_laporan = "subjek";
			$isi = "isi";
			$id_admin = "admin"; //harus lihat dari username admin
			$foto = "foto";
			$waktu_lapor = date ("2015-02-10");
			$status = "12311";
			*/
		switch($_GET['command']){
			case 1:
				$data = mysql_query("INSERT INTO `ppl_keep_taman`.`pengaduan` (`id_pengaduan`, `nama_pelapor`, `email_pelapor`, `id_taman`, `waktu_lapor`, `subjek_laporan`, `isi`, `foto`, `status`, `id_admin`) VALUES ('$id_pengaduan', '$nama_pelapor', '$email_pelapor', '$id_taman', '$waktu_lapor', '$subjek_laporan', '$isi', '$foto', '$status', '$id_admin');");
				break;
			case 2:
				$data = mysql_query("UPDATE `ppl_keep_taman`.`pengaduan` SET id_pengaduan='$id_pengaduan', nama_pelapor='$nama_pelapor', email_pelapor='$email_pelapor', id_taman='$id_taman', waktu_lapor='$waktu_lapor', subjek_laporan='$subjek_laporan', isi='$isi', foto='$foto', status='$status', id_admin='$id_admin'");
				break;
			case 3: 
				$data = mysql_query("DELETE FROM pengaduan WHERE id_pengaduan=$id_pengaduan");
				break;
			default:
				echo "command not found";
				break;
		}
	}else{
		$result 	=	mysql_query("SELECT * from pengaduan");
		if(mysql_num_rows($result)>0){
			$i = 1;
			while($data = mysql_fetch_array($result)){
				echo "<td>$i</td><td>".$data['nama_pelapor']."</td><td>".
					$data['email_pelapor']."</td><td>".
					$data['subjek_laporan']."</td><td>".
					$data['isi']."</td><td>".
					$data['status']."</td><td>";							
				$i++;					 
			}
		}else{
			echo "Tidak ada data";
		}
	}
?>