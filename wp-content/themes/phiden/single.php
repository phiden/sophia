<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class='homepage'>

	<div id="page-left">
	
		<?php get_sidebar(); ?>
		
	</div>

	<div id="page-right">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<article>
	
		<h2><?php the_title(); ?></h2>
		<p class='article-data'> <?php echo get_the_date(); ?></p>
				<?php the_content(); ?>			
	
	</article>
	<?php endwhile; ?>
	
	</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>