<?php 
function theme_enqueue_product_styles() {
    if (is_singular('product')) {
        wp_enqueue_style('single-product-style', get_template_directory_uri() . '/assets/css/single-product.css');
    }
}
add_action('wp_enqueue_scripts', 'theme_enqueue_product_styles');



?>