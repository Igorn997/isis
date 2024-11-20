<?php 
/*
* Block Name: Product Slider
* Post Type: page 
*/

$product_slider_heading = get_field('product_slider_heading');
$product_slider_description = get_field('product_slider_description');
$product_slider_images = get_field('product_slider_images');
$product_slider_right_image = get_field('product_slider_right_image');

if( isset( $block['data']['preview_image_help'] )  ) :
    echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
else: ?>

<section class="product-slider-wrapper">
  <div class="container">
    <div class="product-slider">
      <div class="product-slider-left">
        <div class="product-slider-left-inner">
          <div class="product-slider-left-inner-box">
            <div class="product-slider-heading">
              <?php echo $product_slider_heading; ?>
            </div>
            <div class="product-slider-description">
              <?php echo $product_slider_description; ?>
            </div>
          </div>
          <div class="product-slider-left-inner-box">
            <div class="product-slider-images">
              <?php foreach ($product_slider_images as $image): 
                $slide_image = $image['image'];
                ?>
              <div class="product-slider-image">
                <img src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt']; ?>">
              </div>
              <?php endforeach; ?>
            </div>
            <div class="product-slider-arrows">
              <button type='button' class='slick-prev1 pull-left'><svg width="40" height="40" viewBox="0 0 40 40"
                  fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M14.8064 4.99209L1.35276 18.4725C0.589706 19.2356 0.550223 20.267 1.35449 21.0713L14.8398 34.5566C15.5905 35.3073 16.6755 35.2411 17.3181 34.5985C17.9606 33.9559 17.9331 32.8307 17.3031 32.2006L12.6382 27.5357L5.8824 21.2083L10.5578 21.5196L37.135 21.5108C37.6172 21.5112 38.0593 21.3372 38.3538 21.0427C38.9963 20.4002 39.0223 19.2214 38.352 18.5512C38.0437 18.2428 37.6418 18.055 37.1461 18.0681L10.5555 18.0368L5.84032 18.3283L12.3332 12.3179L17.2863 7.3648C17.9155 6.73561 17.9548 5.59698 17.298 4.94016C16.6546 4.29673 15.5294 4.26911 14.8064 4.99209Z"
                    fill="#DCDCDC" />
                </svg>
              </button>
              <button type='button' class='slick-next1 pull-right'><svg width="40" height="40" viewBox="0 0 40 40"
                  fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M24.7952 34.6056L38.2488 21.1251C39.0119 20.3621 39.0513 19.3306 38.2471 18.5264L24.7617 5.04102C24.0111 4.29035 22.926 4.3566 22.2835 4.99916C21.6409 5.64173 21.6685 6.767 22.2985 7.39703L26.9634 12.0619L33.7192 18.3893L29.0438 18.078L2.46653 18.0869C1.98433 18.0865 1.5423 18.2604 1.24781 18.5549C0.605244 19.1975 0.579298 20.3763 1.24954 21.0465C1.55786 21.3548 1.9598 21.5427 2.45548 21.5296L29.0461 21.5609L33.7612 21.2694L27.2684 27.2798L22.3153 32.2329C21.6861 32.8621 21.6467 34.0007 22.3036 34.6575C22.947 35.3009 24.0722 35.3285 24.7952 34.6056Z"
                    fill="#DCDCDC" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="product-slider-right">
        <div class="product-slider-right-inner">
          <img src="<?php echo $product_slider_right_image['url']; ?>"
            alt="<?php echo $product_slider_right_image['alt']; ?>">
        </div>
      </div>
    </div>
  </div>
</section><!-- .product-slider-wrapper-->

<?php endif; ?>