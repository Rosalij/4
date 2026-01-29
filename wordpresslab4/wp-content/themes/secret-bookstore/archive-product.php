<?php get_header(); ?>
<main>
    <section class="product-section">
        <h2>Featured Finds</h2>
        <div class="product-grid">
            <?php
            $args = array('post_type' => 'product', 'posts_per_page' => -1);
            $products = new WP_Query($args);
            if ($products->have_posts()) :
                while ($products->have_posts()) : $products->the_post(); ?>

                    <article class="product-card">
                        <h3><?php the_title(); ?></h3>
                        <p class="product-description"><?php the_excerpt(); ?></p>
                        <span class="product-price"><?php echo esc_html(get_post_meta(get_the_ID(), 'price', true)); ?></span>
                    </article>

                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No products found.</p>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>
