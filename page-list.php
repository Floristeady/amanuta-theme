<?php
/**
 * Template Name: Plantilla listado imagen/video
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
					$rows = get_field('extra_content');  ?>
					<?php if($rows) { ?>

					<?php foreach($rows as $row) { ?>
					
					<div class="content-extra">	
						
						<?php if ($row['extra_select'] == 'imagen') { ?>
							<?php if ($row['extra_image']) {
							$image = $row['extra_image'];  ?>
							<div class="column medium-3">						
	
								 <div class="entry-content">
									<?php if ($image['description']) { ?><a href="<?php echo $image['description']; ?>"><?php } ?>
								 		<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['title']; ?>">
								 	<?php if ($image['description']) { ?></a><?php } ?>
								     </a>
								 </div>
															 							
							</div>
							<?php } ?>
						<?php } ?>
						
						<?php if ($row['extra_select'] == 'video') { ?>
							<?php if ($row['extra_video']) { ?>
							<div class="column medium-5">						
	
								 <div class="entry-content">
								 	<?php echo $row['extra_video'] ?>
								 </div>
															 							
							</div>
							<?php } ?>
						<?php } ?>
						
						<?php if ($row['extra_text']) { ?>
						<div class="column <?php if ($row['extra_select'] == 'texto') { echo 'medium-12'; } else if ($row['extra_select'] == 'imagen') { echo 'medium-9'; } else if ($row['extra_select'] == 'video') { echo 'medium-7'; } ?> ">						

							 <div class="entry-content">
							 	<?php echo $row['extra_text'] ?>
							 </div>
														 							
						</div>
						<?php } ?>
						 		
					</div>
					
					
					<?php } ?>
					
				</div>
				<?php } ?>
			
			</div><!--row-->
									
		</article>

	<?php endwhile; ?>

</div><!-- #content -->

<?php get_footer(); ?>