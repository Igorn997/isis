<?php 
/*
* Block Name: Satisfied Customers
* Post Type: page 
*/

$heading = get_field('heading');
$description = get_field('description');
$cards = get_field('cards');
$review1 = get_field('review1');
$review2 = get_field('review2');
$review3 = get_field('review3');
$review4 = get_field('review4');
$review5 = get_field('review5');
$description_of_reviews = get_field('description_of_reviews');

if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

<section class="satisfied-customers-wrapper">
  <div class="container">
    <div class="satisfied-customers-inner">
      <div class="satisfied-customers-title">
        <?php if( $heading): ?>
        <h2>
          <?php echo $heading; ?>
          <div class='line'></div>
        </h2>
        <?php endif; ?>

        <?php if( $description ): ?>
        <?php echo $description; ?>
        <?php endif; ?>
      </div>

      <div class="satisfied-customers-cards">
        <?php foreach( $cards as $card ): ?>
        <div class="satisfied-customers-card">
          <div class="satisfied-customers-card-inner">
            <div class="satisfied-customers-card-image">
              <img src="<?php echo $card['image']['url']; ?>" alt="<?php echo $card['image']['alt']; ?>">
            </div>
            <div class="satisfied-customers-card-text">
              <?php echo $card['heading']; ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <div class="satisfied-customers-last-card">
          <div class="satisfied-customers-last-card-inner">
            <div class="satisfied-customers-last-card-span">
              <?php if( $review1 ): ?>
              <div class="review">
                <p><?php echo $review1 ?></p>
              </div>
              <?php endif; ?>

              <?php if( $review2 ): ?>
              <div class="review rev2">
                <p><?php echo $review2 ?></p>
              </div>
              <?php endif; ?>

              <?php if( $review3 ): ?>
              <div class="review rev3">
                <p><?php echo $review3 ?></p>
              </div>
              <?php endif; ?>

              <?php if( $review4 ): ?>
              <div class="review rev4">
                <p><?php echo $review4 ?></p>
              </div>
              <?php endif; ?>

              <?php if( $review5 ): ?>
              <div class="review rev5">
                <p><?php echo $review5 ?></p>
              </div>
              <?php endif; ?>
            </div>
            <div class="des-review">
              <?php if( $description_of_reviews ): ?>
              <?php echo $description_of_reviews ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section><!-- .satisfied-customers-wrapper-->

<?php endif; ?>