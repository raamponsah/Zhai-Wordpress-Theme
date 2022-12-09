<?php get_header() ?>

<body <?php body_class();?>>
    <header>
        <img src="<?php _e(get_stylesheet_directory_uri())?>/images/logo.png" id="logo" alt="">
        <nav role="navigation" class="navigation" id='navigation'>

            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>

        <a href="" class="button button-outline">Donate</a>
    </header>

    <main>
        <div id="jumbotron">
            <div class="jumbotron-text">
                <h1>Redefining the African Hope</h1>
                <p>Our mission is to help children in need around the world. We provide food, shelter, education, and
                    medical care to children who have been orphaned or abandoned.</p>
                <a href="" class="button button-primary mt-2">GET INVOLVED &rarr;</a>
            </div>

            <div class="jumbotron-images">
                <img src="<?php _e(get_stylesheet_directory_uri()) ?>/images/1.jpg" class="jumb-img" alt="">
                <img src="<?php _e(get_stylesheet_directory_uri()) ?>/images/11.jpg" class="jumb-img" alt="">
            </div>
        </div>

        <section id="featured-project">
            <div class="featured-image">
                <img src="./images/15.jpg" alt="">
            </div>
            <?php if(is_active_sidebar( 'featured-project' )): ?>
            <?php dynamic_sidebar( 'featured-project' ); ?>
            <?php endif; ?>

        </section>

        <section id="opportunities">
            <div class="card green">
                <div class="card-icon green">
                    <i class="fa-solid fa-hand-holding-hand fa-2x"></i>
                </div>

                <div>
                    <h4 class="card-title green">Ways to Donate</h4>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quam eveniet voluptate ab
                        corrupti, quisquam ducimus harum? Ea atque deserunt asperiores voluptas dicta consequatur
                        dolores.
                    </p>
                </div>
            </div>

            <div class="card blue">
                <div class="card-icon">
                    <i class="fa-solid fa-handshake-angle fa-2x"></i>
                </div>
                <div>
                    <h4 class="card-title">Get Involved</h4>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quam eveniet voluptate ab
                        corrupti, quisquam ducimus harum? Ea atque deserunt asperiores voluptas dicta consequatur
                        dolores.
                    </p>
                </div>
            </div>

            <div class="card orange">

                <div class="card-icon orange">
                    <i class="fa-solid fa-handshake-angle fa-2x"></i>
                </div>

                <div>
                    <h4 class="card-title orange">Outreach Programs</h4>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quam eveniet voluptate ab
                        corrupti, quisquam ducimus harum? Ea atque deserunt asperiores voluptas dicta consequatur
                        dolores.
                    </p>
                </div>
            </div>
        </section>

        <section id="video-background">
            <div class="overlay">
                <h4>Our Mission</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
                </p>
                <a href="" class="button button-primary mt-2">learn more &rarr;</a>
            </div>
        </section>

        <?php get_footer()?>