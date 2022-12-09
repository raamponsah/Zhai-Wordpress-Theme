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


    <section class="main-content">
        <aside class=" sidebar">
            <h4>
                JOIN THE MOVEMENT
            </h4>
            <h5>
                HELP DONATE
            </h5>
            <a href="" class="button button-outline orange">JOIN US TODAY</a>

        </aside>

        <article>

            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <h4><?php the_title(); ?></h4>
            <div class="content-only">
                <?php the_content();?>
            </div>
            <div class="image-content">

            </div>
            <?php endwhile;endif; ?>
        </article>
    </section>
</main>

<section id="video-background">
    <div class="overlay">
        <h4>Our Mission</h4>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
        </p>
        <a href="" class="button button-primary mt-2">learn more &rarr;</a>
    </div>
</section>

<?php get_footer() ?>