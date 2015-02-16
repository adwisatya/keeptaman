<?php
	$id_pengaduan = $_POST['id_pengaduan'];	
	include("../connect.php");
	$query = mysql_query("SELECT * from pengaduan WHERE id_pengaduan = '$id_pengaduan'");
	$pengaduan = mysql_fetch_array($query);
	if(preg_match("/sampah/",$pengaduan['isi'])){
		$tujuan = "a.dwisaty4@yahoo.com";
		$subjek = $pengaduan['subjek_laporan']." "."Sampah";
	}else if(preg_match("/pkl/",$pengaduan['isi'])){
		$tujuan = "a.dwisaty4@yahoo.com";
		$subjek = $pengaduan['subjek_laporan']." "."pkl";
	}else if(preg_match("/sampah/",$pengaduan['isi'])){
		$tujuan = "a.dwisaty4@yahoo.com";
		$subjek = $pengaduan['subjek_laporan']." "."Sampah";
	}else{
		$tujuan = "a.dwisaty4@yahoo.com";
		$subjek = $pengaduan['subjek_laporan']." "."Uncategorized";
	}
	
	$useragent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2) Gecko/20100115 Firefox/3.6"; 
	$data 	= "from=".$pengaduan['email_pelapor']."
	&to=".$tujuan."
	&name=".$pengaduan['nama_pelapor']."
	&sub=".$subjek."
	&message=".$pengaduan['isi']."<br>Link foto:".$pengaduan['foto']."
	&send=send";
	$ch 	= curl_init("http://sg.bangsatya.com/mail.php"); 
	curl_setopt($ch, CURLOPT_HEADER, 0); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_POST, 1); 
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
	curl_setopt($ch, CURLOPT_USERAGENT, $useragent); 
	$source=curl_exec ($ch); 
	curl_close ($ch);
	echo $tujuan;
?>