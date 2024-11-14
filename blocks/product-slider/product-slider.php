<?php 
/*
* Block Name: Product Slider
* Post Type: page 
*/

if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

    <section class="product-slider-wrapper">
    </section><!-- .product-slider-wrapper-->
    
<?php endif; ?>