<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );

function remove_parent_google_fonts() {
    wp_dequeue_style('kalam'); 
}
add_action('wp_enqueue_scripts', 'remove_parent_google_fonts', 20);


 function chic_preload_slider_image() {
    if (is_front_page() || is_home()) {
        $featured_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium')[0];
        echo '<link rel="preload" as="image" href="' . esc_url($featured_image_url) . '" fetchpriority="high">';
    }
}
add_action('wp_head', 'chic_preload_slider_image');
