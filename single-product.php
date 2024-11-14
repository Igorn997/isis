<?php
/**
 * The template for displaying all single posts.
 *
 * @package Starter
 */

get_header();

get_template_part( 'blocks/hero/hero' );
get_template_part( 'blocks/three-products/three-products' );
get_template_part( 'blocks/featured-products/featured-products' );
?>


<?php get_footer(); ?>