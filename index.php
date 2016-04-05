<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */

get_header(); ?>


<div id="content" class="site-content" role="main">
	
	<div class="row">
		
		<div class="column medium-9">
		<?php
			
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();
		
					get_template_part( 'content', get_post_format() );
		
				endwhile;
				amanuta_paging_nav();
		
			else :
				get_template_part( 'content', 'none' );
		
			endif;
		?>
		</div>
		
		<div class="column medium-3">
			<?php get_sidebar(); ?>
		</div>
	
	</div>

</div>




<?php get_footer(); ?>