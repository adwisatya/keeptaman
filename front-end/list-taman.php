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
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Manajemen Taman</h2>
                    <hr class="star-primary">
                </div>
                <div class="col-lg-12">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Nama Taman</th>
                            <th>Alamat</th>
                            <th>Geolokasi</th>
                            <th></th>
                            <th></th>
                        </tr>
						<?php
							include('../admin/taman.php');
						?>
                         <tr id="tambah_taman" style="display:none">
                            <td></td>
                            <td><input type="text" id="nama_taman" value="aryya"></td>
                            <td><input type="text" id="alamat"></td>
                            <td><input type="text" id="geolokasi"></td>
                            <td>
								<select id="idadmin">
									<option value="admin">ss</option>
								</select>
							</td>
							<td>
                                <input type="Submit" class="btn btn-primary btn-sm btn-primary edit" value="Tambah Taman" onClick="initPost();">
								<input type="Submit" class="btn btn-primary btn-sm btn-primary edit" value="Hapus Taman" onClick="HapusTaman();">
                            </td>
                        </tr>
                    </table>
                    <div class="row">
                        <form class="form-inline" id="form-button">
                        <!-- <div class="form-group">
                        <select class="form-control input-sm">
                            <option value="volvo">Approve</option>
                            <option value="saab">Ignore</option>
                        </select>
                        </div> -->
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-sm btn-primary add" value="+ Tambah Taman" onClick="show_add_taman();">
                        </div>
                    </form>
                     </div>
                    <!--div class="intro-text">
                        <!--<span class="name">Start Bootstrap</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>-->
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
	<script src="js/funct.js">
	
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
