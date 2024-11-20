<?php 
/*
* Block Name: Single Blog
* Post Type: page 
*/

$single_blog = get_field('single_blog');

if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

<section class="single-blog-wrapper">
  <div class="container">
    <?php if ($single_blog): ?>
    <?php echo $single_blog; ?>
    <?php endif; ?>
  </div>
</section><!-- .single-blog-wrapper-->

<?php endif; ?>