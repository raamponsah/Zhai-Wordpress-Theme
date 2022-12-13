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
    <h3 class="spared-title">Articles by Zhai Founder</h3>
    <div class="articles-wrapper">
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <div class="article">
            <div class="article-image">
                <img src="<?php the_post_thumbnail()?>" alt="">
            </div>
            <h4 class="article-title"><?php the_title(); ?></h4>
            <p><?php the_excerpt( ) ?></p>
        </div>
        <?php endwhile;endif; ?>

    </div>








</main>

<?php get_template_part('includes/mission-sections-page'); ?>


<?php get_footer() ?>