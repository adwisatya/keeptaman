<?php
	include("../connect.php");
	
	if(isset($_GET['command'])){
		echo "alert('dsadsa')";
		//if(isset($_POST['nama'])){
			
			$id_taman = $_POST['id_taman'];
			$nama_taman = $_POST['nama'];
			$alamat	=	$_POST['alamat'];
			$geolokasi = $_POST['geolokasi'];
			$username_admin = $_POST['idadmin'];
		switch($_GET['command']){
			case 0 : $data = mysql_query("INSERT INTO taman (`id_taman`, `nama_taman`, `alamat`, `geolokasi`, `username_admin`) VALUES ('$id_taman', '$nama_taman','$alamat','$geolokasi','$username_admin');");
					break;
			case 1 : $data = mysql_query("DELETE FROM taman WHERE `id_taman` = '$id_taman'");
					break;
			case 2 : $data = mysql_query("UPDATE taman SET nama_taman='$nama_taman',alamat='$alamat',geolokasi='$geolokasi',username_admin='$username_admin' WHERE id_taman = '$id_taman'");
					break;
			case 3: $data =	mysql_query("SELECT * from taman");
					if(mysql_num_rows($data)>0){
						while($user= mysql_fetch_array($data)){
							echo '<div class="geo">'.$user['geolokasi'].'</div>
							';
						}
					}
					break;
			case 4: $data =	mysql_query("SELECT * from taman");
					if(mysql_num_rows($data)>0){
						$index = 0;
						while($user= mysql_fetch_array($data)){
							echo '<div id="var-nama-taman'.$index.'">'.$user['nama_taman'].'</div>
							';
							$index++;
						}
					}
					break;
			case 5: $data =	mysql_query("SELECT * from taman");
					if(mysql_num_rows($data)>0){
						$index = 0;
						while($user= mysql_fetch_array($data)){
							echo '<div id="var-id-taman'.$index.'">'.$user['id_taman'].'</div>
							';
							$index++;
						}
					}
					break;
			default:
				echo "Command not found";
				break;
		}
	}else{
		$data	=	mysql_query("SELECT * from taman");
		if(mysql_num_rows($data)>0){

			$index = 1;
			while($taman= mysql_fetch_array($data)){
			echo '<tr>
					<td>'.$index.'</td>
					<td>'.$taman['nama_taman'].'</td>
					<td>'.$taman['alamat'].'</td>
					<td>'.$taman['geolokasi'].'</td>
					<td>
						<input type="Submit" class="btn btn-primary btn-sm btn-primary edit" value="Edit" onClick="window.location.href = \'edit-taman.php?id='.$taman['id_taman'].'\';">
					</td>
					<td>
						 <input type="Submit" class="btn btn-primary btn-sm btn-primary delete" value="Delete">
					</td>
				 </tr>';
				 $index++;
			}
		}else{
			echo "Tidak ada data";
		}
	}
?>