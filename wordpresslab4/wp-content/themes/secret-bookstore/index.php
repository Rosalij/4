<?php
/**
 * Main index template — required for a valid WordPress theme
 */
get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <?php if (!is_singular()) : ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php else : ?>
                    <h1><?php the_title(); ?></h1>
                <?php endif; ?>

                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'secret-bookstore'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
