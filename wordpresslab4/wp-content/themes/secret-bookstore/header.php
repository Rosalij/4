<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/pictures/favicon-32x32.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
    <header>
        <img src="<?php echo get_template_directory_uri(); ?>/pictures/montse-pliego-uZIGPD4-aCM-unsplash.jpg" alt="background" class="background-image">
        <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/pictures/TheSecretBookstore.svg" alt="logo"></div>
        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'main-nav',
                'fallback_cb' => false
            ));
            if (!has_nav_menu('primary')): ?>
            <ul class="main-nav">
                <li><a href="<?php echo esc_url(get_post_type_archive_link('news') ? get_post_type_archive_link('news') : home_url('/news')); ?>">News</a></li>
                <li><a href="<?php echo esc_url(get_post_type_archive_link('product') ? get_post_type_archive_link('product') : home_url('/products')); ?>">Products</a></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">About</a></li>
            </ul>
            <?php endif; ?>
        </nav>
    </header>
