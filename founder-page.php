<?php

// Template Name: Founder's Page

get_header('general-page') ?>
<aside class="page-cta">
    <div>
        <h3>Re-defining: Hope To the African</h3>
        <p>
            There comes a nice little fluffer. This present moment is perfect simply due to the fact you're experiencing
            it.
        </p>
    </div>
    <div>
        <a href="" class="button button-outline orange">JOIN US TODAY</a>
    </div>
</aside>

<main>



    <div class="founder-video">

    </div>

    <div class="articles-wrapper">
        <div class="article">
            <div class="article-image">
                <img src="<?php _e(get_stylesheet_directory_uri())?>/images/4.jpg" alt="">
            </div>
            <h4 class="article-title">Article One</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint veritatis perspiciatis aliquid voluptates
                adipisci illo, est suscipit reprehenderit cum quaerat. </p>
        </div>

        <div class="article">
            <div class="article-image">
                <img src="<?php _e(get_stylesheet_directory_uri())?>/images/4.jpg" alt="">
            </div>
            <h4 class="article-title">Article One</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint veritatis perspiciatis aliquid voluptates
                adipisci illo, est suscipit reprehenderit cum quaerat. </p>
        </div>
    </div>



    <?php if(have_posts()):while(have_posts()):the_post(); ?>
    <h4><?php the_title(); ?></h4>

    <?php the_content();?>

    <?php endwhile;endif; ?>


</main>

<?php get_template_part('includes/mission-sections-page'); ?>


<?php get_footer() ?>