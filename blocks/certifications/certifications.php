<?php 
/*
* Block Name: Certifications
* Post Type: page 
*/

$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$first_button = get_field('first_button');
$certifications_heading = get_field('certifications_heading');
$certification_subheading = get_field('certification_subheading');
$certifications_cards = get_field('certifications_cards');
$right_image = get_field('right_image');

if (isset($block['data']['preview_image_help'])) :
    echo '<img src="' . $block['data']['preview_image_help'] . '" style="width:100%; height:auto;">';
else: ?>

    <section class="certifications-wrapper">
        <div class="container">
            <div class="certifications-inner">
                <div class="certifications-left">
                    <div class="certifications-left-inner">
                        <div class="box first">
                            <?php if ($heading): ?>
                            <h2 class="certifications-heading">
                                <?php echo esc_html($heading); ?>
                            </h2>
                            <?php endif; ?>

                            <?php if ($sub_heading): ?>
                            <p class="certifications-subheading">
                                <?php echo esc_html($sub_heading); ?>
                            </p>
                            <?php endif; ?>

                            <?php if ($first_button): ?>
                            <div class="button-wrapper">
                                <a href="<?php echo esc_url($first_button['url']); ?>" <?php if ($first_button['target']) echo 'target="' . esc_attr($first_button['target']) . '"'; ?> class="btn">
                                    <?php echo esc_html($first_button['title']); ?>
                                    <span class="btn-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn-arrow.svg" alt="arrow" />
                                    </span>                         
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="box second">
                            <div class="certifications-text">
                                <?php if ($certifications_heading): ?> 
                                <h2 class="certifications-heading">
                                    <?php echo esc_html($certifications_heading); ?>
                                </h2>
                                <?php endif; ?>

                                <?php if ($certification_subheading): ?>
                                <p class="certifications-subheading">
                                    <?php echo esc_html($certification_subheading); ?>
                                </p>
                                <?php endif; ?>
                            </div>
                            <div class="certifications-list">
                                <?php foreach ($certifications_cards as $certification_card): ?>
                                    <div class="certifications-list-item" data-id="<?php echo esc_attr($certification_card['id']); ?>" data-description="<?php echo esc_attr($certification_card['description']); ?>">     
                                        <?php if ($certification_card['heading']): ?>                               
                                            <h3 class="certifications-list-item-heading">
                                                <?php echo esc_html($certification_card['heading']); ?>
                                            </h3>
                                        <?php endif; ?>

                                        <?php if ($certification_card['sub_heading']): ?>
                                            <p class="certifications-list-item-text">
                                                <?php echo esc_html($certification_card['sub_heading']); ?>
                                            </p>
                                        <?php endif; ?>
                                    </div>

                                    <!-- Modal for each certification -->
                                    <div id="certificationModal-<?php echo esc_attr($certification_card['id']); ?>" class="modal">
                                        <div class="modal-content">
                                            <span class="close-modal">&times;</span>
                                            <div class="modal-content-inner">
                                                <div class="left">
                                                    <div class="left-text">
                                                        <h2 class="modal-heading"><?php echo esc_html($certification_card['heading']); ?></h2>
                                                        <p class="modal-description"><?php echo esc_html($certification_card['description']); ?></p>
                                                    </div>
                                                    <div class="button-wrapper">
                                                        <a href="<?php echo esc_url($certification_card['button']['url']); ?>" <?php if ($certification_card['button']['target']) echo 'target="' . esc_attr($certification_card['button']['target']) . '"'; ?> class="btn">
                                                            <?php echo esc_html($certification_card['button']['title']); ?>
                                                            <span class="btn-image">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/btn-arrow.svg" alt="arrow" />
                                                            </span>                         
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="right">
                                                    <img src="<?php echo esc_url($certification_card['image']['url']); ?>" alt="Image of: <?php echo esc_attr($certification_card['image']['title']); ?>">
                                                </div>                                                                                      
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>                           
                        </div>
                    </div>
                </div>
                <div class="certifications-right">
                    <?php if ($right_image): ?>
                        <img src="<?php echo esc_url($right_image['url']); ?>" alt="Image of: <?php echo esc_attr($right_image['title']); ?>">
                    <?php endif; ?>
                </div>
            </div>
        </div>           
    </section><!-- .certifications-wrapper-->   

<?php endif; ?>
