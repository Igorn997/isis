<?php 
function theme_enqueue_product_styles() {
    if (is_singular('product')) {
        wp_enqueue_style('single-product-style', get_template_directory_uri() . '/assets/css/single-product.css');
    }
}
add_action('wp_enqueue_scripts', 'theme_enqueue_product_styles');

function enqueue_gsap_scripts() {
    wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/components/gsap.min.js', array(), '3.11.2', true);
    wp_enqueue_script('scrolltrigger', get_template_directory_uri() . '/assets/components/ScrollTrigger.min.js', array('gsap'), '3.11.2', true);
    
}
add_action('wp_enqueue_scripts', 'enqueue_gsap_scripts');

// function starter_enqueue_product_scripts() {
//     if ( is_singular( 'product' ) ) { // Proverava da li je single post za proizvod
//         wp_enqueue_script(
//             'hero', // Handle za skriptu
//             get_template_directory_uri() . '/blocks/hero/hero.js', // Putanja do skripte
//             array( 'jquery' ), // Zavisi od jQuery-a
//             null, // Verzija
//             true // Učitaj u footer-u
//         );
//     }
// }
// add_action( 'wp_enqueue_scripts', 'starter_enqueue_product_scripts' );


?>