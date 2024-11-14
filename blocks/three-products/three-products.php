<?php 
/*
* Block Name: Three Products
* Post Type: page 
*/

$cards = get_field('cards');


if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

<section class="three-products-wrapper">
  <div class="container">
    <?php if ($cards): ?>
    <div class="three-products-cards">
      <?php foreach ($cards as $card): 
                        $flag_image = $card['flag_image']; 
                        $flag_text = $card['flag_text'];
                        $main_image = $card['main_image'];
                        $description = $card['description']; 
                        $feature_first_button = $card['feature_first_button'];
                        $feature_second_button = $card['feature_second_button'];
                    ?>
      <div class="three-products-card">
        <div class="three-products-card-flag">
          <div class="three-products-card-flag-image">
            <img src="<?php echo $flag_image['url']; ?>" alt="Image of: <?php echo $flag_image['title']; ?>">
          </div>
          <div class="three-products-card-flag-text">
            <p>
              <?php echo $flag_text; ?>
            </p>
          </div>
        </div>
        <div class="three-products-card-image">
          <img src="<?php echo $main_image['url']; ?>" alt="Image of: <?php echo $main_image['title']; ?>">
        </div>
        <div class="three-products-card-description">
          <p>
            <?php echo $description; ?>
          </p>
        </div>
        <div class="three-products-card-buttons">
          <?php if ($feature_first_button): ?>
          <a href="<?php echo $feature_first_button['url']; ?>"
            <?php if ($feature_first_button['target']) echo "target = " . $feature_first_button['target']; ?>
            class="btn">
            <?php echo $feature_first_button['title']; ?>
            <span class="btn-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn-arrow.svg" alt="arrow" />
            </span>
          </a>
          <?php endif; ?>

          <?php if ($feature_second_button): ?>
          <a href="<?php echo $feature_second_button['url']; ?>"
            <?php if ($feature_second_button['target']) echo "target = " . $feature_second_button['target']; ?>
            class="btn-secondary">
            <?php echo $feature_second_button['title']; ?>
            <span class="btn-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn-arrow.svg" alt="arrow" />
            </span>
          </a>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section><!-- .three-products-wrapper-->

<?php endif; ?>