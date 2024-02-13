<?php 
function omokaji_v_01_css() {
    wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/css/reset.css' );     
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/css/style.css' ); 
    wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/css/swiper.min.css' );     
}

add_action( 'wp_enqueue_scripts', 'omokaji_v_01_css' );
?>