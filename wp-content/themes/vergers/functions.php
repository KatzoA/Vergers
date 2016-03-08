<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

global $pagenow;

if ( is_admin() && isset( $_GET ) && $pagenow == 'themes.php' ) add_action('init', 'woo_install_theme', 1);

function woo_install_theme() {



update_option( 'woocommerce_thumbnail_image_width', '300' );

update_option( 'woocommerce_thumbnail_image_height', '300' );

update_option( 'woocommerce_single_image_width', '600' );

update_option( 'woocommerce_single_image_height', '600' );

update_option( 'woocommerce_catalog_image_width', '450' );

update_option( 'woocommerce_catalog_image_height', '450' );



}

?>