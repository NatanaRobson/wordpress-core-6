<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>

<body <?php body_class(); ?>>
    <header>
        <img class="logo" src="https://www.pngarts.com/files/3/Green-Tea-Transparent-Images.png" alt="green tea cup">
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header',
                'menu_class' => 'menu'
            ));
            ?>
        </nav>
    </header>