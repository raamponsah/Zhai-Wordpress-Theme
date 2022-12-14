<?php


get_header('founder') ?>
<aside class="pg">
    <aside class="page-cta redefine">
        <div class="page-cta-text">


            <h4>Zihao Zhuang</h4>

            <p>
                ZHAI believes that a person who is no longer stymied by reading a job application will have the skills
                to
                not only find but also keep a job. Improved literacy also leads to more informed health decisions about
                nutrition and preventative care, which benefits both the individual and the nation as a whole.
            </p>

            <div>
                <a href="" class="button button-outline orange">JOIN US TODAY</a>
            </div>
        </div>

        <div class="video-widget">
            <?php if (is_active_sidebar('video-widget')): ?>
            <?php dynamic_sidebar('video-widget'); ?>
            <?php endif; ?>
        </div>
    </aside>

    <main>



        <div class=" founder-video">

        </div>
        <h3 class="spared-title">Articles by Zhai Founder</h3>
        <div class="articles-wrapper">
            <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
            <div class="article">
                <div class="article-image">
                    <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail() ?>" alt=""></a>
                </div>
                <a href="<?php the_permalink() ?>">
                    <h4 class="article-title">
                        <?php the_title(); ?>
                    </h4>
                </a>
                <p>
                    <?php the_excerpt() ?>
                </p>
            </div>
            <?php endwhile; endif; ?>

        </div>








    </main>

    <?php get_template_part('includes/mission-sections-page'); ?>


    <?php get_footer() ?>