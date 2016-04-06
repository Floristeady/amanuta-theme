<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
		<h1 class="archive-title">
			<?php
				if ( is_day() ) :
					printf( __( 'Daily Archives: %s', 'amanuta' ), get_the_date() );

				elseif ( is_month() ) :
					printf( __( 'Monthly Archives: %s', 'amanuta' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'amanuta' ) ) );

				elseif ( is_year() ) :
					printf( __( 'Yearly Archives: %s', 'amanuta' ), get_the_date( _x( 'Y', 'yearly archives date format', 'amanuta' ) ) );
					
				elseif ( is_tag() ) :
						printf( __( 'Tag Archives: %s', 'amanuta' ), single_tag_title( '', false ) ); 
				else :
					_e( 'Archives', 'amanuta' );

				endif;
			?>
		</h1>
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

</div>

<?php get_footer(); ?>