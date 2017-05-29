<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main index-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		
     <div class="blog-post-main">
       <?php the_post_thumbnail('large'); ?>
			<div class="blog-post-title">
			  <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
			</div>		
			<div class="blog-post-footer">
			  <p><?php the_date();?> / <?php comments_number( '0 COMMENTS', '1 COMMENT', '% COMMENTS' ); ?> / BY <?php the_author(); ?></p>
      </div>	
     </div><!--blog-post-main-->
		 <div class="single-blog-content-box">
			<p><?php the_content(); ?></p> 
		 </div>		
		 <div class="blog-category-info-box">			 
		   <p>POSTED IN →<span class="blog-meta-colour"><?php the_category(); ?></span></p>
		   <p>TAGGED →<?php the_tags(); ?></p> 			 
		 </div>	 	
		  <div class="main-journal-button-wrapper">
			  <button class="post-social-media"><i class="fa fa-facebook" aria-hidden="true"></i>LIKE</button>
			  <button class="post-social-media"><i class="fa fa-twitter" aria-hidden="true"></i>TWEET</button>
			  <button class="post-social-media"><i class="fa fa-pinterest" aria-hidden="true"></i>PIN</button>
		  </div>	
 
		 

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
			 </div>
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
