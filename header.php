<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Women's Concern</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href='https://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <style>
    #header-section{
        background-image: url("<?php echo get_template_directory_uri().'/img/header-bg.jpg'; ?>");
        color: #fff;
        height: 100%;
        background-color: #717171;
        background-blend-mode: multiply;
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
    }
    #footer-section{
        background-image: url("<?php echo get_template_directory_uri().'/img/header-bg.jpg'; ?>");
        color: #fff;
        min-height: 300px;
        background-color: #717171;
        background-blend-mode: multiply;
        background-size: cover;
        background-position: center center;
        padding-top: 50px;
        background-attachment: fixed;
    }
    </style>
    <?php wp_head(); ?>
</head>

<body >
    <div id="header-section">
        <div id="header-menu">
            <a href="http://locus.ioe.edu.np/leblog/" class="menu-item">Blog</a>
            <a href="http://locus.ioe.edu.np/legallery/" class="menu-item">Gallery</a>
            <a href="#about-section" class="menu-item">About</a>
            <a href="#services-section" class="menu-item">Services</a>
            <a href="#members-section" class="menu-item">Members</a>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="site-info">
                        <img class="title" src="<?php echo get_template_directory_uri().'/img/logo-white.png'; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="slogan">
                        We care about you
                    </div>
                </div>
            </div>

            <!-- <div>
                <div class="title">Locus <span class="year">2016<span></div>
                <div class="extra">Empowering Innovation</div>
            </div> -->
        </div>
    </div>
