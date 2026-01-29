<?php get_header(); ?>

<main>
    <section class="news-section">
        <h2>Latest News</h2>

        <div class="news-list">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <article class="news-item">
                    <h3><?php the_title(); ?></h3>

                    <time datetime="<?php echo get_the_date('c'); ?>">
                        <?php echo get_the_date(); ?>
                    </time>

                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php endif; ?>

                    <p><?php the_excerpt(); ?></p>

                    <a href="<?php the_permalink(); ?>" class="read-more">
                        Läs Mer →
                    </a>
                </article>

            <?php endwhile; else : ?>
                <p>No news items found.</p>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
