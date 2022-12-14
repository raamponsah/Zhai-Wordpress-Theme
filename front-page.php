<?php get_header() ?>

<body <?php body_class(); ?>>


    <main>

        <div class="bg-main">
            <header>
                <img src="<?php _e(get_stylesheet_directory_uri()) ?>/images/logo.png" id="logo" alt="">
                <nav role="navigation" class="navigation" id='navigation'>

                    <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
                </nav>

                <a href="" class="donate-btn">Donate</a>
            </header>

            <div id="jumbotron">
                <div class="jumbotron-text">
                    <h1>Redefining the African Hope</h1>
                    <p>Our mission is to help children in need around the world. We provide food, shelter, education,
                        and
                        medical care to children who have been orphaned or abandoned.</p>
                    <a href="" class="gen-btn">GET INVOLVED &rarr;</a>
                </div>

                <div class="jumbotron-images">

                    <img src="<?php _e(get_stylesheet_directory_uri()) ?>/images/founder.jpeg" class="jumb-img" alt="">
                </div>
            </div>
        </div>
        <section id="featured-project">
            <div class="featured-image">
                <img src="<?php _e(get_stylesheet_directory_uri())?>/images/sos.png" alt="">
            </div>
            <?php if (is_active_sidebar('featured-project')): ?>
            <?php dynamic_sidebar('featured-project'); ?>
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
                        You can donate in kind or cash to support our causes. This could be done via momo or paypal.
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
                        Getting involved with us is as easy as it gets, head towards our get involve page to see our
                        five ways to ge involved
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
                        We offer outreach programs across domains of education, health, agriculture and gender
                        rights.
                    </p>
                </div>
            </div>
        </section>


        <?php get_template_part('includes/mission-sections-page'); ?>

        <?php get_footer() ?>