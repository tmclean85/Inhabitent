                      <?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
			</header><!-- .page-header -->
			<?php /* Start the Loop */ ?>
			<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		<div class="taxonomy-product-wrapper">
	
    	<?php while ( have_posts() ) : the_post(); ?>
		  <div class="archive-product-minibox">

      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium') ?></a> 
			<div class="archive-product-footer">
			<span><?php the_title() ?></span><span class="dots"></span><span>$<?php echo CFS()->get( 'price' ); ?></span> 
			</div><!--archive product footer-->
			    </div> <!--archive product minibpx-->

			<?php endwhile; ?>
			
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</div>	<!--taxonomy-product-wrapper-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>