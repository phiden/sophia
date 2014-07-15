<?php
/**
 * The template for displaying Design work pages.
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
 *
 * Template Name: Designer
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="homepage" id="designer-page">

	<div id="designer-intro">
	I've been working as a UI/UX designer in some capacity since 2007.
	
		<!--<ul id="designer-nav">
		
			<li><a href=#>2007</a></li>
			<li><a href=#>2008</a></li>
			<li><a href=#>2009</a></li>
			<li><a href=#>2010</a></li>
			<li><a href=#>2011</a></li>
			<li><a href=#>2012</a></li>
			<li><a href=#>2013</a></li>
			
		</ul> -->
		<br>Filter by year: <?php echo do_shortcode( '[searchandfilter taxonomies="post_tag" submit_label="Filter" hide_empty="1" all_items_labels="All work"] ' ); ?>
		
	</div>
	
	
<article>

	<?php query_posts( "cat=12" ); ?>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
		<?php 
		
			$img = get_post_meta( get_the_ID(), 'fullsize', true); 
			$link = get_post_meta( get_the_ID(), 'link', true); 
		
		?>
		
	<div class="work-card">		
		
			<h2><?php the_title(); ?></h2><p class="light">Posted: <?php the_date(); ?></p>
			<img src=<?php print $img; ?>/>
			<div class='the-content'><?php the_content(); ?></div>
	
	</div>
		
	<?php endwhile; ?>
</article>

</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>