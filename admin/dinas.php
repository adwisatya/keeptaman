<?php
	include("../connect.php");
	if(isset($_POST['command'])){
		switch($_POST['command']){
			case 0 : $data = mysql_query("INSERT INTO pihak_berwenang (`id`, `nama`, `email`, `nomor_telepon`) VALUES ('223', '34', '434', '34');");
					break;
			case 1 : $data = mysql_query("DELETE FROM dinas WHERE variabel = '$variabel'");
					break;
			case 2 : $data = mysql_query("UPDATE");
					break;
		}
	}else{
		$data	=	mysql_query("SELECT * from pihak_berwenang");
		if(mysql_num_rows($data)>0){
			while($dinasterkait= mysql_fetch_array($data)){
				echo "nama".$dinasterkait['nama'];
			}
		}else{
			echo "tidak ada data";
		}
	}
?>