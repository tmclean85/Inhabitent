<?php get_header(); ?>
<?php hero_banner(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

<!--<?php
		$args = array(
   'order' => 'ASC',
   'posts_per_page' => 3,
   'post_type' => 'product',
   'tax_query' => array(
      array(
         'taxonomy' => 'product-type',
         'field'    => 'slug',
         'terms'    => array('eat', 'sleep', 'do', 'wear'),
      ),
   ),
);

$products = new WP_Query( $args ); ?>
		
		<?php $products = new WP_Query( $args ); /* $args set above*/ ?>
<?php if ( $products->have_posts() ) : ?>
   <?php while ( $products->have_posts() ) : $products->the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
   <?php endwhile; ?>
   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>-->




<?php
		$postArgs = array(
   'order' => 'ASC',
   'posts_per_page' => 3,
   'post_type' => 'post',
   'tax_query' => array(
      array(
         'taxonomy' => 'category',
         'field'    => 'slug',
         'terms'    => array('recipes', 'contests', 'how-tos'),
      ),
   ),
);
$posts = new WP_Query( $postArgs ); ?>

	<div class="home-posts-wrapper">	
		<?php $products = new WP_Query( $postArgs ); /* $args set above*/ ?>
<?php if ( $posts->have_posts() ) : ?>
   <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
	 
	 <ul class="home-posts">
			<li><a href="<php? the_permalink ?>"><?php the_post_thumbnail( 'medium' ); ?></a></li>
			<li><?php the_time('F jS, Y'); ?></li>
		  </li><h2><?php the_title(); ?></h2></li>
			<li><button>Read Entry</button></li>
   </ul>  
	 
   <?php endwhile; ?>
   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
</div> 
		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>