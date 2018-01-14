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
                    <li style="background-image: url(images/img_bg_2.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <div id="fh5co-about">
            <!--            <div class="row animate-box">-->
            <!--                <div class="col-md-6 col-md-offset-3 text-center heading-section">-->
            <!--                    <h3>Our History</h3>-->
            <!--                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>-->
            <!--                </div>-->
            <!--            </div>-->

            <div class="row">
                <!--                <div class="col-md-10 col-md-offset-1 text-center animate-box">-->
                <!--                    <p><img src="images/cover_bg_3.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>-->
                <!--                </div>-->
                <div class="col-md-8 col-md-offset-2 text-center animate-box">
                    <div class="about-desc">
                        <h3>Časove vodi Milica Pisić.</h3>
                        <p>Milica Pisić je rodjena u Beogradu. Nakon završene baletske škole Lujo Davičo, odseka za savremenu igru, počinje da saradjuje sa domaćim koreografima. Svoje usavršavanje nastavlja
                            kroz radionice i zemlji i inostransvu: Russell Maliphant, Hofesh Shechter, Random Dance, Charles Linehan, Johan Inger, Francesco Scavetta, Joe Alegado, Martin Sonderkamp, Frederic
                            Gies, Bernardo Montet, Wim Vandekeybus, Thomas Noon, Jasmin Vardimon…</p>
                        <p>Od 2009. do 2014. Bila je član Bitef Dance Company. Za to vreme saradjivala je sa koreografima: Dalija Aćin Thelander, Isidora Stanišić, Dunja Jocić, Guy Weizman, Jasmin Vardimon,
                            Maša Kolar…</p>
                        <p>Takodje je igrala u dramskim predstavama I predstavama za decu.
                            Kao izvodjač nastupala je na festivalima u Japanu, Južnoj Koreji, SAD…
                            Milica je dobitnik nekoliko nagrada u oblasti umetničke igre. 2013. godine za izvodjenje u predstavi Yesterday, dobila je nagradu Smiljana Mandukić koja se dodeljuje najboljem
                            igraču. 2015. Zajedno sa Igorom Korugom osvojila je prvo mesto I nagradu kritike, na festival Koreografskih minijatura u Beogradu.</p>
                        <p>Predavala je Savremenu igru u baletskim školama u Beogradu I Pančevu.
                            2017. godine je osnovala Plesno Udruženje Fokus M u kome radi kao pedagog I koreograf.</p>
                        <p>
<!--                        <ul class="fh5co-social-icons">-->
<!--                            <li><a href="#"><i class="icon-twitter"></i></a></li>-->
<!--                            <li><a href="#"><i class="icon-facebook"></i></a></li>-->
<!--                            <li><a href="#"><i class="icon-linkedin"></i></a></li>-->
<!--                            <li><a href="#"><i class="icon-dribbble"></i></a></li>-->
<!--                        </ul>-->
                        </p>
                    </div>
                </div>
            </div>
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

