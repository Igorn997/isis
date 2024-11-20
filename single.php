<?php
/**
 * The template for displaying all single posts.
 *
 * @package Starter
 */

get_header(); ?>

<div class="container">
  <div class="row">
    <div id="primary" class="content-area col-md-8 col-sm-12">
      <main id="main" class="site-main" role="main">

        <?php
        while ( have_posts() ) :
          the_post();
        ?>

        <!-- Prikaz featured slike -->
        <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumbnail">
          <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?>
        </div>
        <?php endif; ?>

        <!-- Prikaz naslova posta -->
        <header class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>

        <!-- Prikaz formata datuma -->
        <div class="post-meta">
          <p><?php echo get_the_date( 'd.m.Y' ); ?></p>
        </div>

        <!-- Glavni sadržaj posta -->


        <?php endwhile; // End of the loop. ?>

        <!-- Prikaz poslednjih postova -->
        <div class="recent-posts">
          <h3>Poslednji postovi</h3>
          <div class="recent-posts-cards">
            <?php
            // WP_Query za poslednja tri posta
            $recent_posts_query = new WP_Query( array(
              'posts_per_page' => 3,
              'post__not_in'   => array( get_the_ID() ), // Izuzimanje trenutnog posta
            ) );

            if ( $recent_posts_query->have_posts() ) :
              while ( $recent_posts_query->have_posts() ) :
                $recent_posts_query->the_post();
            ?>
            <div class="recent-post-card">
              <!-- Prikaz featured slike u poslednjim postovima -->
              <?php if ( has_post_thumbnail() ) : ?>
              <div class="recent-post-thumbnail">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail( 'medium', array( 'class' => 'img-fluid' ) ); ?>
                </a>
              </div>
              <?php endif; ?>

              <a href="<?php the_permalink(); ?>">
                <h4><?php the_title(); ?></h4>
                <p><?php echo get_the_date( 'd.m.Y' ); ?></p>
              </a>
            </div>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
          </div>
        </div>

      </main><!-- #main -->
    </div><!-- #primary -->

    <!-- .row -->
  </div><!-- .container -->

  <?php get_footer(); ?>