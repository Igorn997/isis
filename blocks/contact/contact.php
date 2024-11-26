<?php 
/*
* Block Name: Contact
* Post Type: page 
*/

$heading = get_field('heading');
$description = get_field('description');
$email_photo = get_field('email_photo');
$email_text = get_field('email_text');
$phone_image = get_field('phone_image');
$phone_text = get_field('phone_text');
$socials = get_field('socials');


if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

    <section class="contact-wrapper">
        <div class="container">
            <div class="contact-wrapper-inner">
                    <div class="contact-left-cards">
                        <div class="contact-left-card">
                            <?php if ( $heading ) : ?>
                                <div class="contact-heading">
                                    <?php echo $heading; ?>
                                </div>
                            <?php endif; ?>

                            <?php if ( $description ) : ?>
                                <div class="contact-description">
                                    <?php echo $description; ?>
                                </div>
                            <?php endif; ?>   
                        </div>        
                        <div class="contact-left-card">
                            <div class="contact-info">
                                <div class="contact-info-email">
                                    <?php if ( $email_photo ) : ?>
                                        <?php 
                                            $image_id = $email_photo['ID']; // Uzmi ID iz Image Array-a
                                            $alt_text = !empty($email_photo['alt']) ? $email_photo['alt'] : get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                        ?>
                                        <?php echo wp_get_attachment_image($image_id, 'full', false, array('alt' => $alt_text)); ?>
                                    <?php endif; ?>

                                    <?php if ( $email_text ) : ?>
                                        <div class="contact-text">
                                            <?php echo $email_text; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="contact-info-phone">
                                    <?php if ($phone_image) : ?>
                                        <?php 
                                            $image_id = $phone_image['ID']; 
                                            $alt_text = !empty($phone_image['alt']) ? $phone_image['alt'] : get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                        ?>
                                        <?php echo wp_get_attachment_image($image_id, 'full', false, array('alt' => $alt_text)); ?>
                                    <?php endif; ?>

                                    <?php if ($phone_text) : ?>
                                        <div class="contact-text">
                                            <?php echo $phone_text; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>   
                            </div>                         
                        </div>      
                         <div class="contact-left-card-last">
                            <?php if ( $socials ) : ?> 
                                <div class="contact-socials">
                                    <div class="contact-socials-cards">
                                        <div class="contact-socials-card">
                                        <?php foreach ($socials as $social) : ?>
                                            <a href="<?php echo $social['url']; ?>" target="_blank" rel="noopener noreferrer">
                                                <img src="<?php echo $social['social_logo']['url']; ?>" alt="<?php echo $social['social_logo']['alt']; ?>">
                                            </a>
                                        <?php endforeach; ?>
                                        </div>
                                    </div>                                   
                                </div>
                            <?php endif; ?>
                        </div> 
                     </div> 
                        
                        <div class="contact-right">
                            <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1 ) ); ?>
                        </div>
            </div>
        </div>
    </section><!-- .contact-wrapper-->
    
<?php endif; ?>