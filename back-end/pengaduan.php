<?php
	include("../connect.php");
	if(isset($_GET['command'])){
		if($_GET['command'] < 4){
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
		}
		if($_GET['command'] == 5){
			$id_pengaduan = $_POST['id_pengaduan'];
		}
			
		switch($_GET['command']){
			case 1:
				$data = mysql_query("INSERT INTO `ppl_keep_taman`.`pengaduan` (`nama_pelapor`, `email_pelapor`, `id_taman`, `waktu_lapor`, `subjek_laporan`, `isi`, `foto`, `status`, `id_admin`) VALUES ('$nama_pelapor', '$email_pelapor', '$id_taman', '$waktu_lapor', '$subjek_laporan', '$isi', '$target_file', '$status', '$id_admin');");
				break;
			case 2:
				$data = mysql_query("UPDATE `ppl_keep_taman`.`pengaduan` SET id_pengaduan='$id_pengaduan', nama_pelapor='$nama_pelapor', email_pelapor='$email_pelapor', id_taman='$id_taman', waktu_lapor='$waktu_lapor', subjek_laporan='$subjek_laporan', isi='$isi', foto='$foto', status='$status', id_admin='$id_admin'");
				break;
			case 3: 
				$data = mysql_query("DELETE FROM pengaduan WHERE id_pengaduan=$id_pengaduan");
				break;
			case 4:
				$result = mysql_query("SELECT * from taman NATURAL JOIN pengaduan");
				if(mysql_num_rows($result)>0){
					$i = 0;
					while($data = mysql_fetch_array($result)){
						echo '<div class="col-sm-4 portfolio-item">
                                <a href="#portfolioModal1" class="portfolio-link pengaduan" data-toggle="modal" id="'.$data['id_pengaduan'].'">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img src="'.$data['foto'].'" class="img-responsive thumbnail" alt="">
                                </a>
                            </div>';
					}

				}
				break;
			case 5:
				$result = mysql_query("SELECT * from taman NATURAL JOIN pengaduan WHERE id_pengaduan=".$id_pengaduan);
				if(mysql_num_rows($result)>0){
					$i = 0;
					$data = mysql_fetch_array($result);
					echo '<h2>'.$data['subjek_laporan'].'</h2>
                            <hr class="star-primary">
                            <img src="'.$data['foto'].'" class="img-responsive thumbnail-big img-centered" alt="">
                            <h3>'.$data['nama_taman'].'</h3>
                            <p class="deskripsi-pengaduan">'.$data['isi'].'</p>
                            <ul class="list-inline item-details">
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">'.$data['waktu_lapor'].'</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>';
				}
				break;
			case 6:
				$nama_taman = $_POST['nama_taman'];
				$result = mysql_query("SELECT * FROM taman NATURAL JOIN pengaduan WHERE nama_taman='".$nama_taman."'");
				if(mysql_num_rows($result)>0){
					$i = 0;
					while($data = mysql_fetch_array($result)){
						echo '<div class="col-sm-4 portfolio-item">
                                <a href="#portfolioModal1" class="portfolio-link pengaduan" data-toggle="modal" id="'.$data['id_pengaduan'].'">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img src="'.$data['foto'].'" class="img-responsive thumbnail" alt="">
                                </a>
                            </div>';
					}

				}
				break;
			case 7:
				$waktu_awal = $_POST['waktu_awal'];
				$waktu_akhir = $_POST['waktu_akhir'];
				$result = mysql_query("SELECT * FROM taman NATURAL JOIN pengaduan WHERE waktu_lapor between '".$waktu_awal."' and '".$waktu_akhir."'");
				if(mysql_num_rows($result)>0){
					$i = 0;
					while($data = mysql_fetch_array($result)){
						echo '<div class="col-sm-4 portfolio-item">
                                <a href="#portfolioModal1" class="portfolio-link pengaduan" data-toggle="modal" id="'.$data['id_pengaduan'].'">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img src="'.$data['foto'].'" class="img-responsive thumbnail" alt="">
                                </a>
                            </div>';
					}

				}
				break;
			case 8:
				$nama_taman = $_POST['nama_taman'];
				$waktu_awal = $_POST['waktu_awal'];
				$waktu_akhir = $_POST['waktu_akhir'];
				$result = mysql_query("SELECT * FROM taman NATURAL JOIN pengaduan WHERE nama_taman='".$nama_taman."' and waktu_lapor between '".$waktu_awal."' and '".$waktu_akhir."'");
				if(mysql_num_rows($result)>0){
					$i = 0;
					while($data = mysql_fetch_array($result)){
						echo '<div class="col-sm-4 portfolio-item">
                                <a href="#portfolioModal1" class="portfolio-link pengaduan" data-toggle="modal" id="'.$data['id_pengaduan'].'">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img src="'.$data['foto'].'" class="img-responsive thumbnail" alt="">
                                </a>
                            </div>';
					}

				}
				break;
			case 9:
				$status = $_POST['status'];
				$result = mysql_query("SELECT * FROM taman NATURAL JOIN pengaduan WHERE status=".$status);
				if(mysql_num_rows($result)>0){
					$i = 0;
					while($data = mysql_fetch_array($result)){
						echo '<div class="col-sm-4 portfolio-item">
                                <a href="#portfolioModal1" class="portfolio-link pengaduan" data-toggle="modal" id="'.$data['id_pengaduan'].'">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img src="'.$data['foto'].'" class="img-responsive thumbnail" alt="">
                                </a>
                            </div>';
					}

				}
				break;
			case 10:
				$nama_taman = $_POST['nama_taman'];
				$status = $_POST['status'];
				$result = mysql_query("SELECT * FROM taman NATURAL JOIN pengaduan WHERE nama_taman='".$nama_taman."' and status=".$status);
				if(mysql_num_rows($result)>0){
					$i = 0;
					while($data = mysql_fetch_array($result)){
						echo '<div class="col-sm-4 portfolio-item">
                                <a href="#portfolioModal1" class="portfolio-link pengaduan" data-toggle="modal" id="'.$data['id_pengaduan'].'">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img src="'.$data['foto'].'" class="img-responsive thumbnail" alt="">
                                </a>
                            </div>';
					}

				}
				break;
			case 11:
				$waktu_awal = $_POST['waktu_awal'];
				$waktu_akhir = $_POST['waktu_akhir'];
				$status = $_POST['status'];
				$result = mysql_query("SELECT * FROM taman NATURAL JOIN pengaduan WHERE status=".$status." and waktu_lapor between '".$waktu_awal."' and '".$waktu_akhir."'");
				if(mysql_num_rows($result)>0){
					$i = 0;
					while($data = mysql_fetch_array($result)){
						echo '<div class="col-sm-4 portfolio-item">
                                <a href="#portfolioModal1" class="portfolio-link pengaduan" data-toggle="modal" id="'.$data['id_pengaduan'].'">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img src="'.$data['foto'].'" class="img-responsive thumbnail" alt="">
                                </a>
                            </div>';
					}

				}
				break;
			case 12:
				$nama_taman = $_POST['nama_taman'];
				$waktu_awal = $_POST['waktu_awal'];
				$waktu_akhir = $_POST['waktu_akhir'];
				$status = $_POST['status'];
				$result = mysql_query("SELECT * FROM taman NATURAL JOIN pengaduan WHERE nama_taman='".$nama_taman."' and status=".$status." and waktu_lapor between '".$waktu_awal."' and '".$waktu_akhir."'");
				if(mysql_num_rows($result)>0){
					$i = 0;
					while($data = mysql_fetch_array($result)){
						echo '<div class="col-sm-4 portfolio-item">
                                <a href="#portfolioModal1" class="portfolio-link pengaduan" data-toggle="modal" id="'.$data['id_pengaduan'].'">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img src="'.$data['foto'].'" class="img-responsive thumbnail" alt="">
                                </a>
                            </div>';
					}

				}
				break;
			case 13:
				$result = mysql_query("SELECT * from taman NATURAL JOIN pengaduan LIMIT 6");
				if(mysql_num_rows($result)>0){
					$i = 0;
					while($data = mysql_fetch_array($result)){
						echo '<div class="col-sm-4 portfolio-item">
                                <a href="#portfolioModal1" class="portfolio-link pengaduan" data-toggle="modal" id="'.$data['id_pengaduan'].'">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <i class="fa fa-search-plus fa-3x"></i>
                                        </div>
                                    </div>
                                    <img src="'.$data['foto'].'" class="img-responsive thumbnail" alt="">
                                </a>
                            </div>';
					}

				}
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