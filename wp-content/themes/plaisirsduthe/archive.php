<?php get_header(); ?>
<h1>ARCHIVE.PHP</h1>
<section>
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post()
    ?>
            <h2><?php the_title() ?></h2>
            <h3><?php the_category() ?></h3>
            <div><?php the_content() ?></div>
    <?php
        endwhile;
    endif;
    ?>
</section>
<?php get_footer() ?>