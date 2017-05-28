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
	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_post_thumbnail('large') ?> 
				<a href="<?php the_permalink() ?>"><?php the_title() ?></a> 
				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>
			
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>