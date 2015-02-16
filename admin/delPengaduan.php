<?php
	include("../connect.php");
	if(isset($_GET['command'])){
		
			$id_pengaduan = $_POST['id_pengaduan'];

		switch($_GET['command']){
			case 3: 
				$data = mysql_query("DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
				break;
			default:
				echo "command not found";
				break;
		}
	}
?>