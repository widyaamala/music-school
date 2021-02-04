<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    require 'functions.php';
    date_default_timezone_set('Asia/Jakarta');
    
    if(isset($_POST["submitComment"])){
    if(setComments($_POST) > 0){
        echo "<script>
                alert ('Your comment has been sent!');
              </script>";
    } else{
        echo mysqli_error($conn);
    }
    }
    
    if(isset($_POST["deleteComment"])){
    if(deleteComments($_POST["id"]) > 0){
        echo "<script>
                alert ('Your comment has been deleted!');
              </script>";
    } else{
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>NOOWIDIE MUSIC SCHOOL</title>
                <link rel="stylesheet" href="css/styleform.css">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
                    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
                    <meta name="author" content="FREEHTML5.CO" />

  <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FREEHTML5.CO
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
                    <meta property="og:title" content=""/>
                    <meta property="og:image" content=""/>
                    <meta property="og:url" content=""/>
                    <meta property="og:site_name" content=""/>
                    <meta property="og:description" content=""/>
                    <meta name="twitter:title" content="" />
                    <meta name="twitter:image" content="" />
                    <meta name="twitter:url" content="" />
                    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">

    <link rel="stylesheet" href="css/style.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
        <div id="fh5co-wrapper">
        <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.php">NOOWIDIE MUSIC SCHOOL</a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li class="active">
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a class="fh5co-sub-ddown">Lesson</a>
                                    <ul class="fh5co-sub-menu">
                                        <li><a href="kids.php">For Kids</a></li>
                                        <li><a href="teens.php">For Teens</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="fh5co-sub-ddown">Achievment</a>
                                     <ul class="fh5co-sub-menu">
                                        <li>
                                            <a href="international.php" class="fh5co-sub-ddown">International</a>
                                        </li>
                                        <li><a href="national.php">National</a></li>
                                    </ul>
                                </li>
                                <li><a href="lecturer.php">Lecturer</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li>
                                    <a class="fh5co-sub-ddown">Profile</a>
                                     <ul class="fh5co-sub-menu">
                                        <li>
                                            <a href="ubah.php" class="fh5co-sub-ddown">Edit Profile</a>
                                        </li>
                                        <li><a href="logout.php">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
        

        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/kids.jpg);">
                <div class="desc animate-box">
                    <h2><strong>KIDS COURSE</strong></h2>
                </div>
            </div>

        </div>
        <!-- end:header-top -->
        <div id="fh5co-partner">
            <div class="container">
                <div class="partner-wrap">
                    <div class="wrap">
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/logo-twitter.png" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/logo-wikipedia.png" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/logo-3.png" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/logo-facebook.jpg" alt="">
                            </div>
                        </div>
                        <div class="partner animate-box">
                            <div class="inner">
                                <img class="img-responsive" src="images/logo-5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="fh5co-work">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 work">
                        <div class="row">
                            <div class="col-md-6 col-md-pull-2">
                                <div class="half-inner" style="background-image:url(images/kids-guitar.jpg);">
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="desc">
                                    <h3><a href="#">Guitar Music</a></h3>
                                    <p>For Beginner</p>
                                    <p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://www.youtube.com/watch?v=JWxF-CFCQiA"><i class="icon-play"></i> Watch Video</a></p>
                                </div>
                                <form action="" method="post">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="username" value='<?php echo $_SESSION['user'];?>'>
                                        <input type="hidden" name="date" value='<?php echo date('Y-m-d H:i:s');?>'>
                                        <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Comment"></textarea>
                                        <input type="submit" name='submitComment' value="Comment">
                                    </div>
                                </div>  
                                </form>
                                
                                <?php getComments();?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 work">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6">
                                <div class="half-inner half-inner2" style="background-image:url(images/kids-drum.jpg);">
                                </div>
                            </div>
                            <div class="col-md-6 col-md-pull-6 animate-box">
                                <div class="desc desc2">
                                    <h3><a href="#">Drum Music</a></h3>
                                    <p>For Beginner</p>
                                    <p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://www.youtube.com/watch?v=7ooONR7jd1M"><i class="icon-play"></i> Watch Video</a></p>
                                </div>
								<form action="" method="post">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="username" value='<?php echo $_SESSION['user'];?>'>
                                        <input type="hidden" name="date" value='<?php echo date('Y-m-d H:i:s');?>'>
                                        <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Comment"></textarea>
                                        <input type="submit" name='submitComment' value="Comment">
                                    </div>
                                </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 work">
                        <div class="row">
                            <div class="col-md-6 col-md-pull-2">
                                <div class="half-inner" style="background-image:url(images/kids-piano.jpg);">
                                </div>
                            </div>
                            <div class="col-md-6 animate-box">
                                <div class="desc">
                                    <h3><a href="#">Piano Music</a></h3>
                                    <p>For Beginner</p>
                                    <p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://www.youtube.com/watch?v=YC0pEPLa2b0"><i class="icon-play"></i> Watch Video</a></p>
                                </div>
								<form action="" method="post">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="username" value='<?php echo $_SESSION['user'];?>'>
                                        <input type="hidden" name="date" value='<?php echo date('Y-m-d H:i:s');?>'>
                                        <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Comment"></textarea>
                                        <input type="submit" name='submitComment' value="Comment">
                                    </div>
                                </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 work">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6">
                                <div class="half-inner half-inner2" style="background-image:url(images/kids-violin.png);">
                                </div>
                            </div>
                            <div class="col-md-6 col-md-pull-6 animate-box">
                                <div class="desc desc2">
                                    <h3><a href="#">Violin Music</a></h3>
                                    <p>For Beginner</p>
                                    <p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://www.youtube.com/watch?v=GYSqIXuTnjM"><i class="icon-play"></i> Watch Video</a></p>
                                </div>
								<form action="" method="post">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" name="username" value='<?php echo $_SESSION['user'];?>'>
                                        <input type="hidden" name="date" value='<?php echo date('Y-m-d H:i:s');?>'>
                                        <textarea name="message" class="form-control" id="" cols="30" rows="7" placeholder="Comment"></textarea>
                                        <input type="submit" name='submitComment' value="Comment">
                                    </div>
                                </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 work">
                        <div class="row">
                            <div class="col-md-6 col-md-pull-2">
                                <div class="half-inner" style="background-image:url(images/kids-saxophone.jpg);">
                                </div>
                            </div>
                            <div class="col-md-6 anihmate-box">
                                <div class="desc">
                                    <h3><a href="#">Saxophone Music</a></h3>
                                    <p>For Beginner</p>
                                    <p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://www.youtube.com/watch?v=HStlX3yanm8"><i class="icon-play"></i> Watch Video</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="fh5co-features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 animate-box">
                            <div class="feature-left">
                                <div class="feature-copy">
                                <h3 align=center>Biaya Terjangkau</h3>
                                <p align=center>Untuk menikmati semua video kursus studilmu, Anda hanya membayar biaya berlangganan tiap bulan atau tiap tahun. Kursus-kursus baru berkualitas akan terus bertambah setiap minggu.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 animate-box">
                            <div class="feature-left">   
                                <div class="feature-copy">
                                <h3 align=center>Sertifikat Online</h3>
                                <p align=center>Hampir semua kursus online kami memiliki test di akhir kursus. Setelah lulus test tersebut, Anda akan mendapatkan sertifikat online secara otomatis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 animate-box">
                            <div class="feature-left">  
                                <div class="feature-copy">
                                <h3 align=center>Instruktur Ahli</h3>
                                <p align=center>Instruktur ahli di bidangnya, yang biasa memberikan training ke perusahaan-perusahaan besar di Indonesia, kini hadir di kelas online.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        

  <footer>
   <div id="footer">
    <div class="container">
     <div class="row">
      <div class="col-md-3 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
       <h3>About Us</h3>
       <p>Noowidie Music School berdiri sejak tahun 1987 dengan ke 12 cabangnya adalah sekolah musik terbesar di Indonesia. </p>
      </div>
      <div class="col-md-6 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
       <h3>Support</h3>
       <ul class="float">
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Anggota Online</a></li>
        <li><a href="#">Service Center</a></li>
        <li><a href="#">Informasi Garansi</a></li>
       </ul>
       <ul class="float">
        <li><a href="#">Brosur dan Katalog</a></li>
        <li><a href="#">Kumpulan Buku Manual</a></li>
        <li><a href="#">Software Terbaru</a></li>
        <li><a href="#">Dokumen dan Data Murid</a></li>
       </ul>

      </div>

      <div class="col-md-2 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
       <h3>Follow Us</h3>
       <ul class="fh5co-social">
        <li><a href="#"><i class="icon-twitter2"></i> Twitter</a></li>
        <li><a href="#"><i class="icon-facebook2"></i> Facebook</a></li>
        <li><a href="#"><i class="icon-google-plus2"></i> Google Plus</a></li>
        <li><a href="#"><i class="icon-instagram2"></i> Instagram</a></li>
       </ul>
      </div>
     </div>
    </div>
    <div class="fh5co-copyright text-center">
     <p>&copy; 2016 Free HTML5 template. All Rights Reserved. <span>Designed with <i class="icon-heart"></i> by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images by <a href="http://unsplash.com/" target="_blank">Unsplash</a></span></p> 
    </div>
   </div>
  </footer>
        </div>
    <!-- END fh5co-page -->

        </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->


    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>

    </body>
</html>