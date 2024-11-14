<?php 
/*
* Block Name: Contact Home
* Post Type: page 
*/

$heading = get_field('heading');
$description = get_field('description');
$button = get_field('button');

if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

    <section class="contact-home-wrapper">
        <div class="container">
            <div class="contact-home-inner">
                <div class="contact-home-left">
                    <div class="contact-home-left-inner">
                        <?php if ($heading): ?>
                        <div class="contact-home-heading">
                            <?php echo $heading; ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($description): ?>
                            <p class="contact-home-description">
                                <?php echo $description; ?>
                            </p>
                        <?php endif; ?>

                        <?php if ($button): ?>
                            <a href="<?php echo $button['url']; ?>" <?php if ($button['target']) echo "target = " . $button['target']; ?> class="btn">
                                <?php echo $button['title']; ?> 
                                <span class="btn-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn-arrow.svg" alt="arrow" />
                                </span> 
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="contact-home-right">
                    <div class="contact-home-right-inner">
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2 ) ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- .contact-home-wrapper-->
    
<?php endif; ?>