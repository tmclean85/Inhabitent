 <?php
/**
 * The main About page
 * 
 * Template Name: About Page 
 *
 * @package RED_Starter_Theme 
*/ ?>

 

<?php get_header(); ?>
<div class="about-hero-wrapper">
<?php hero_banner_about() ?>
<h1 class="about-hero-text">ABOUT</h1>
</div>
<!--<?php echo CFS()->get( 'hero_image' ); ?>-->
<div class="about-box">
<p><?php echo CFS()->get( 'our_story' ); ?></p>
<p><?php echo CFS()->get( 'our_team' ); ?></p>
</div>


<?php get_footer(); ?>