<!DOCTYPE html>
<!--[if lte IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->



<head>
    <meta charset="utf-8">
    <title> <?php echo wp_get_document_title(); ?></title>
    <!--=================================
    Meta tags
    =================================-->
    <meta name="description" content="">
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
    <!--=================================
    Style Sheets
    =================================-->

    <?php
    wp_head();
    ?>
    <link href='https://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>

<!--    <script async src=" --><?php //echo get_stylesheet_directory_uri(); ?><!--/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->

</head>
<body class="eschool" data-spy="scroll" data-target="#navbar" data-offset="70">

<!--====================================
Body Content
=======================================-->
<div class="navbar-custom">
    <div class="container">
        <a href="#section0" class="logo"><img src="<?php echo get_home_url() ?> /wp-content/uploads/2020/06/logo.png" alt=""></a>
        <nav id="navbar">
            <a href="#" class="nav-triger"><span class="fa fa-navicon"></span></a>
            <ul class="main-menu nav">
                <li><a href="#section2">О нас</a></li>
                <li><a href="#section1">Цены</a></li>
                <li><a href="#section3">Авто</a></li>
                <li><a href="#section4">Отзывы</a></li>
                <li><a href="#section5">Контакты</a></li>
            </ul>
        </nav>

    </div>
</div>