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

<?php query_posts( "cat=5&order=ASC" ); ?>
<?php if ( have_posts() ): ?>

	<article id="user-info">
		<?php the_author_meta('user_description', 1); ?>
	</article>
	
<?php while ( have_posts() ) : the_post(); ?>

	
	
		<article>
			<h2 id="<?php echo get_post_meta(get_the_ID(), 'link', true) ?>"><a href="<?php echo get_post_meta( get_the_ID(), 'link', true ) ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php the_content(); ?>
		
		</article>
	
<?php endwhile; ?>


<?php else: ?>
<h2>No posts to display</h2>
<?php endif; ?>

</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>