<article>

<?php if(have_posts()):while(have_posts()):the_post(); ?>
<div>
    <h4 class="the-title"><?php the_title(); ?></h4>
    <p>
        We offer assistance to mothers in need. We offer assistance to mothers in need
    </p>
    <aside class="summary owl-green">
        <p>We offer assistance to mothers in need</p>
        <a href="" class="button button-primary">Learn More</a>
        <!-- <div class="overlay"></div> -->
    </aside>

</div>
<div class="content-only">
    <?php the_content();?>
</div>

<?php endwhile;endif; ?>
</article>