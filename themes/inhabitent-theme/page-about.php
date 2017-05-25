 <?php
/**
 * The main About page
 * 
 * Template Name: About Page 
 *
 * @package RED_Starter_Theme 
*/ ?>

 

<?php get_header(); ?>
<!--<?php hero_banner_about(); ?>-->
<?php echo CFS()->get( 'hero_image' ); ?>
<div class="about-box">
<p><?php echo CFS()->get( 'our_story' ); ?></p>
<p><?php echo CFS()->get( 'our_team' ); ?></p>
</div>


<?php get_footer(); ?>