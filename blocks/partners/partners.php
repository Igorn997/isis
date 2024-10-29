<?php 
/*
* Block Name: Partners
* Post Type: page 
*/

$partners_logos = get_field('partners');

if( isset( $block['data']['preview_image_help'] ) ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
elseif( is_array($partners_logos) && !empty($partners_logos) ): ?>

    <section class="partners-wrapper">
        <div class="container">
            <div class="partners-inner">
                <?php foreach($partners_logos as $partner): 
                    $image_id = $partner['image']['ID'];
                    $alt_text = $partner['image']['alt']; ?>
                    <div class="partners-logo">
                        <?php echo wp_get_attachment_image($image_id, 'full', false, array('alt' => $alt_text)); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- .partners-wrapper-->

<?php endif; ?>
