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
	
<!-- store categories -->
<div class="product-info-wrapper">
<div class="product-type-box">
	<img src="/wordpress/wp-content/themes/inhabitent-theme/images/do.svg" alt="small-map-picture">
	<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors</p>
	<button><a href="http://localhost:3000/wordpress/product-type/do/">DO STUFF</a></button>
</div>	
<div class="product-type-box">
	<img src="/wordpress/wp-content/themes/inhabitent-theme/images/eat.svg" alt="small-coffee-mug-picture">
	<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
	<button><a href="http://localhost:3000/wordpress/product-type/eat/">EAT STUFF</a></button>
</div>
<div class="product-type-box">
	<img src="/wordpress/wp-content/themes/inhabitent-theme/images/sleep.svg" alt="small-sleeping-bag-picture">
	<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
	<button><a href="http://localhost:3000/wordpress/product-type/sleep/">SLEEP STUFF</a></button>
</div>	
<div class="product-type-box">
	<img src="/wordpress/wp-content/themes/inhabitent-theme/images/wear.svg" alt="small-toque-picture">
	<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
	<button><a href="http://localhost:3000/wordpress/product-type/wear/">WEAR STUFF</a></button>
</div>
</div>	



<!-- get posts -->
<?php
		$postArgs = array(
   'order' => 'DES',
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
<div class="journal-wrapper-main">
	<h1>INHABITENT JOURNAL</h1>
	<div class="home-posts-wrapper">	
		<?php $products = new WP_Query( $postArgs ); /* $args set above*/ ?>
<?php if ( $posts->have_posts() ) : ?>
   <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>	
	 <div class="single-home-post"> 
	 <ul class="home-posts">
			<li><?php the_post_thumbnail( 'medium' ); ?></a></li>
			<li><?php the_time('F jS, Y'); ?></li>
		  </li><h2><?php the_title(); ?></h2></li>
			<li><button>READ ENTRY</button></li>
   </ul>  	
	 </div> 
   <?php endwhile; ?>
   <?php the_posts_navigation(); ?>
   <?php wp_reset_postdata(); ?>
<?php else : ?>
      <h2>Nothing found!</h2>
<?php endif; ?>
</div> 
</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>