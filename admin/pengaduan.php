<?php
	include("../connect.php");
	if(isset($_GET['command'])){
		
			// $id_pengaduan = "1231";
			$id_taman = $_POST['id_taman'];
			$nama_pelapor = $_POST['nama'];
			$email_pelapor = $_POST['email'];
			$subjek_laporan = $_POST['subjek'];
			$isi = $_POST['isi'];
			$id_admin = ""; //harus lihat dari username admin
			$waktu_lapor = date("Y-m-d");
			$status = "0";
			$target_file = $_POST['filename'];

			
		switch($_GET['command']){
			case 1:
				$data = mysql_query("INSERT INTO `pengaduan` (`nama_pelapor`, `email_pelapor`, `id_taman`, `waktu_lapor`, `subjek_laporan`, `isi`, `foto`, `status`, `id_admin`) VALUES ('$nama_pelapor', '$email_pelapor', '$id_taman', '$waktu_lapor', '$subjek_laporan', '$isi', '$target_file', '$status', '$id_admin');");
				break;
			case 2:
				$data = mysql_query("UPDATE `pengaduan` SET id_pengaduan='$id_pengaduan', nama_pelapor='$nama_pelapor', email_pelapor='$email_pelapor', id_taman='$id_taman', waktu_lapor='$waktu_lapor', subjek_laporan='$subjek_laporan', isi='$isi', foto='$foto', status='$status', id_admin='$id_admin'");
				break;
			case 3: 
				$data = mysql_query("DELETE FROM pengaduan WHERE id_pengaduan=$id_pengaduan");
				break;
			case 4:
				$data = mysql_query("SELECT * from taman NATURAL JOIN pengaduan");
				break;
			default:
				echo $_GET['command']."command not found";
				break;
		}
	}else{
		$result 	=	mysql_query("SELECT * from pengaduan");
		if(mysql_num_rows($result)>0){
			$i = 1;
			while($data = mysql_fetch_array($result)){
				echo '
                        <tr>
                            <td>'.$i.'</td>
                            <td>'.$data['nama_pelapor'].'</td>
                            <td>'.$data['email_pelapor'].'</td>
                            <td>'.$data['subjek_laporan'].'</td>
                            <td>'.$data['id_taman'].'</td>
                            <td>'.$data['isi'].'</td>
                            <td>'.$data['nama_pelapor'].'</td>
                            <td>
                                <input type="checkbox" name="checked_id_pengaduan" value="'.$data['id_pengaduan'].'">
                            </td>
                         </tr>
				';
				$i++;
			}
		}else{
			echo "Tidak ada data";
		}
	}
?>