<?php
/**
 * Template Name: Plantilla superior listado
 *
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */

get_header(); ?>

<div id="content" class="site-content center row">
	
	<?php
		while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
					
					the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
				?>
				
				<?php  if ( has_excerpt() ) : ?>
					<div class="entry-excerpt column medium-8 small-centered">
				 	 <?php the_excerpt(); ?>
					</div>
			 	<?php endif; ?>
			 
				
				<div class="entry-content">
					<?php
						the_content();
				
						edit_post_link( __( 'Edit', 'amanuta' ), '<span class="edit-link">', '</span>' );
					?>
				</div><!-- .entry-content -->
			</article>
			
			<?php $args = array(
	        'child_of' => $post->ID, 
	        'parent' => $post->ID,
	        'hierarchical' => 0,
	        'sort_column' => 'menu_order',
	        'sort_order' => 'ASC'
	        );
			          
			$mypages = get_pages( $args );?>
				
			<ul id="child-content" class="small-block-grid-1 medium-block-grid-2 medium-block-grid-4">
				<?php foreach( $mypages as $postpage ) {
					$content = apply_filters('the_content', $postpage->post_content);
					$childtitle = $postpage->post_title;
					$childid = $postpage->ID;
					$permalink = get_permalink( $childid );
					$thumbnail = get_the_post_thumbnail($childid,'featured-ad');
					$childslug = $postpage->post_name;  
				?>
	
				<li>
					<div class="inner">
						
						<a title="<?php echo $childtitle; ?>" href="<?php echo $permalink; ?>">						<?php if ( $thumbnail ) { ?>
							<?php echo $thumbnail; ?>
						<?php } else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder-box.jpg">
						<?php } ?>
						</a>
					
			 			<div class="text">
				 			<h3>
					 			<a href="<?php echo $permalink; ?>"><?php echo $childtitle; ?></a>
					 		</h3>	
					 		<a class="button mybutton-red" title="<?php _e('saber más', 'amanuta');?>" href="<?php echo $permalink; ?>" class="more-list"><?php _e('saber más', 'amanuta');?></a>
						</div>
		 			</div>
			 	</li>
			 				 	
			<?php  }  ?>
			
			</ul>



	<?php endwhile; ?>

</div><!-- #content -->

<?php get_footer(); ?>