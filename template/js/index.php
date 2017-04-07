<?php
/**
 * EDIT THE VALUES BELOW THIS LINE TO ADJUST THE CONFIGURATION
 * EACH OPTION HAS A COMMENT ABOVE IT WITH A DESCRIPTION
 */
/**
 * Specify the email address to which all mail messages are sent.
 * The script will try to use PHP's mail() function,
 * so if it is not properly configured it will fail silently (no error).
 */
$mailTo     = 'saintrolux@gmail.com';

/**
 * Set the message that will be shown on success
 */
$successMsg = 'Merci, Votre Message a été envoyé avec succès!';

/**
 * Set the message that will be shown if not all fields are filled
 */
$fillMsg    = 'Veuillez remplir tous les champs!';

/**
 * Set the message that will be shown on error
 */
$errorMsg   = 'Hm.. Il y a eu un problème!Essayer plutard';

/**
 * DO NOT EDIT ANYTHING BELOW THIS LINE, UNLESS YOU'RE SURE WHAT YOU'RE DOING
 */

$msg = "        DEMANDE DE DEVIS		";
$msg .= "Nom			: ".$_POST['contact-name']."\r\n";
$msg .= "Email		: ".$_POST['contact-email']."\r\n";
$msg .= "Telephone	: ".$_POST['contact-phone']."\r\n";
$msg .= "Depart	    : ".$_POST['contact-depart']."\r\n";
$msg .= "Arrivé	    : ".$_POST['contact-arriv']."\r\n";
$msg .= "Type	    : ".$_POST['contact-type']."\r\n";
$msg .= "Date	    : ".$_POST['contact-date']."\r\n";

$success = @mail($mailTo, $_POST['contact-email'], $msg, 'From: ' . $_POST['contact-name'] . '<' . $_POST['contact-email'] . '>');


?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class=""><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LATIN-BUS</title>

    <!-- Standard Favicon -->
    <link rel="icon" type="image/x-icon" href="images/icone.png"/>

    <!-- For iPhone 4 Retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images//apple-touch-icon-114x114-precomposed.png">

    <!-- For iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images//apple-touch-icon-72x72-precomposed.png">

    <!-- For iPhone: -->
    <link rel="apple-touch-icon-precomposed" href="images//apple-touch-icon-57x57-precomposed.png">

    <!-- Library - Loader CSS -->
    <link rel="stylesheet" type="text/css" href="libraries/loader/loaders.min.css">

    <!-- Library - Google Font Familys -->
    <link href='css/css.css' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <link href='css/Cstyle.css' rel='stylesheet' type='text/css'>
    <link href='css/latin.css' rel='stylesheet' type='text/css'>
    <link href='css/fontStyle.css' rel='stylesheet' type='text/css'>
    <link href='css/Cstyle.css' rel='stylesheet' type='text/css'>

    <!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap/bootstrap-datetimepicker.min.css">

    <!-- Font Icons -->
    <link rel="stylesheet" type="text/css" href="libraries/fonts/font-awesome.min.css">

    <!-- Library - OWL Carousel V.2.0 beta -->
    <link rel="stylesheet" type="text/css" href="libraries/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="libraries/owl-carousel/owl.theme.css">

    <!-- Library - FlexSlider v2.5.0 -->
    <link rel="stylesheet" type="text/css" href="libraries/flexslider/flexslider.css">

    <!-- Library - Animate CSS -->
    <link rel="stylesheet" type="text/css" href="libraries/animate/animate.min.css">

    <!-- Custom - Common CSS -->
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/navigation-menu.css">

    <!-- Custom - Theme CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css">

    <!--[if lt IE 9]>
    <script src="js/html5/respond.min.js"></script>
    <![endif]-->
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
<!-- Loader -->
<div id="site-loader" class="load-complete">
    <div class="loader">
        <div class="loader-inner ball-clip-rotate">
            <div></div>
        </div>
    </div>
</div><!-- Loader /- -->

