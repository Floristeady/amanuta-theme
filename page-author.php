<?php
/**
 * Template Name: Plantilla autor
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */

get_header(); ?>

<div id="content" class="site-content page-author page-similar">
	
	<?php
		while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="row">
			
				<?php					
					the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header><!-- .entry-header -->' );
				?>
				
				<div class="column medium-3 wrapper-thumb">
					<div class="thumbnail">
					<?php the_post_thumbnail(); ?>
					</div>
				</div>
			
				<div class="column medium-9 no-padding-left wrapper-content">
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

			
			</div><!--row-->
			
			<?php $images = get_field('author_carrusel');						
		    if( $images ): ?>
			<section id="app-carousel">
				
				<div class="row">
					
						<h2 class="entry-subtitle">Conoce sus Libros</h2>
						
						<div id="carousel-gallery" class="flexslider">
						    <ul class="slides">
						        <?php foreach( $images as $image ): ?>
						            <li>
						            	<?php if ($image['description']) { ?><a href="<?php echo $image['description']; ?>"><?php } ?>
							                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
							                <p><?php echo $image['title']; ?></p>
							            <?php if ($image['description']) { ?></a><?php } ?>
						            </li>
						        <?php endforeach; ?>
						    </ul>
						</div>
				</div>
				
			</section>
			<?php endif; ?>
			
						
		</article>

	<?php endwhile; ?>

</div><!-- #content -->

<?php get_footer(); ?>