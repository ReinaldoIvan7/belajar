<?php
session_start();

?>
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
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" alt="image" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#story">Story</a></li>
                        <li><a class="nav-link" href="#family">Family</a></li>
                        <li><a class="nav-link" href="#gallery">Gallery</a></li>
                        <li><a class="nav-link" href="#events">Acara</a></li>
                        <li><a class="nav-link" href="#contact">Ucapan</a></li>
                    </ul>

                    <li>
                        <a class="nav-link" onclick="toggleMusic()" id="btn-playback" data-play="false">
                            <i class="fa fa-pause"></i>
                            <!-- <span id="btn-text">PAUSE</span> -->
                        </a>
                    </li>
                    <audio autoplay id="audio" src="audio/Bruno Mars-When I Was Your Man.mp3" />

                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500" style="background-image: url(images/slider-01.jpg)">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <img src="images/ornaments.png" alt="">
                                <p class="mbr-timeline-date mbr-fonts-style display-font">The Wedding of</p>
                                <h1>Leida & Dominic</h1>
                                <p> <strong>Jum'at, 7 April 2023</strong> </p>
                                <!-- <a href="#" class="btn">Contact</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500" style="background-image: url(images/slider-02.jpg)">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <img src="images/ornaments.png" alt="">
                                <p class="mbr-timeline-date mbr-fonts-style display-font">The Wedding of</p>
                                <h1>Leida & Dominic</h1>
                                <p> <strong>Jum'at, 7 April 2023</strong> </p>
                                <!-- <a href="#" class="btn">Contact</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="2000" style="background-image: url(images/slider-03.jpg)">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <img src="images/ornaments.png" alt="">
                                <p class="mbr-timeline-date mbr-fonts-style display-font">The Wedding of</p>
                                <h1>Leida & Dominic</h1>
                                <p> <strong>Jum'at, 7 April 2023</strong> </p>
                                <!-- <a href="#" class="btn">Contact</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->


    <!-- Start About us -->
    <div id="about" class="about-box">
        <div class="about-a1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <img src="images/flowers.png" alt="">

                            <h1>Jum'at, 7 April 2023</p>

                                <div class="simply-countdown simply-countdown-one"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row align-items-center about-main-info">
                            <div class="col-lg-8 col-md-6 col-sm-12">

                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="about-img">
                                    <img class="img-fluid rounded" src="images/about-img-01.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center about-main-info">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="about-img">
                                    <img class="img-fluid rounded" src="images/about-img-02.jpg" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-sm-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About us -->

    <!-- Start Story -->
    <div id="story" class="story-box main-timeline-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <img src="images/flowers.png" alt="">
                        <h2>Story</h2>

                        <br>

                    </div>
                </div>
            </div>
            <div class="row timeline-element separline">
                <div class="timeline-date-panel col-xs-12 col-md-6 align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            1 March 2018
                        </p>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">
                            First meet
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            We met at the wedding of our close friends and immediately found
                            a common language, so a year later our first date happened.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row timeline-element reverse separline">
                <div class="timeline-date-panel col-xs-12 col-md-6 align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            2 April 2018
                        </p>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-6 align-right">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">
                            First date
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            We met at the wedding of our close friends and immediately found
                            a common language, so a year later our first date happened.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row timeline-element separline">
                <div class="timeline-date-panel col-xs-12 col-md-6 align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            1 May 2018
                        </p>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">
                            Proposal
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            Fusce convallis ante id purus sagittis malesuada. Sed erat
                            ipsum, suscipit sit amet auctor quis, vehicula ut leo. Maecenas
                            felis nulla, tincidunt ac blandit a, consectetur quis elit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row timeline-element reverse separline">
                <div class="timeline-date-panel col-xs-12 col-md-6 align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            2 June 2018
                        </p>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-6 align-right">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">
                            Engagement
                        </h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            Proin tempus felis quis justo pretium interdum. Praesent
                            sollicitudin lectus eu mattis egestas. Praesent luctus magna at
                            dignissim placerat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Story -->

    <!-- Start Family -->
    <div id="family" class="family-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <img src="images/flowers.png" alt="">
                        <h2>Family</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-team-member">
                        <div class="family-img">
                            <img class="img-fluid" src="images/family-01.jpg" alt="" />
                        </div>
                        <div class="family-info">
                            <h4>Mr. Alonso Wiles</h4>
                            <p>{ Leida’s Father }</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-team-member">
                        <div class="family-img">
                            <img class="img-fluid" src="images/family-02.jpg" alt="" />
                        </div>
                        <div class="family-info">
                            <h4>Mr. Evon Wiles</h4>
                            <p>{ Leida’s Mother }</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-team-member">
                        <div class="family-img">
                            <img class="img-fluid" src="images/family-03.jpg" alt="" />
                        </div>
                        <div class="family-info">
                            <h4>Mr. Chris Wiles</h4>
                            <p>{ Leida’s Brother }</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-team-member">
                        <div class="family-img">
                            <img class="img-fluid" src="images/family-04.jpg" alt="" />
                        </div>
                        <div class="family-info">
                            <h4>Mr. Adina Wiles</h4>
                            <p>{ Leida’s Sister }</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-team-member">
                        <div class="family-img">
                            <img class="img-fluid" src="images/family-05.jpg" alt="" />
                        </div>
                        <div class="family-info">
                            <h4>Mr. Annetta Wiles</h4>
                            <p>{ Leida’s Sister }</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-team-member">
                        <div class="family-img">
                            <img class="img-fluid" src="images/family-06.jpg" alt="" />
                        </div>
                        <div class="family-info">
                            <h4>Mr. Ladonna Wiles</h4>
                            <p>{ Leida’s Sister }</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Family -->

    <!-- Start Gallery -->
    <div id="gallery" class="gallery-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <img src="images/flowers.png" alt="">
                        <h2>Gallery</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="popup-gallery clearfix">
                    <li>
                        <a href="images/gallery-01.jpg">
                            <img class="img-fluid" src="images/gallery-01.jpg" alt="single image" />
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="images/gallery-02.jpg">
                            <img class="img-fluid" src="images/gallery-02.jpg" alt="single image" />
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="images/gallery-03.jpg">
                            <img class="img-fluid" src="images/gallery-03.jpg" alt="single image" />
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="images/gallery-04.jpg">
                            <img class="img-fluid" src="images/gallery-04.jpg" alt="single image" />
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="images/gallery-05.jpg">
                            <img class="img-fluid" src="images/gallery-05.jpg" alt="single image" />
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="images/gallery-06.jpg">
                            <img class="img-fluid" src="images/gallery-06.jpg" alt="single image" />
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="images/gallery-07.jpg">
                            <img class="img-fluid" src="images/gallery-07.jpg" alt="single image" />
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="images/gallery-08.jpg">
                            <img class="img-fluid" src="images/gallery-08.jpg" alt="single image" />
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Events -->
    <div id="events" class="events-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <img src="images/flowers.png" alt="">
                        <h2>Acara</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <img class="img-fluid" src="images/event-img-01.jpg" alt="" />
                        </div>
                        <h2></h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard
                        </p>
                        <a href="https://maps.app.goo.gl/VKUnWurCb1bbVcTa9" target="_blank"><img src="images/googlemaps.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <img class="img-fluid" src="images/event-img-02.jpg" alt="" />
                        </div>
                        <h2></h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard
                        </p>
                        <a href="https://maps.app.goo.gl/VKUnWurCb1bbVcTa9" target="_blank"><img src="images/googlemaps.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <img class="img-fluid" src="images/event-img-03.jpg" alt="" />
                        </div>
                        <h2></h2>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard
                        </p>
                        <a href="https://maps.app.goo.gl/VKUnWurCb1bbVcTa9" target="_blank"><img src="images/googlemaps.jpg" alt=""></a>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Events -->

    <!-- Start Contact -->

    <?php
    include('koneksi.php');
    $query = mysqli_query($con, "SELECT * FROM comments");
    ?>

    <div id="contact" class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <img src="images/flowers.png" alt="">
                        <h1>Ucapan </h1>
                        <h2>Leida & Dominic</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="contact-block">
                        <form id="myForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="nama" placeholder="Nama" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="custom-select d-block form-control" name="konfirmasi" id="event" required data-error="Please select an item in the list.">
                                            <option disabled selected value="">Konfirmasi Kehadiran</option>
                                            <option value="Semua Acara">Semua Acara</option>
                                            <option value="Pemberkatan">Pemberkatan</option>
                                            <option value="Resepsi Pernikahan">Resepsi Pernikahan</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" name="ucapan" placeholder="Ucapan" rows="8" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="submit-button text-center">
                                        <button class="btn btn-primary" name="tComments" type="submit">Kirim</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Contact -->

    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer-company-name">
                        All Rights Reserved. &copy; 2023 Design By : ThemeWagon
                        <br>
                        We're sorry if our invitation is not perfect, if anything perfect meybe when we are still
                        together :)
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- ALL JS FILES -->
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

    <script src="js/simplyCountdown.js"></script>
    <script src="js/main.js"></script>
    <script src="js/audio.js"></script>

    <!-- <script src="jsjquery-1.12.4.js"></script> -->
    <script src="js/sweetalert2.all.min.js"></script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

    <script type="text/javascript">
        $('#myForm').on('submit', function(e) {
            e.preventDefault()

            console.log('payload', $(this).serialize())

            $.ajax({
                url: 'tambah.php',
                type: 'post',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status === 1) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Form submitted successfully.',
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: 'Form submission failed. Please try again.',
                        });
                    }

                    $('#name').val('');
                    $('#event').val('');
                    $('#message').val('');
                },
                error: (xhr, status, error) => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Something went wrong. Please try again later.',
                    });

                    $('#name').val('');
                    $('#event').val('');
                    $('#message').val('');
                }
            })
        })
    </script>

    <script>
        var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

        simplyCountdown('.simply-countdown-one', {
            year: 2023,
            month: 10,
            day: 28,
            hours: 9,
            minutes: 30,
            seconds: 0,
        });

        $('#simply-countdown-losange').simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: false
        });
    </script>

</body>

</html>