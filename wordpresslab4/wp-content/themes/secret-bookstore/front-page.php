<?php get_header(); ?>
<main>
    <section class="welcome-section">
        <h1>Discover your new book</h1>
        <p>Your gateway to hidden literary treasures.</p>
    </section>
    <div class="sections-div">
        <section class="select-section">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('about')) ?: home_url('/about')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/pictures/esra-korkmaz-ybz-KmHyats-unsplash.jpg" alt="">
                <h2>About Us</h2>
                <p>At The Secret Bookstore, we specialize in rare and unique books that you won't find anywhere else. Curated collection to ensure that every book has a story to tell.</p>
            </a>
        </section>

        <section class="select-section">
            <a href="<?php echo esc_url(get_post_type_archive_link('product') ?: home_url('/products')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/pictures/ruan-martinelli-xVQ5aQTGJhc-unsplash.jpg" alt="">
                <h2>Discover Our Collection</h2>
                <p>Explore our wide range of genres, from classic literature to contemporary fiction, and everything in between.</p>
            </a>
        </section>

        <section class="select-section">
            <a href="<?php echo esc_url(get_post_type_archive_link('news') ?: home_url('/news')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/pictures/haberdoedas-UbYS5TovKdo-unsplash.jpg" alt="">
                <h2>Recent News</h2>
                <p>Read about recent news and events around our bookstore.</p>
            </a>
        </section>
    </div>
</main>
<?php get_footer(); ?>
