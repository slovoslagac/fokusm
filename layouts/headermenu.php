<?php
$currentpage = basename($_SERVER["SCRIPT_FILENAME"]);

?>
<nav class="fh5co-nav" role="navigation">
    <div class="container-wrap">
        <div class="top-menu">
            <div class="row">
                <div class="col-xs-2">
                    <div id="fh5co-logo"><a href="index.php">Fokus&nbspM</a></div>
                </div>
                <div class="col-xs-10 text-right menu-1">
                    <ul>
                        <li <?php echo ("index.php" == $currentpage) ? "class=\"active\"" : "" ?>><a href="index.php">Naslovna</a></li>
                        <li <?php echo ("work.php" == $currentpage) ? "class=\"active has-dropdown\"" : "class=\"has-dropdown\"" ?> >
                            <a href="work.php">Časovi</a>
                            <ul class="dropdown">
                                <li><a href="work.php#palilula">Palilula</a></li>
                                <li><a href="work.php#novibeograd">Novi Beograd</a></li>
                            </ul>
                        </li>
                        <li <?php echo ("gallery.php" == $currentpage) ? "class=\"active\"" : "" ?>><a href="gallery.php">Galerija</a></li>
                        <li <?php echo ("about.php" == $currentpage) ? "class=\"active\"" : "" ?>><a href="about.php">O nama</a></li>
                        <li <?php echo ("contact.php" == $currentpage) ? "class=\"active\"" : "" ?>><a href="contact.php">Kontakt</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>