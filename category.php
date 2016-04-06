<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */

get_header(); ?>

<div id="content" class="site-content">

	<?php if ( have_posts() ) : ?>
	<div class="row">

	<header class="archive-header">
		<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'amanuta' ), single_cat_title( '', false ) ); ?></h1>

		<?php
			// Show an optional term description.
			$term_description = term_description();
			if ( ! empty( $term_description ) ) :
				printf( '<div class="taxonomy-description">%s</div>', $term_description );
			endif;
		?>
	</header>

	<div class="column medium-9">

		<ul id="news-items" class="small-block-grid-1 medium-block-grid-2">
					
			<?php while ( have_posts() ) : the_post();  
				get_template_part( 'content' ); 
			endwhile;  ?>
			
		</ul>
		<?php amanuta_paging_nav(); ?>

	</div>
	
	<div class="column medium-3">
		<?php get_sidebar(); ?>
	</div>
	
	<?php endif; ?>
	
</div><!-- #content -->

<?php get_footer(); ?>