<?php 
/*
* Block Name: Products Categories
* Post Type: page 
*/

$heading = get_field('heading');
$number_of_products = get_field('number_of_products');
$text = get_field('text');
$boxes = get_field('box');

if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

<section class="products-categories-wrapper">
  <div class="container">
    <div class="products-categories-inner">
      <div class="products-categories-boxes">
        <div class="first-box">
          <?php if ($heading): ?>
          <h2 class="products-categories-title">
            <?php echo $heading; ?>
          </h2>
          <?php endif; ?>

          <div class="number-text">
            <?php if ($number_of_products): ?>
            <p class="products-categories-number">
              <?php echo $number_of_products; ?>
            </p>
            <?php endif; ?>

            <?php if ($text): ?>
            <?php echo $text; ?>
            <?php endif; ?>
          </div>
        </div>

        <?php foreach($boxes as $box): ?>
        <div class="box">
          <?php if ($box['link']): ?>
          <a href="<?php echo $box['link']; ?>">
            <div class="box-inner">
              <?php if ($box['title']): ?>
              <div class="box-title">
                <h3>
                  <?php echo $box['title']; ?>
                </h3>
              </div>
              <?php endif; ?>

              <?php if ($box['image']): ?>
              <div class='box-image'>
                <?php 
                      $image_id = $box['image']['ID']; 
                      $alt_text = !empty($box['image']['alt']) ? $box['image']['alt'] : get_post_meta($image_id, '_wp_attachment_image_alt', true);
                     ?>
                <?php echo wp_get_attachment_image($image_id, 'full', false, array('alt' => $alt_text)); ?>
              </div>
              <?php endif; ?>

              <?php if ($box['text']): ?>
              <div class="box-text">
                <p>
                  <?php echo $box['text']; ?>
                </p>
              </div>
              <?php endif; ?>
            </div>
          </a>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section><!-- .products-categories-wrapper-->

<?php endif; ?>