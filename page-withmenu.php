<?php
/**
 * Template Name: Plantilla con menú lateral
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */

get_header(); ?>

<div id="content" class="site-content page-withmenu row">
	
	<?php
		while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="column medium-9 wrapper-content">
					<?php
						
						the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
					?>
					
					<?php  if ( has_excerpt() ) : ?>
						<div class="entry-excerpt">
					 	 <?php the_excerpt(); ?>
						</div>
				 	<?php endif; ?>
				 
					
					<div class="entry-content">
						<?php
							the_content();
					
							edit_post_link( __( 'Edit', 'amanuta' ), '<span class="edit-link">', '</span>' );
						?>
					</div><!-- .entry-content -->
					
				</div>
				
				<div class="column medium-3 wrapper-sidebar">
					<?php get_sidebar('menu'); ?>
				</div>
				
			</article>


	<?php endwhile; ?>

</div><!-- #content -->

<?php get_footer(); ?>