<a id="top"></a>
<!-- Main Container -->
<div class="main-container">
    <!-- Header -->
    <header class="header-main">
        <!--
        <div class="top-header container-fluid no-padding">
            <!--
            <div class="container">
                <ul class="col-md-4 social no-bottom-margin pull-left">
                    <li><a href="#"><img src="images/icon/fb-ic.png" alt="Facebook" /></a></li>
                    <li><a href="#"><img src="images/icon/g+-ic.png" alt="Google pulse" /></a></li>
                    <li><a href="#"><img src="images/icon/tumbler-ic.png" alt="Tumbler" /></a></li>
                    <li><a href="#"><img src="images/icon/dribbble-ic.png" alt="dribbler" /></a></li>
                    <li><a href="#"><img src="images/icon/tw-ic.png" alt="Twitter" /></a></li>
                </ul>
                <div class="col-md-8 pull-right top-menu">
                    <ul class="no-bottom-margin">
                        <li><a href="#">Enquiry</a></li>
                        <li><a href="#">Cancellation</a></li>
                        <li><a href="#">Booking Status</a></li>
                        <li><a href="#">Tariffs</a></li>
                    </ul>
                </div>
            </div>
        </div> -->

        <!-- Logo Block -->
        <div class="middle-header container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <div class="col-md-4 logo-block pull-left">
                    <a href="#">
                        <img src="images/logo.jpg" alt="Logo" />
                        <b>LATIN-BUS</b><span>Toujours à votre service</span>
                    </a>
                </div>
                <div class="col-md-6 pull-right">
                    <div class="location">
                        <img src="images/icon/location-ic.png" alt="Location" />
                        <p>12 Rue Quartier Latin,<span> Adidogomé, Lomé</span></p>
                    </div>
                    <div class="phone">
                        <img src="images/icon/phone-ic.png" alt="phone" />
                        <p>Appeler à tout moment<span> +(228)90 30 35 01</span></p>
                    </div>
                </div>
            </div><!-- Container /- -->
        </div><!-- Logo Block /- -->
        <nav class="navbar ow-navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand logo-block">
                        <a href="#">
                            <img src="images/logo.png" alt="Logo" />
                            <b>Toujours à votre service</b><span>Toujours à votre service</span>
                        </a>
                    </div>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active dropdown">
                            <a href="index.html"  role="button" aria-haspopup="true" aria-expanded="false">Accueil</a>
                            <i class="ddl-switch fa fa-angle-down"></i>

                        </li>
                        <li><a href="about.html">A Propos de nous</a></li>
                        <li><a href="service.html">Nos Services</a></li>
                        <!--	<li class="dropdown">
                                <a href="#blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                <i class="ddl-switch fa fa-angle-down"></i>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#faq" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Faq</a>
                                <i class="ddl-switch fa fa-angle-down"></i>
                                <ul class="dropdown-menu">
                                    <li><a href="faq.html">Faq - Default</a></li>
                                    <li><a href="faq-1.html">Faq - Accordion</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <i class="ddl-switch fa fa-angle-down"></i>
                                <ul class="dropdown-menu">
                                    <li><a href="online-booking.html">Online Booking</a></li>
                                    <li><a href="error.html">404 - Error</a></li>
                                </ul>
                            </li>-->
                        <li><a href="contact-us.html">Nous contacter</a></li>
                    </ul>
                </div>
                <a href="#">Vous recherchez un/des bus</a>
            </div>
        </nav>
    </header><!-- Header /- -->

    <!-- Photo Slider2 -->
    <div class="container-fluid photos-slider2 no-padding">
        <div id="photos-slider2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="images/photos-slider/service-2.jpg" width="100%" alt="side-1"/>
                    <div class="container photos-slider2-content">
                        <div class="col-md-8 col-sm-12 col-xs12 pull-right">
                            <div class="slider-content">
                                <h2>Un moyen facile de</h2>
                                <h2>de faire vos courses</h2>
                                <p>Nous offrons le meilleur service Bus  au TOGO</p>
                                <!--<a href="#" title="Purchase" class="purchase">Purchase</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/photos-slider/photo-slide-1.jpg" alt="side-1"/>
                    <div class="container photos-slider2-content">
                        <div class="col-md-8 col-sm-12 col-xs12 pull-right">
                            <div class="slider-content">
                                <h2>Un moyen sécurisé</h2>
                                <h2>de faire le tourisme</h2>
                                <p>Nous offrons le meilleur service Bus  au TOGO</p>
                                <!--<a href="#" title="Learn More" class="learn-more">Lire Plus</a>
                                <a href="#" title="Purchase" class="purchase">Purchase</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- formulaire de commande -->
        <div class="booking-form">
            <div class="container">
                <div class="col-md-4">
                    <form name="book-taxi" class="book-taxi-form"  action="devi.php" method="post">
                        <h3>Demander Un devis Gratuitement</h3>
                        <div class="form-group col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="input_phone" name="contact-phone" placeholder="Votre Numéro" required="required"/>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <input type="email" class="form-control" id="input_email" name="contact-email" placeholder="Adresse email" required="required"/>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="input_dep" name="contact-depart" placeholder="Départ" required="required"/>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <input type="text" class="form-control" id="input_arriv" name="contact-arriv" placeholder="Destination" required="required" />
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <input type="number" min="0" class="form-control" id="input_nbr" name="contact-nombre" placeholder="Nbr de pers" required="required"/>
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <select class="form-control"  id="input_type" name="contact-type" placeholder="Type de Voyage" required="required">
                                <option value="allez">Allez Simple</option>
                                <option value="allez">Allez/Retour</option>
                            </select>
                        </div>


                        <div class="form-group col-md-12">
                            <div id="datepicker" class="input-group">
                                <input class="form-control" data-format="dd-MM-yyyy" name="contact-date" type="text" placeholder="Date" required="required"/>
								<span class="add-on">
									<i data-time-icon="icon-time" data-date-icon="icon-calendar"><img src="images/icon/date-picker.png" alt="datepicker" /></i>
								</span>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit"  class="btn btn-default">Demander le Devis</button>
                        </div>
                        <div id="alert-msg" class="alert-msg"></div>
                    </form>


                </div>
            </div>
        </div><!-- Booking Form /- -->
    </div ><!-- Photo Slider/- -->

    <footer class="footer-main">
        <!-- Container -->
        <div class="container">

            <div class="col-md-4 col-sm-6" style="float: left">
                <aside class="widget widget-links">
                    <h3 class="widget-title">Nous sommes Heureux de vous Offrir</h3>
                    <ul>
                        <li><a href="#">24 / 7 Des Bus pour toute destination dans le pays</a></li>
                        <li><a href="#">Connaître la disponibité des bus en nous appelant</a></li>
                        <li><a href="#">Des Chauffeurs expérimentés pour vos voyages</a></li>
                        <li><a href="#">Des Bus climatisés pour votre confort</a></li>

                    </ul>
                </aside>
            </div>

            <div class="col-md-4 col-sm-6" style="float: right">
                <aside class="widget widget-about">
                    <h3 class="widget-title">A Propos de Nous</h3>
                    <p>Latin Entreprise Voous propose son bar Pour des Raffraichissements et des Jeux de Casino</p>
                    <ul>
                        <li><img src="images/icon/ftr-location.png" alt="Address" />12 Rue des eperviers <span>Adidogomé, Lomé</span></li>
                        <li><img src="images/icon/ftr-customer.png" alt="Phone" /> Pour toute information: <span>++228 90 30 35 01</span></li>
                        <li><img src="images/icon/ftr-email.png" alt="Mail" /><span>Email :</span><a href="mailto:saintrolux@gmail.com"> latinbus@gmail.com</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-md-4 col-sm-6" style="float: right">
                <img src="images/latinBus.gif">
            </div>
        </div>
        <div class="bottom-footer container-fluid no-padding">
            <div class="container">
                <!--<ul class="col-md-5 pull-left">
                    <li><a href="#">Faq</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Client Support</a></li>
                </ul> -->
                <div class="col-md-7 pull-right">
                    <p class="copyright">copyrights &copy; 2016 Labosoft. All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

</div><!-- Main Container -->
<!-- JQuery v1.11.3 -->
<script src="js/jquery.min.js"></script>

<!-- Library - Modernizer -->
<script src="libraries/modernizr/modernizr.js"></script>

<!-- Library - Bootstrap v3.3.5 -->
<script src="libraries/bootstrap/bootstrap.min.js"></script><!-- Bootstrap JS File v3.3.5 -->
<script src="libraries/bootstrap/bootstrap-datetimepicker.min.js"></script><!-- Bootstrap JS File v3.3.5 -->

<!-- jQuery Easing v1.3 -->
<script src="js/jquery.easing.min.js"></script>

<!-- Library - jQuery.appear -->
<script src="libraries/appear/jquery.appear.js"></script>

<!-- Library - OWL Carousel V.2.0 beta -->
<script src="libraries/owl-carousel/owl.carousel.min.js"></script>

<!-- jQuery For Number Counter -->
<script src="libraries/number/jquery.animateNumber.min.js"></script>

<!-- Library - Google Map API -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

<!-- Library - FlexSlider v2.5.0 -->
<script defer src="libraries/flexslider/jquery.flexslider.js"></script>

<!-- Library - Theme JS -->
<script src="js/functions.js"></script>
</body>
</html>