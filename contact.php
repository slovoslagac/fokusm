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
                    <li style="background-image: url(images/img_bg_3.jpg);">
                        <div class="overlay-gradient"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                                    <div class="slider-text-inner text-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div id="fh5co-contact">
            <div class="row">
                <div class="col-md-5 animate-box">
                    <h3>Kontakt</h3>
                    <ul class="contact-info">
                        <li><i class="icon-phone2"></i>+381 64 3564 864</li>
                        <li><i class="icon-mail2"></i>fokusm2017@gmail.com</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Fokus M (Palilula)</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1415.1201244511867!2d20.48444665833324!3d44.81666999477463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDTCsDQ5JzAwLjAiTiAyMMKwMjknMDguMCJF!5e0!3m2!1sen!2srs!4v1515969075381"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <h3>Fokus M (Novi Beograd)</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d707.7329195262687!2d20.38741582927181!3d44.80258099869369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDTCsDQ4JzA5LjMiTiAyMMKwMjMnMTYuNyJF!5e0!3m2!1sen!2srs!4v1515969218061"
                        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <!--            <div class="row">-->
            <!--                <div class="col-md-8 col-md-push-2 animate-box">-->
            <!--                    <div class="row">-->
            <!--                        <div class="col-md-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <input type="text" class="form-control" placeholder="Name">-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-6">-->
            <!--                            <div class="form-group">-->
            <!--                                <input type="text" class="form-control" placeholder="Email">-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-12">-->
            <!--                            <div class="form-group">-->
            <!--                                <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-12">-->
            <!--                            <div class="form-group">-->
            <!--                                <input type="submit" value="Send Message" class="btn btn-primary btn-modify">-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
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

