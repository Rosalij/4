<?php get_header(); ?>
<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="about-section">
            <?php if (has_post_thumbnail()) the_post_thumbnail('large'); ?>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
