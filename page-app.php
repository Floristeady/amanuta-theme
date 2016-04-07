<?php
/**
 * Template Name: Plantilla app
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */

get_header(); ?>

<div id="content" class="site-content page-app">
	
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
						
						<?php if (get_field('app_botton_link')) { ?>	
							<a target="_blank" href="<?php the_field('app_botton_link');?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/dowloadapp.png"></a>
						<?php } ?>
					
							
					</div><!-- .entry-content -->
				</div>
				
				<div class="column medium-3">
					<div class="thumbnail <?php if ( has_excerpt() ) : echo 'with-excerpt';  endif;?>	">
						
				
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
			
			</div><!--row-->
			
			
			<section id="app-about" class="section-app">
				
				<div class="row border">
					
					<?php 
						$images = get_field('app_gallery');						
						if( $images ): ?>
					<div class="column medium-8">

						<div id="app-gallery" class="flexslider">
						    <ul class="slides">
						        <?php foreach( $images as $image ): ?>
						            <li>
						                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
						            </li>
						        <?php endforeach; ?>
						    </ul>
						</div>
					</div>
					<?php endif; ?>
					
					<?php if (get_field('app_about')) { ?>
					<div class="column medium-4">
						<div class="entry-content-app entry-about">
							<?php the_field('app_about');?>
							
						</div>
					</div>
					<?php } ?>
				
				</div>
			</section>
			
			<?php $images = get_field('app_carrusel');						
		    if( $images ): ?>
			<section id="app-carousel">
				
				<div class="row">
						
						<div id="carousel-gallery" class="flexslider">
						    <ul class="slides">
						        <?php foreach( $images as $image ): ?>
						            <li>
							             <a href="<?php echo $image['url']; ?>">
							                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
							             </a>
						            </li>
						        <?php endforeach; ?>
						    </ul>
						</div>
				</div>
				
			</section>
			<?php endif; ?>
			
			<section id="app-featured" class="section-app">
				
				<div class="row ">
					<?php if (get_field('app_featured_left')) { ?>
					<div class="column medium-6">
						<div class="entry-content-app">
							<?php the_field('app_featured_left');?>
							
						</div>
					</div>
					<?php } ?>
						
					<?php if (get_field('app_featured_right')) { ?>
					<div class="column medium-6">
						<div class="entry-content-app">
							<?php the_field('app_featured_right');?>
							
						</div>
					</div>
					<?php } ?>

				</div>
				
			</section>
			
			<section id="app-credits" class="section-app">
				
				<div class="row border">
					<?php if (get_field('app_credit_left')) { ?>
					<div class="column medium-6">
						<div class="entry-content-app">
							<?php the_field('app_credit_left');?>
							
						</div>
					</div>
					<?php } ?>
						
					<?php if (get_field('app_credit_right')) { ?>
					<div class="column medium-6">
						<div class="entry-content-app">
							<?php the_field('app_credit_right');?>
							
						</div>
					</div>
					<?php } ?>

							
					</div>
				</div>

				
			</section>
			
		</article>


	<?php endwhile; ?>

</div><!-- #content -->

<?php get_footer(); ?>