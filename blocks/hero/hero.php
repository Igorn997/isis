<?php 
/*
* Block Name: Hero
* Post Type: page 
*/

$heading = get_field('heading');
$text_description = get_field('text_description');
$first_button = get_field('first_button');
$second_button = get_field('second_button');
$first_number = get_field('first_number');
$first_number_description = get_field('first_number_description');
$second_number = get_field('second_number');
$second_number_description = get_field('second_number_description');
$right_image = get_field('right_image');


if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

<section class="hero-wrapper">
  <div class="container">
    <div class="hero-inner">
      <div class="left">
        <div class="box">

          <?php if ($heading): ?>
          <h1 class="box-title">
            <?php echo $heading; ?>
          </h1>
          <?php endif; ?>

          <?php if ($text_description): ?>
          <div class="box-text">
            <?php echo $text_description; ?>
          </div>
          <?php endif; ?>

          <?php if ($first_button): ?>
          <div class="button-wrapper">
            <a href="<?php echo $first_button['url']; ?>"
              <?php if ($first_button['target']) echo "target = " . $first_button['target']; ?> class="btn">
              <?php echo $first_button['title']; ?>
              <span class="btn-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn-arrow.svg" alt="arrow"
                  class="arrow1" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="arrow"
                  class="arrow2" />
              </span>
            </a>
            <?php endif; ?>

            <?php if ($second_button): ?>
            <a href="<?php echo $second_button['url']; ?>"
              <?php if ($second_button['target']) echo "target = " . $second_button['target']; ?> class="btn-secondary">
              <?php echo $second_button['title']; ?>
              <span class="btn-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn-arrow.svg" alt="arrow"
                  class="arrow1" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow-right.svg" alt="arrow"
                  class="arrow2" />
              </span>
            </a>
          </div>
          <?php endif; ?>

        </div>
        <div class="box-1">

          <?php if ($first_number): ?>
          <div class="box-1-number-wrapper">
            <div class="box-1-number">
              <?php echo $first_number; ?>+
            </div>
            <?php endif; ?>

            <?php if ($first_number_description): ?>
            <div class="box-1-text">
              <?php echo $first_number_description; ?>
            </div>
          </div>
          <?php endif; ?>

          <?php if ($second_number): ?>
          <div class="box-2-number-wrapper">
            <div class="box-2-number">
              <?php echo $second_number; ?>
            </div>
            <?php endif; ?>

            <?php if ($second_number_description): ?>
            <div class="box-1-text">
              <?php echo $second_number_description; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="right">

        <?php if ($right_image) : ?>
        <?php 
                $image_id = $right_image['ID']; // Uzmi ID iz Image Array-a
                $alt_text = !empty($right_image['alt']) ? $right_image['alt'] : get_post_meta($image_id, '_wp_attachment_image_alt', true);
            ?>
        <?php echo wp_get_attachment_image($image_id, 'full', false, array('alt' => $alt_text)); ?>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
<!-- .hero-wrapper-->

<?php endif; ?>