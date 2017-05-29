<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
	  <main id="main" class="site-main index-main" role="main">
			
		<?php if ( have_posts() ) : ?>
		<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

      
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

		<div class="blog-post-main">
			<?php the_post_thumbnail('large') ?>
			<div class="blog-post-title">
			  <h1><?php the_title(); ?></h1>
			</div>
			<div class="blog-post-footer">
			  <p><?php the_date();?> / <?php comments_number( '0 COMMENTS', '1 COMMENT', '% COMMENTS' ); ?> / BY <?php the_author(); ?></p>
      </div>
			</div>
			<div class="blog-excerpt-box">
				<p><?php the_excerpt(); ?></p>
			</div>
			<div class="button-wrapper">	
			<?php echo '<button class="blog-story-button"><a href="'.get_permalink().'">READ MORE →</a></button>' ?>
      </div>
			  <?php endwhile; ?>

			  <?php the_posts_navigation(); ?>
		    <?php else : ?>

			  <?php get_template_part( 'template-parts/content', 'none' ); ?>
     
		    <?php endif; ?>



		</main><!-- #main -->
			  	<?php get_sidebar(); ?>
	</div><!-- #primary -->


<?php get_footer(); ?>
