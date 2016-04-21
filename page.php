<?php
/**
 *
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */

get_header(); ?>

<div id="content" class="site-content row">
	
	<div class="column small-12 no-padding-left">
	
	<?php
		while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'amanuta' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
				
						edit_post_link( __( 'Edit', 'amanuta' ), '<span class="edit-link">', '</span>' );
					?>
				</div><!-- .entry-content -->
				</article>


	<?php endwhile; ?>
	
	</div>

</div><!-- #content -->

<?php get_footer(); ?>