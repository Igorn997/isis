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
              <a href="<?php echo esc_url($first_button['url']); ?>"
                <?php if ($first_button['target']) echo 'target="' . esc_attr($first_button['target']) . '"'; ?>
                class="btn">
                <?php echo esc_html($first_button['title']); ?>
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
              <div class="certifications-list-item" data-id="<?php echo esc_attr($certification_card['id']); ?>"
                data-description="<?php echo esc_attr($certification_card['description']); ?>">

                <div class='text'>
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

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M24 17.9474L23.9838 1.62287C23.9838 0.697916 23.3825 0.0488281 22.4076 0.0488281H6.06093C5.15097 0.0488281 4.53351 0.746597 4.53351 1.5255C4.53351 2.30441 5.23223 2.96972 5.99594 2.96972H11.6506L19.5802 2.71009L16.5579 5.35513L0.454976 21.4687C0.162492 21.7608 0 22.1341 0 22.4911C0 23.27 0.698713 24.0001 1.51117 24.0001C1.88491 24.0001 2.24239 23.8704 2.53486 23.562L18.6702 7.46466L21.3513 4.43018L21.0589 12.0083V18.0123C21.0589 18.775 21.7252 19.489 22.5213 19.489C23.3013 19.489 24 18.8238 24 17.9474Z"
                    fill="#A9D1D3" />
                </svg>

              </div>

              <!-- Modal for each certification -->
              <div id="certificationModal-<?php echo esc_attr($certification_card['id']); ?>" class="modal">
                <div class="modal-content">
                  <div class="overflow">
                    <div class="modal-content-inner">
                      <div class="left">
                        <div class="left-text">
                          <h2 class="modal-heading"><?php echo esc_html($certification_card['heading']); ?></h2>
                          <p class="modal-description"><?php echo esc_html($certification_card['description']); ?></p>
                        </div>
                        <div class="button-wrapper">
                          <div
                            <?php if ($certification_card['button']['target']) echo 'target="' . esc_attr($certification_card['button']['target']) . '"'; ?>
                            class="btn close-modal">
                            <span class="btn-image">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                  d="M-7.82371e-07 3.02728L0.00811188 11.1895C0.00811193 11.652 0.308725 11.9766 0.796183 11.9766L8.96954 11.9766C9.42451 11.9766 9.73324 11.6277 9.73324 11.2382C9.73324 10.8488 9.38389 10.5161 9.00203 10.5161L6.17468 10.5161L2.20988 10.6459L3.72106 9.32341L11.7725 1.26661C11.9188 1.12059 12 0.933928 12 0.755438C12 0.365985 11.6506 0.00090316 11.2444 0.000903196C11.0575 0.000903212 10.8788 0.0657779 10.7326 0.219966L2.66489 8.26865L1.32434 9.78589L1.47055 5.99683L1.47055 2.99481C1.47055 2.61346 1.13742 2.25648 0.73933 2.25648C0.349351 2.25648 -8.20679e-07 2.58909 -7.82371e-07 3.02728Z"
                                  fill="#1F1D1D" />
                              </svg>
                            </span>
                            <?php echo esc_html($certification_card['button']['title']); ?>

                          </div>
                        </div>
                      </div>
                      <div class="right">
                        <img src="<?php echo esc_url($certification_card['image']['url']); ?>"
                          alt="Image of: <?php echo esc_attr($certification_card['image']['title']); ?>">
                      </div>
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
        <img src="<?php echo esc_url($right_image['url']); ?>"
          alt="Image of: <?php echo esc_attr($right_image['title']); ?>">
        <?php endif; ?>
      </div>
    </div>
  </div>
</section><!-- .certifications-wrapper-->

<?php endif; ?>