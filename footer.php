<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Starter
 */

?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="widget-wrapper">
    <div class="container">
      <div class="footer-widgets-wrapper">
        <?php get_template_part('template-parts/footer', 'widgets'); ?>
        <?php
			
							if( function_exists('get_field') ):
								$footer_copyright_text = get_field('footer_copyright_text','option');
							else:
								$footer_copyright_text = '';
							endif;
			
							if( $footer_copyright_text ): ?>
        <div class="site-info">

          <div class="footer-copyright col-md-12 align-center"><?php echo $footer_copyright_text; ?></div>

        </div><!-- .site-info -->
        <?php endif; ?>
      </div>
    </div>
  </div>

</footer><!-- #colophon -->
</div><!-- #page -->
<!-- W3TC-include-css -->
<?php wp_footer(); ?>
<!-- W3TC-include-js-head -->
</body>

</html>