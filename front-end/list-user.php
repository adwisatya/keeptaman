<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Keep Taman!</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <img src="img/leaf.png" id="leaf">
                    </li>
                    <li>
                        <a href="#page-top" class="navbar-brand">KEEP TAMAN</a>
                    </li>
                </ul>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Pengaduan</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Statistik Pengaduan</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Manajemen User & Taman</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="manajemen-user">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Manajemen User</h2>
                    <hr class="star-primary">
                </div>
                <div class="col-lg-12">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th></th>
                            <th></th>
                        </tr>
						<?php
							include('../admin/user.php');
						?>
                         <tr id="form_tambah_user" style="display:none">
                            <td></td>
                            <td><input type="text" id="nama_taman" value=""></td>
                            <td><input type="text" id="alamat"></td>
                            <td><input type="text" id="geolokasi"></td>
							<td>
                                <input type="Submit" class="btn btn-primary btn-sm btn-primary edit" value="Tambah User" onClick="tambahUser();">
                            </td>
                        </tr>
                    </table>
                    <div class="row">
                        <form class="form-inline" id="form-button">
                        <div class="form-group">
                            <input onClick="tampilkan_form_add_user();" type="submit" class="btn btn-primary btn-sm btn-primary add" value="+ Tambah User" ></a>
                        </div>
                    </form>
                     </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About KEEP TAMAN</h3>
                        <p>Keep Taman blablablabla <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="portfolio-modal modal fade" id="tambah-taman" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Tambah Taman</h2>
                            <hr class="star-primary">
                            <br>
                            <br>
                            <br>
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama" id="name" required data-validation-required-message="Please enter your name.">
                                        <!--<p class="help-block text-danger"></p>-->
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Alamat</label>
                                        <input type="email" class="form-control" placeholder="Alamat" id="email" required data-validation-required-message="Please enter your password.">
                                        <!--<p class="help-block text-danger"></p>-->
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Geolokasi</label>
                                        <input type="email" class="form-control" placeholder="Geolokasi" id="email" required data-validation-required-message="Please enter your email address.">
                                        <!--<p class="help-block text-danger"></p>-->
                                    </div>
                                </div>
                                <!--<div class="row control-group">
                                    <div>
                                        <label id="gambar">Gambar</label>
                                        <input type="file" accept="image/*" class="form-control2" placeholder="Gambar" id="email" required data-validation-required-message="Please upload the picture.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div>
                                        <label id="pengaduan">Pengaduan :</label>
                                        <textarea type="email" class="form-control1" placeholder="Input Pengaduan" id="email" required data-validation-required-message="Text here."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>-->
                        
                            <br>
                                <div id="success"></div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <button type="submit" class="btn btn-success btn-lg">Add</button>
                                    </div>
                                </div>
                            </form>
                            <button type="button" class="btn btn-default1" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="tambah-user" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Tambah User</h2>
                            <hr class="star-primary">
                            <br>
                            <br>
                            <br>
                            <form name="sentMessage" id="contactForm" novalidate>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama" id="name" required data-validation-required-message="Please enter your name.">
                                        <!--<p class="help-block text-danger"></p>-->
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Alamat" id="email" required data-validation-required-message="Please enter your password.">
                                        <!--<p class="help-block text-danger"></p>-->
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Username</label>
                                        <input type="email" class="form-control" placeholder="Geolokasi" id="email" required data-validation-required-message="Please enter your email address.">
                                        <!--<p class="help-block text-danger"></p>-->
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password" id="password_admin" required data-validation-required-message="Please enter your email address.">
                                        <!--<p class="help-block text-danger"></p>-->
                                    </div>
                                </div>
                                <!--<div class="row control-group">
                                    <div>
                                        <label id="pengaduan">Pengaduan :</label>
                                        <textarea type="email" class="form-control1" placeholder="Input Pengaduan" id="email" required data-validation-required-message="Text here."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>-->
                        
                            <br>
                                <div id="success"></div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <button type="submit" class="btn btn-success btn-lg">Add</button>
                                    </div>
                                </div>
                            </form>
                            <button type="button" class="btn btn-default1" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<!--     <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div> -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Klik Taman -->
    <script type="text/javascript">
    $(document).ready(function(){
        jQuery('#nama-taman p').click(function(){
          var jumTaman = 16;
          var str = "" + this.id;
          var id = str.substr(5,5);
          //alert(str.substr(5,5));
          if(id <= jumTaman) {
            var i;
            for (i=1; i<=jumTaman; i++) {
              if (i == id) {
                $("#gambar-statistik" + i).show();
                $("#taman" + i).css("background-color", "#2f7e61");
              } else {
                $("#gambar-statistik" + i).hide();
                $("#taman" + i).css("background-color", "#90b973");
              }
            }
          }
        });
    });

    </script>
	<script>
		function cekInputan(){
			var nama = document.getElementById('nama_taman').value;
			var alamat = document.getElementById('alamat').value;
			var geolokasi = document.getElementById('geolokasi').value;
		}
	</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

    <!--Google API-->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/map.js"></script>

</body>

</html>
