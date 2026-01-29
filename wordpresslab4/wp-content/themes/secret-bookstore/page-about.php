<?php
/* Template Name: About Page */
get_header(); ?>
<main>
    <div class="about-div">
        <section class="about-section">
            <img src="<?php echo get_template_directory_uri(); ?>/pictures/esra-korkmaz-ybz-KmHyats-unsplash.jpg" alt="">
            <h2>About Us</h2>
            <p>The shop is owned by Elias Morren, a lifelong collector of forgotten novels, banned essays, and hand-bound curiosities. Elias is rarely seen on the shop floor, but his presence lingers in every carefully chosen title and every handwritten note tucked between the shelves.</p>
        </section>

        <div class="sections-div">
            <section class="about-section">
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <h2>Contact Us</h2>
                    <?php wp_nonce_field('secret_contact','secret_contact_nonce'); ?>
                    <input type="hidden" name="action" value="secret_contact">

                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </section>
        </div>
    </div>
</main>
<?php get_footer(); ?>
