<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */

get_header(); ?>

<div id="content" class="site-content" role="main">	
	
	<div class="row">
		<div class="column medium-9 small-centered">
		<?php
			
			while ( have_posts() ) : the_post();
	
				get_template_part( 'content');
	
				amanuta_post_nav();
	
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
		?>
		</div>
		
	</div>

</div><!-- #content -->

<?php get_footer(); ?>
