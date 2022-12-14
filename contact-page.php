<?php 
// Template Name: Contact Page
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




    <div class="contact-hub">
        <div class="content">

            <?php if (have_posts()):
while (have_posts()):
    the_post(); ?> <h4>
                <?php the_title(); ?>
            </h4>

            <?php the_content(); ?>

            <?php endwhile; endif; ?>
        </div>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d63523.94296793566!2d-0.20386067816194908!3d5.677473168069426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scastle%20bridge%20street%20east%20adenta%20accra!5e0!3m2!1sen!2sgh!4v1670979083826!5m2!1sen!2sgh"
            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>


    </div>

</main>

<?php get_template_part('includes/mission-sections-page'); ?>


<?php get_footer() ?>