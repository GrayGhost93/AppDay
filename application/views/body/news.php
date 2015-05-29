<!DOCTYPE HTML>
<html>
<head>
    <title>Erstie-Hilfe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- FontAwesome - http://fortawesome.github.io/Font-Awesome/ -->
    <link rel="stylesheet" href="<?php print base_url().'css/font-awesome.min.css'; ?>" />

    <!-- jQueryMobileCSS - original without styling -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />

    <!-- nativeDroid core CSS -->
    <link rel="stylesheet" href="<?php print base_url().'css/jquerymobile.nativedroid.css'; ?>" />

    <!-- nativeDroid: Light/Dark -->
    <link rel="stylesheet" href="<?php print base_url().'css/jquerymobile.nativedroid.dark.css'; ?>"  id='jQMnDTheme' />

    <!-- nativeDroid: Color Schemes -->
    <link rel="stylesheet" href="<?php print base_url().'css/jquerymobile.nativedroid.color.green.css'; ?>" id='jQMnDColor' />

    <!-- jQuery / jQueryMobile Scripts -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <!-- Extras for: Cards.html -->



</head>
<body>

<div id='map-canvas'></div>

<div data-role="page" data-theme='b'>


    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
        <a href="<?php print site_url('welcome'); ?>" data-ajax="false"><i class='fa fa-bars'></i></a>
        <h1>News</h1>
    </div>

    <div data-role="content">

        <ul data-nativedroid-plugin='cards'>
            <?php
                foreach ($news as $r) {
                    $tag = substr($r['datum'],8,2);
                    $monat = substr($r['datum'],5,2);
                    $jahr = substr($r['datum'],0,4);
                    $datum = $tag.'.'.$monat.'.'.$jahr;

                    print "<li data-cards-type='text'>";
                    //print '<a href="'.site_url('event/show').'/'.$v['id'].'">';
                    print '<h1>'.$r['titel'].'</h1>';
                    print '<p>'.$r['inhalt'].'</p>';
                    //print '<p class="ui-li-aside"><strong>'.$datum.'</strong></p>';
                    //print '</a>';
                    print '</li>';
                }
            ?>

        </ul>
    </div>

</div>

