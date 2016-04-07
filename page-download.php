<?php
/**
 * Template Name: Plantilla descargas
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */

get_header(); ?>

<div id="content" class="site-content page-author">
	
	<?php
		while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="row">
			
				<?php					
					the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
				?>
			
				<div class="column medium-9 no-padding-left">
					<?php  if ( has_excerpt() ) : ?>
						<div class="entry-excerpt">
					 	 <?php the_excerpt(); ?>
						</div>
				 	<?php endif; ?>
				 
					
					<div class="entry-content">
						<?php
							the_content(); ?>					
							
					</div><!-- .entry-content -->
				</div>
				
				<?php // section
					$rows = get_field('downloads_section');  ?>
					<?php if($rows) { ?>
				<div class="column medium-12">

					<?php foreach($rows as $row) { ?>
					<div class="downloads">	
						
						 <?php if ($row['downloads_title']) { ?>
						 <h2><?php echo $row['downloads_title'] ?></h2>
						 <?php } ?>
						 
						<?php  $images = ($row['downloads_images']);						
						if( $images ): ?>
					    <ul class="downloads-images">
					        <?php foreach( $images as $image ): ?>
					            <li>
					            	<a target="_blank" href="<?php echo $image['url']; ?>" download>
					                <img src="<?php echo $image['sizes']['thumbnail-downloads']; ?>" alt="<?php echo $image['alt']; ?>" />
					                </a>
					            </li>
					        <?php endforeach; ?>
					    </ul>
					    
					    <?php endif; ?>
							
					</div>		
					<?php } ?>
					
				</div>
				<?php } ?>
			
			</div><!--row-->
									
		</article>

	<?php endwhile; ?>

</div><!-- #content -->

<?php get_footer(); ?>