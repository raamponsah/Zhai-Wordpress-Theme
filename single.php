<?php


get_header('single-page') ?>
<aside class="pg">

    <h2>Zihao Zhuang</h2>

    <p>
        ZHAI believes that a person who is no longer stymied by reading a job application will have the skills
        to
        not only find but also keep a job. Improved literacy also leads to more informed health decisions about
        nutrition and preventative care, which benefits both the individual and the nation as a whole.
    </p>


</aside>

<main>



    <div class="founder-video">

    </div>
    <div class="articles-wrapper">
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
        <div class="article">

            <a href="<?php the_permalink() ?>">
                <h4 class="article-title">
                    <?php the_title(); ?>
                </h4>
            </a>
            <p>
                <?php the_content() ?>
            </p>
        </div>
        <?php endwhile; endif; ?>

    </div>








</main>

<?php get_template_part('includes/mission-sections-page'); ?>


<?php get_footer() ?>