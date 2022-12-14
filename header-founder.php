<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/ae1835e754.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,300&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="./style.css">

    <?php wp_head(); ?>
    <title>
        <?php wp_title(''); ?>
    </title>
</head>

<body <?php body_class(); ?>>
    <header id="page-header"
        style="background-image:url(<?php _e(get_stylesheet_directory_uri()) ?>/images/bg-c.jpeg); background-size:cover; background-position:center center;">
        <div class="navbar">
            <img src="<?php _e(get_stylesheet_directory_uri()) ?>/images/logo.png" id="logo" alt="">

            <nav role=" navigation" class="navigation" id='navigation'>
                <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
            </nav>

            <a href="" class="donate-btn">Donate</a>

        </div>
        <section id="header-page-jumbo">

            <div class="header-page-jumbo-text">
                <h1 class="header-page-jumbo-title">
                    Zihao Zhuang
                </h1>
                <h2>Founder of ZHAI</h2>
                <h3>Creating a New Africa</h3>
            </div>

            <div class="video-stay">
                <?php if (is_active_sidebar('video-widget')): ?>
                <?php dynamic_sidebar('video-widget'); ?>
                <?php endif; ?>
            </div>

        </section>


        <div class="overlay"></div>

    </header>