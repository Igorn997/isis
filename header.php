<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
  <?php include_once(get_template_directory(). '/includes/fonts.php'); ?>
  <meta name="theme-color" content="#010101">
</head>

<body <?php body_class(); ?>>
  <div id="page" class="hfeed site">
    <header id="masthead" class="site-header" role="banner">
      <div class="container logo-menu-wrapper">
        <div class="site-header-inner">

          <?php if( function_exists('get_field') ): ?>

          <?php $logo = get_field('logo','option'); ?>

          <?php if( $logo ): ?>

          <div class="site-branding-main-logo site-branding">
            <div class="site-title">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php echo( esc_url( $logo ) ); ?>"
                  alt="<?php echo( esc_attr( get_bloginfo( 'title' ) ) ); ?>" />
              </a>
            </div>
          </div><!-- .site-branding -->

          <?php endif; ?>

          <?php endif; ?>

          <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php

						wp_nav_menu(
							array(
								'theme_location' 		=> 	'primary',
								'menu_id' 				=> 	'primary-menu',
								'menu_class' 			=> 	'main-header-menu',
								'container_class'		=>	'main-menu-container'
							)
						);

						?>
            <?php $menu_button = get_field('menu_button','option');
	
					if( $menu_button ): ?>

            <div class="menu-button-wrapper mobile">
              <a class="menu-button btn-secondary" href="<?php echo esc_url( $menu_button['url'] ); ?>"
                <?php if ($menu_button['target']) echo "target = " . $menu_button['target']; ?>>
                <?php echo esc_html( $menu_button['title'] ); ?>
              </a>
            </div>

            <?php endif; ?>

            <?php echo the_social_links(); ?>
          </nav><!-- #site-navigation -->



          <?php $menu_button = get_field('menu_button','option');
	
					if( $menu_button ): ?>

          <div class="menu-button-wrapper">
            <div class="language-switcher">
              <!-- Prikaz inicijalnog jezika -->
              <a href="#" class="current-language" data-lang="SRB">SRB</a>
              <!-- Podmeni sa jezicima -->
              <div class="language-menu hidden">
                <a href="#sr" class="language-option" data-lang="SRB" data-full="Srpski"><svg width="42" height="35"
                    viewBox="0 0 42 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_dd_2145_543)">
                      <g clip-path="url(#clip0_2145_543)">
                        <rect x="7" y="3" width="28" height="20" rx="3" fill="#1A47B8" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7 16.3333H35V23H7V16.3333Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M7 3H35V9.66667H7V3ZM17.6667 16.3333V9.66667H12.3333V16.3333C12.3333 17.8067 13.5267 19 15 19C16.4733 19 17.6667 17.8067 17.6667 16.3333Z"
                          fill="#F93939" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.6667 11L12.3334 12.3333L15 13.6667L13.6667 16.3333L15 19L16.3334 16.3333L15 13.6667L17.6667 12.3333L16.3334 11L15 12.3333L13.6667 11Z"
                          fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15 13.6667L12.3334 15H17.6667L15 13.6667Z"
                          fill="#88605F" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.6667 11H12.3334V12.3333L13.6667 11ZM16.3334 11H17.6667V12.3333L16.3334 11Z"
                          fill="#FFDA2C" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.6667 9.66665L12.3334 8.33332C12.3334 8.33332 13.6667 6.99999 15 6.99999C16.3334 6.99999 17.6667 8.33332 17.6667 8.33332L16.3334 9.66665H13.6667Z"
                          fill="#FFDA2C" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M15 6.99999L13.6668 8.33332L15.0001 9.66665L16.3335 8.33332L15 6.99999Z" fill="#A75835" />
                      </g>
                    </g>
                    <defs>
                      <filter id="filter0_dd_2145_543" x="0.142857" y="0.714285" width="41.7143" height="33.7143"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                          result="hardAlpha" />
                        <feOffset dy="4.57143" />
                        <feGaussianBlur stdDeviation="3.42857" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                          values="0 0 0 0 0.258824 0 0 0 0 0.278431 0 0 0 0 0.298039 0 0 0 0.08 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2145_543" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                          result="hardAlpha" />
                        <feOffset />
                        <feGaussianBlur stdDeviation="0.285714" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                          values="0 0 0 0 0.258824 0 0 0 0 0.278431 0 0 0 0 0.298039 0 0 0 0.32 0" />
                        <feBlend mode="normal" in2="effect1_dropShadow_2145_543" result="effect2_dropShadow_2145_543" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_2145_543" result="shape" />
                      </filter>
                      <clipPath id="clip0_2145_543">
                        <rect x="7" y="3" width="28" height="20" rx="3" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                  Srpski</a>
                <a href="#en" class="language-option" data-lang="ENG" data-full="Engleski"><svg width="42" height="35"
                    viewBox="0 0 42 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_dd_2145_563)">
                      <g clip-path="url(#clip0_2145_563)">
                        <rect x="7" y="3" width="28" height="20" rx="3" fill="#1A47B8" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M9.97863 3H7V6.33333L32.0052 23L35 23V19.6667L9.97863 3Z" fill="white" />
                        <path d="M7.99346 3L35 21.0472V23L34.0298 23L7 4.93408V3H7.99346Z" fill="#F93939" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M32.3333 3H35V6.33333C35 6.33333 17.6797 17.4374 9.66667 23H7V19.6667L32.3333 3Z"
                          fill="white" />
                        <path d="M35 3H34.0957L7 21.0628V23H7.99346L35 4.94868V3Z" fill="#F93939" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M17.1828 3H24.8405V9.16909H35V16.8268H24.8405V23H17.1828V16.8268H7V9.16909H17.1828V3Z"
                          fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M18.7895 3H23.2105V10.6923H35V15.3077H23.2105V23H18.7895V15.3077H7V10.6923H18.7895V3Z"
                          fill="#F93939" />
                      </g>
                    </g>
                    <defs>
                      <filter id="filter0_dd_2145_563" x="0.142857" y="0.714285" width="41.7143" height="33.7143"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                          result="hardAlpha" />
                        <feOffset dy="4.57143" />
                        <feGaussianBlur stdDeviation="3.42857" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                          values="0 0 0 0 0.258824 0 0 0 0 0.278431 0 0 0 0 0.298039 0 0 0 0.08 0" />
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2145_563" />
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                          result="hardAlpha" />
                        <feOffset />
                        <feGaussianBlur stdDeviation="0.285714" />
                        <feComposite in2="hardAlpha" operator="out" />
                        <feColorMatrix type="matrix"
                          values="0 0 0 0 0.258824 0 0 0 0 0.278431 0 0 0 0 0.298039 0 0 0 0.32 0" />
                        <feBlend mode="normal" in2="effect1_dropShadow_2145_563" result="effect2_dropShadow_2145_563" />
                        <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_2145_563" result="shape" />
                      </filter>
                      <clipPath id="clip0_2145_563">
                        <rect x="7" y="3" width="28" height="20" rx="3" fill="white" />
                      </clipPath>
                    </defs>
                  </svg>
                  Engleski</a>
              </div>
            </div>

            <a class="menu-button btn-secondary" href="<?php echo esc_url( $menu_button['url'] ); ?>"
              <?php if ($menu_button['target']) echo "target = " . $menu_button['target']; ?>>
              <?php echo esc_html( $menu_button['title'] ); ?>
            </a>
          </div>

          <?php endif; ?>

          <div class="menu-toggle-wrapper">
            <a href='#' class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </div> <!-- /.row justify-content-between -->
      </div> <!-- /.container logo-menu-wrapper -->
    </header><!-- #masthead /.site-header -->

    <div id="content" class="site-content">