<?php get_header('general-page') ?>
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






    <?php if(have_posts()):while(have_posts()):the_post(); ?>
    <h4><?php the_title(); ?></h4>

    <?php the_content();?>

    <?php endwhile;endif; ?>


</main>

<?php get_template_part('includes/mission-sections-page'); ?>


<?php get_footer() ?>