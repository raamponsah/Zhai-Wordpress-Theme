<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('')?> </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <?php wp_head(); ?>
    <title><?php wp_title(''); ?></title>
</head>

<body <?php body_class();?>>
    <header>
        <img src="<?php _e(get_stylesheet_directory_uri())?>/images/logo.png" id="logo" alt="">
        <nav role="navigation" class="navigation" id='navigation'>
            <!-- <ul>
                <li><a href="./about.html">About us</a></li>
                <li><a href="">Projects</a></li>
                <li><a href="">Ways to Donate</a></li>
                <li><a href="">Get Involved</a></li>
                <li><a href="">For Sponsors</a></li>
                <li><a href="">Contact us</a></li>

            </ul> -->

            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>

        <a href="" class="donate-btn">Donate</a>
    </header>