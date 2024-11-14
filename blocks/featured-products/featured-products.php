<?php 
/*
* Block Name: Featured Products
* Post Type: page 
*/

$feature_heading = get_field('feature_heading');
$feature_cards = get_field('feature_cards');

if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

<section class="featured-products-wrapper">
  <div class="container">
    <?php if ($feature_heading): ?>
    <h2 class="section-title">
      <?php echo $feature_heading; ?>
    </h2>
    <?php endif; ?>

    <?php if ($feature_cards): ?>

    <div class="featured-products-cards">
      <? foreach ($feature_cards as $card): 
        $company_logo = $card['company_logo'];
        $button_feature = $card['button_feature'];
        $main_image_feature = $card['main_image_feature'];
        $product_name = $card['product_name'];
        $product_description = $card['product_description'];
        ?>
      <div class="card">
        <div class="card-content">
          <div class="card-company">
            <?php if ($company_logo): ?>
            <img src="<?php echo $company_logo['url']; ?>" alt="<?php echo $company_logo['alt']; ?>">
            <?php endif; ?>

            <?php if ($button_feature): ?>
            <div class="card-button"></div>
            <a href="<?php echo $button_feature['url']; ?>"><?php echo $button_feature['title']; ?></a>
          </div>
          <?php endif; ?>

          <?php if ($product_name): ?>
          <div class="card-image">
            <img src="<?php echo $main_image_feature['url']; ?>" alt="<?php echo $main_image_feature['alt']; ?>">
          </div>
          <?php endif; ?>

          <?php if ($product_name): ?>
          <div class="card-product">
            <h3 class="card-product-name">
              <?php echo $product_name; ?>
            </h3>
            <p class="card-product-description">
              <?php echo $product_description; ?>
            </p>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <?php endforeach; ?>
  <?php endif; ?>
  </div>

</section><!-- .featured-products-wrapper-->

<?php endif; ?>