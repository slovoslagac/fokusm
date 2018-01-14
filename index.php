<?php
include(join(DIRECTORY_SEPARATOR, array('includes', 'init.php')));

?>
<!DOCTYPE HTML>
<html>
<head>
    <?php include $head; ?>
</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <?php include $headermenu; ?>
    <div class="container-wrap">
        <aside id="fh5co-hero">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/img_bg_1.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-pull-3 slider-text">
                                    <div class="slider-text-inner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/img_bg_2.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-md-push-3 slider-text">
                                    <div class="slider-text-inner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(images/img_bg_3.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="fh5co-services">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-info"></i>
						</span>
                        <div class="desc">
                            <h3>Časove vodi Milica Pisić...</h3>
                            <p>Posle završene baletske škole Lujo Davičo, bila je član Bitef Dance Company.<br>Sarađivala je sa mnogim koreografima : Dalija Aćin Thelander, Isidora Stanišić, Dunja Jocić, Guy
                                Weizman, Jasmin Vardimon, Maša Kolar… </p>
                            <h4><a href="about.php">Više...</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-pictures"></i>
						</span>
                        <div class="desc">
                            <h3>Gde nas možete naći...</h3>
                            <p>Fokus M vežba na dve lokacije<br><strong>Palilula</strong> : Centar za kulturu Vlada Divljan<br><strong>Novi Beograd</strong> : T.C. Piramida</p>
                            <h4><a href="work.php">Više...</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-envelop"></i>
						</span>
                        <div class="desc">
                            <h3>Pišite nam...</h3>
                            <p>Pitajte nas sve sto Vas interesuje...Informišite se o našim treninzima, grupama, trenerima...Dođite i oprobajte se u savremenoj igri...</p>
                            <h4><a href="contact.php">Više...</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-work" class="fh5co-light-grey">
            <a href="gallery.php">
                <div class="row animate-box">
                    <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                        <h3> Galerija</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center animate-box">
                        <p href="work-single.html" class="work" style="background-image: url(images/portfolio-1.jpg);">
                        </p>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <p href="work-single.html" class="work" style="background-image: url(images/portfolio-2.jpg);">
                        </p>
                    </div>
                    <div class="col-md-4 text-center animate-box">
                        <p href="work-single.html" class="work" style="background-image: url(images/portfolio-3.jpg);">
                        </p>
                    </div>
                </div>
            </a>
        </div>

    </div><!-- END container-wrap -->

    <div class="container-wrap">
        <?php include $footer ?>
    </div><!-- END container-wrap -->
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Counters -->
<script src="js/jquery.countTo.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>

