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
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                                <div class="slider-text-inner text-center">

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="fh5co-contact">
            <div class="row">
                <div class="col-md-5 col-md-push-1 animate-box">
                    <h3 href="#palilula">Palilula</h3>
                    <h4>Uzrast 16 godina i stariji.</h4>
                    <ul class="contact-info">
                        <li><i class="icon-location2"></i>Centar za kulturu Vlada Divljan<br>(pored hale Pionir)</li>
                        <li><i class="icon-phone2"></i>+381 64 3564 864</li>
                        <li><i class="icon-clock2"></i>Četvrtak 21:15-22:15, Nedelja 20:15-21:15</li>
                    </ul>
                </div>
                <div class="col-md-5 col-md-push-1 animate-box">
                    <h3 href="novibeograd">Novi Beograd</h3>
                    <h4>Uzrast 10-14 godina.</h4>
                    <ul class="contact-info">
                        <li><i class="icon-location2"></i>Jurija Gagarina 149<br>(tržni centar Piramida)</li>
                        <li><i class="icon-phone2"></i>+381 64 3564 864</li>
                        <li><i class="icon-clock2"></i>Četvrtak 19:00-20:00, Subota 16:00-17:00</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- END container-wrap -->

    <div class="container-wrap">
        <?php include $footer?>
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

