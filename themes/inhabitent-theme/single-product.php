<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
	<section class="main-journal-wrapper">
    <div class="main-journal-image-box">
      <?php the_post_thumbnail('large'); ?>
		</div>
		<div class="main-journal-content-box">	
			<h1><?php the_title(); ?></h1>
      <h2>$<?php echo CFS()->get( 'price' ); ?></h2>
			<p><?php the_content(); ?></p>
		  <div class="main-journal-button-wrapper">
			  <button class="post-social-media"><i class="fa fa-facebook" aria-hidden="true"></i>LIKE</button>
			  <button class="post-social-media"><i class="fa fa-twitter" aria-hidden="true"></i>TWEET</button>
			  <button class="post-social-media"><i class="fa fa-pinterest" aria-hidden="true"></i>PIN</button>
		  </div>				
    </div>

  </section>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>