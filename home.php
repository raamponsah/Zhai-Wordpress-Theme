<?php


get_header('founder') ?>
<aside class="page-cta">
    <div>
        <div class="img-wrapper">
            <img src="<?php _e(get_stylesheet_directory_uri(  )) ?>/images/found.png" alt="" class="round">
        </div>
        <div class="content-text">
            <h3>Zihao Zhuang</h3>
            <p>
                ZHAI believes that a person who is no longer stymied by reading a job application will have the skills
                to
                not only find but also keep a job. Improved literacy also leads to more informed health decisions about
                nutrition and preventative care, which benefits both the individual and the nation as a whole.
            </p>
        </div>
    </div>

</aside>

<main>



    <div class="founder-video">

    </div>
    <h3 class="spared-title">Articles by Zhai Founder</h3>
    <div class="articles-wrapper">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
        <div class="article">
            <div class="article-image">
                <img src="<?php the_post_thumbnail() ?>" alt="">
            </div>
            <h4 class="article-title">
                <?php the_title(); ?>
            </h4>
            <p>
                <?php the_excerpt() ?>
            </p>
        </div>
        <?php endwhile; endif; ?>

    </div>








</main>

<?php get_template_part('includes/mission-sections-page'); ?>


<?php get_footer() ?>