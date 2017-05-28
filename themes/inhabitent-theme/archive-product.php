<?php
/**
 * The template for displaying single product archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
    <?php
    function product_archive_title($shop_title) {
      if(is_post_type_archive('product')) {
        $shop_title = 'Shop Stuff';
    }
    return $shop_title;
    }
    add_filter('get_the_archive_title', 'product_archive_title');
    the_archive_title( '<h1 class="page-title">', '</h1>' );
    the_archive_description( '<div class="taxonomy-description">', '</div>' );
    ?>
			<nav class="product-type">
				<ul class="product-type-nav">
					<?php $categories = array(
						'taxonomy' => 'product-type', 
						'hide_empty' => true,
						);
					$terms = get_terms( $categories );
					?>					
					<?php foreach ( $terms as $term ) :  ?>
						<li class="indvid-product-type"> 
							<a href="<?php echo get_term_link( $term ); ?>"> 
								<?php echo $term->name ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</nav>
		</header><!-- .shop-header -->
	</header><!-- .page-header -->
  <div class="product-archive-main-wrapper">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>				
				<!--get_template_part( 'template-parts/content' );-->
		<div class="archive-product-minibox">		
		  <?php the_post_thumbnail('medium'); ?>	
			<div class="archive-product-footer">			
			  <span><?php the_title(); ?></span><span class="dots"></span><span>$<?php echo CFS()->get( 'price' ); ?></span>
		  </div><!--archive-product-footer -->
    </div> <!-- archive product minibox -->
			<?php endwhile; ?>
			<?php the_posts_navigation(); ?>
		  <?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		  <?php endif; ?>
	</div><!-- product archive main wrapper -->	
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>