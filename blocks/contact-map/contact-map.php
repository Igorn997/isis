<?php 
/*
* Block Name: Contact Map
* Post Type: page 
*/

$heading = get_field('heading');
$description = get_field('description');
$button = get_field('link');

if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

<section class="contact-map-wrapper">
  <div class="container">
    <div class="contact-map-inner">
      <div class="contact-map-left">
        <div class="contact-map-left-inner">
          <?php if ($heading): ?>
          <div class="contact-map-heading">
            <?php echo $heading; ?>
          </div>
          <?php endif; ?>

          <?php if ($description): ?>
          <div class="contact-map-description">
            <?php echo $description; ?>
          </div>
          <?php endif; ?>

          <?php if ($button): ?>
          <a href="<?php echo $button['url']; ?>" <?php if ($button['target']) echo "target = " . $button['target']; ?>
            class="btn">
            <?php echo $button['title']; ?>
            <span class="btn-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn-arrow.svg" alt="arrow" />
            </span>
          </a>
          <?php endif; ?>
        </div>
      </div>
      <div class="contact-map-right">
        <div class="contact-map-right-inner">
          [wpgmza id="1"]

        </div>
      </div>
    </div>
</section><!-- .contact-map-wrapper-->

<?php endif; ?>