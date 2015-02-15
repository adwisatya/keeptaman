<?php 
	if(isset($_POST['nama'])){
		$con = mysqli_connect("localhost", "root", "", "ppl_keep_taman");
		if(mysqli_connect_errno()){
			echo "Failed to connect to mysql server";
		}

		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$id_taman = 1;
		$waktu_lapor = date("YYYY-mm-dd");
		$subjek = $_POST['subjek'];
		$isi = $_POST['isi'];
		$status = 0;
		$query = "	INSERT INTO pengaduan (nama_pelapor, email_pelapor, id_taman, waktu_lapor, subjek_laporan, isi, status)
								VALUES ('$nama', '$email', '$id_taman', '$waktu_lapor', '$subjek', '$isi', '$status')";
		if(!mysqli_query($con, $query)){
			die('Error: ' . mysqli_error($con));
		}else{
			echo "POST successfully added";
		}

		mysqli_close($con);
	}
?>