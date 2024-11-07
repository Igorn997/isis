<?php 
/*
* Block Name: Satisfied Customers
* Post Type: page 
*/

if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

    <section class="satisfied-customers-wrapper">
    </section><!-- .satisfied-customers-wrapper-->
    
<?php endif; ?>