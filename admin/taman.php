<?php
	include("../connect.php");
	
	if(isset($_GET['command'])){
		$id_taman = $_POST['id_taman'];
		$nama_taman = $_POST['nama'];
		$alamat	=	$_POST['alamat'];
		$geolokasi = $_POST['geolokasi'];
		$username_admin = $_POST['idadmin'];
		switch($_GET['command']){
			case 0 : $data = mysql_query("INSERT INTO taman (`id_taman`, `nama_taman`, `alamat`, `geolokasi`, `username_admin`) VALUES ('$id_taman', '$nama_taman','$alamat','$geolokasi','$username_admin');");
					echo "alert('dadas')";
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
?>
		<td></td>
		<td><?php $user['nama_taman']; ?></td>
		<td><?php $user['alamat']; ?></td>
		<td><?php $user['geolokasi']; ?></td>
		<td>
			<input type="Submit" class="btn btn-primary btn-sm btn-primary edit" value="Edit">
		</td>
		<td>
			 <input type="Submit" class="btn btn-primary btn-sm btn-primary delete" value="Delete">
		</td>
<?php
			}
		}else{
			echo "Tidak ada data";
		}
	}
?>