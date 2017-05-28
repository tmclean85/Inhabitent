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
  <div class="journal-wrapper-main">
    <h1>SHOP STUFF</h1>
	</div>
				<?php 
					$categories = array(
						'taxonomy' 		=> 'product-type', 
						'hide_empty' 	=> true,
						);
					$terms = get_terms( $categories );
				?>
	<section class="product-types">

				<?php foreach ( $terms as $term ) :  ?>
  
    <div class="product-type-box">
      <ul class="shop-categories">				
				<li class="shop-category-box"> 						
					<img src="<?php echo get_template_directory_uri(). "/images/product-type-icons/" .$term->slug. ".svg" ?> " alt="product-type">
					<p><?php echo $term->description?></p>
					<a href="<?php echo get_term_link( $term ); ?>"> 						
						<button class="button-shop">
							<?php echo $term->name . ' Stuff'?>
						</button>
					</a>
				</li>
     </div><!--.product-type-box-->			
				<?php endforeach; ?>
			</ul>
		</section> <!--.product-types -->


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
		<?php $products = new WP_Query( $postArgs ); ?>
<?php if ( $posts->have_posts() ) : ?>
   <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>	
	 <div class="single-home-post"> 
	   <ul class="home-posts">
		   <li><?php the_post_thumbnail( 'medium' ); ?></a></li>
			 <div class="home-post-footer">
			   <li class="date-item"><?php the_time('F jS, Y'); ?> / <?php comments_number( '0 Comments', '1 0 Comment', '% 0 Comments' ); ?></li>
		     <li class="journal-post-title"><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a></li>
		     <li><button><a href="<?php the_permalink(); ?>">READ ENTRY</a></button></li>
			 </div>	 
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
<div class="journal-wrapper-main">
  <h1>LATEST ADVENTURES</h1>
</div>	
<section class="adventure-wrapper">
  <div class="adventure-box-large">
		<div class="adventure-sub-box">
			<h1>Getting Back to Nature in a Canoe</h1>
			<button class="adventure-button">READ MORE</button>
		</div>
	</div>
  <div class="adventure-box-long">
		<div class="adventure-sub-box">
			<h1>A Night with Friends at the Beach</h1>
			<button class="adventure-button">READ MORE</button>
		</div>		
	</div>
	<div class="test">
	<div class="adventure-box-small" id="first-box">
		<div class="adventure-sub-box">
			<h1>Taking in the View at Big Mountain</h1>
			<button class="adventure-button">READ MORE</button>
		</div>				
	</div>
	<div class="adventure-box-small" id="second-box">
		<div class="adventure-sub-box">
			<h1>Star Gazing at the Night Sky</h1>
			<button class="adventure-button">READ MORE</button>
		</div>			
	</div>
	</div>	
			<button class="adventures-button">MORE ADVENTURES</button>	

</div>
	

</section>	

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>