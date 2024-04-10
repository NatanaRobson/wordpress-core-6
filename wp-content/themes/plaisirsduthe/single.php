<h1>SINGLE.PHP</h1>
<section>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post()
    ?>
            <h2><?php the_title() ?></h2>
            <span><?php the_category(); ?></span>
            <span><?php the_author(); ?></span>
            <div><?php the_content() ?></div>
    <?php
        endwhile;
    endif;
    ?>
</section>