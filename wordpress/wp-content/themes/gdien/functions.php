<?php
function gdien_theme_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Montserrat:wght@400;500;600;700;800;900&display=swap', array(), null);
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
    wp_enqueue_style('gdien-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_script('gdien-script', get_template_directory_uri() . '/script.js', array(), filemtime(get_template_directory() . '/script.js'), true);
}
add_action('wp_enqueue_scripts', 'gdien_theme_scripts');

function gdien_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'gdien'),
    ));
}
add_action('after_setup_theme', 'gdien_theme_setup');

function gdien_add_menu_link_class( $atts, $item, $args ) {
    if ( property_exists( $args, 'link_class' ) ) {
        if ( isset( $atts['class'] ) ) {
            $atts['class'] .= ' ' . $args->link_class;
        } else {
            $atts['class'] = $args->link_class;
        }
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'gdien_add_menu_link_class', 1, 3 );

// Tùy chỉnh câu thông báo gửi thành công của Contact Form 7
add_filter( 'wpcf7_display_message', function( $message, $status ) {
    if ( $status === 'mail_sent_ok' ) {
        return 'Xin cảm ơn, nội dung của bạn đã được gửi thành công.';
    }
    return $message;
}, 10, 2 );
