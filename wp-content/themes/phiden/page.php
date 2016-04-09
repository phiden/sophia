<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
					<h2><?php the_title(); ?></h2>
					
					<?php the_content(); ?>
				
				</article>
			
		<?php endwhile; ?>
		
		<?php else: ?>
		<h2>No posts to display</h2>
		<?php endif; ?>

	</div>
		

</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>