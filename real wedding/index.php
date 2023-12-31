<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Site Metas -->
    <title>wedding _____&_____</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style7.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
    <!-- LOADER -->
    <div id="preloader">
        <div class="preloader pulse">
            <i class="fa fa-heartbeat" aria-hidden="true"></i>
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
  
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500"
                        style="background-image: url(images/slider-01.jpg)">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <img src="images/ornaments.png" alt="">
                              
                                <h1>Leida & Dominic</h1>
                                <p class="mbr-timeline-date mbr-fonts-style display-font">- Jum'at, 7 April 2023 -</p>
                                <p> Kepada Bapak/Ibu/Saudara/i</p>

                                <p class="mbr-timeline-date mbr-fonts-style display-font">
                                <?php
                                 if(isset($_GET['to'])) {
                                $tampil = $_GET['to'];
                                echo $tampil;
                                 }
                                 ?>
                            </p>
                                
                                <a href="undangan.php" class="btn">Buka Undangan</a>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500"
                        style="background-image: url(images/slider-02.jpg)">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <img src="images/ornaments.png" alt="">

                              
                                <h1>Leida & Dominic</h1>
                                <p class="mbr-timeline-date mbr-fonts-style display-font">- Jum'at, 7 April 2023 -</p>
                                <p> Kepada Bapak/Ibu/Saudara/i</p>

                                <p class="mbr-timeline-date mbr-fonts-style display-font">
                                <?php
                                 if(isset($_GET['to'])) {
                                $tampil = $_GET['to'];
                                echo $tampil;
                                 }
                                 ?>
                            </p>

                                <a href="undangan.php" class="btn">Buka Undangan</a>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="2000"
                        style="background-image: url(images/slider-03.jpg)">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <img src="images/ornaments.png" alt="">
                               
                                <h1>Leida & Dominic</h1>
                                <p class="mbr-timeline-date mbr-fonts-style display-font">- Jum'at, 7 April 2023 -</p>
                                <p> Kepada Bapak/Ibu/Saudara/i</p>

                                <p class="mbr-timeline-date mbr-fonts-style display-font">
                                <?php
                                 if(isset($_GET['to'])) {
                                $tampil = $_GET['to'];
                                echo $tampil;
                                 }
                                 ?>
                            </p>

                                <a href="undangan.php" class="btn">Buka Undangan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    <!-- End Banner -->
</body>

</html>