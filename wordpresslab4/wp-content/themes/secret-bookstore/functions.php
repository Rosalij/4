<?php
// Enqueue theme stylesheet (the heavy CSS is in /css/style.css)
function secret_enqueue_styles() {
    wp_enqueue_style('secret-style', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_template_directory() . '/css/style.css'));
}
add_action('wp_enqueue_scripts', 'secret_enqueue_styles');

// Basic theme supports
add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array('primary' => 'Primary Menu'));
});

// Register custom post types: product and news
function secret_register_cpts() {
    register_post_type('product', array(
        'labels' => array('name' => 'Products', 'singular_name' => 'Product'),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'products'),
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    ));

    register_post_type('news', array(
        'labels' => array('name' => 'News', 'singular_name' => 'News'),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'news'),
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'secret_register_cpts');

// Contact form handler
function secret_handle_contact() {
    if (!isset($_POST['secret_contact_nonce']) || !wp_verify_nonce($_POST['secret_contact_nonce'], 'secret_contact')) {
        wp_safe_redirect(wp_get_referer() . '?contact=failed');
        exit;
    }
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $message = sanitize_textarea_field($_POST['message']);

    $to = get_option('admin_email');
    $subject = 'Contact form: ' . get_bloginfo('name') . ' - ' . $name;
    $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>');

    wp_mail($to, $subject, $message, $headers);

    wp_safe_redirect(wp_get_referer() . '?contact=success');
    exit;
}
add_action('admin_post_nopriv_secret_contact', 'secret_handle_contact');
add_action('admin_post_secret_contact', 'secret_handle_contact');
