<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
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

<?php if ( have_posts() ): ?>

	<!--<article id="user-info">
		<a id="user-info-dismiss"><img src="wp-content/themes/starkers-master/css/ui/close-icon-black.png"/></a>
		<div><?php the_author_meta('user_description', 1); ?></div>
	</article>-->
	
	<div id="page-left">
	
		<?php get_sidebar(); ?>
		
	</div>
	
	<div id="page-right">
	
		<?php while ( have_posts() ) : the_post(); ?>
					
				<article>
					<h2 id="<?php echo get_post_meta(get_the_ID(), 'link', true) ?>"><a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<p class='article-data'> <?php echo get_the_date(); ?></p>
					
					<?php the_content(); ?>
				
				</article>
			
		<?php endwhile; ?>
		
		<?php else: ?>
		<h2>No posts to display</h2>
		<?php endif; ?>

	</div>
		

</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>