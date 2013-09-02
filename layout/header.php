<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
    <title>Zalles Electrical Power Services</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

    <!-- Skeleton -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="stylesheet" href="lib/Skeleton/stylesheets/base.css">
    <link rel="stylesheet" href="lib/Skeleton/stylesheets/skeleton.css">
    <link rel="stylesheet" href="lib/Skeleton/stylesheets/layout.css">

    <!-- JQuery -->
    <script src="lib/jquery/jquery-1.7.2.js" type="text/javascript"></script>
    <link href="lib/jquery-ui/css/flick/jquery-ui-1.10.1.custom.css" rel="stylesheet">
    <script src="lib/jquery-ui/js/jquery-ui-1.10.1.custom.js" type="text/javascript"></script>
    <script src="lib/tinybox2/tinybox.js" type="text/javascript"></script>

    <!-- Slide -->
    <link rel="stylesheet" href="lib/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <script type="text/javascript" src="lib/nivo-slider/jquery.nivo.slider.js"></script>
    <link rel="stylesheet" href="lib/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

    <!-- Google Fonts -->
    <!--<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>-->

    <!-- Personal files -->
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="styles_internal.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper" class="container">
    <div id="wrapper_content">
        <div id="header">
            <div id="logo" class="columns six">
                <a href="index.php"><img src="images/logo.gif" /></a>
            </div>
            <div id="logo_text" class="seven columns offset-by-three">
                <img src="images/zeps_text.png" />
            </div>
            <div class="clear"></div>
            <div id="menu" class="sixteen columns">
                <?php
                if (!isset($menu_actual)) {
                    $menu_actual = 'home_menu';
                }
                echo "<style type='text/css'>#menu .$menu_actual { border-bottom: 3px solid #CC3300; }</style>";
                ?>
                <div id="tiny_navigation" onclick="$('#menu_items').toggle();">NAVIGATION</div>
                <div id="menu_items">
                    <ul>
                        <li><a href="index.php" class="home_menu">Home</a></li>
                        <li>
                            <a href="service_engineering.php" class="services_menu">Services</a>
                            <ul class="submenu">
                                <li><a href="service_engineering.php">Engineering</a></li>
                                <li><a href="service_engineering.php">Field Services</a></li>
                                <li><a href="service_engineering.php">Electrical Studies</a></li>
                                <li><a href="service_engineering.php">Other Services</a></li>
                            </ul>
                        </li>
                        <li><a href="staff.php" class="staff_menu">Staff</a></li>
                        <li><a href="portfolio.php" class="portfolio_menu">Portfolio</a></li>
                        <li><a href="jobs.php" class="jobs_menu">Jobs</a></li>
                        <li><a href="contact.php" class="contact_menu">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>