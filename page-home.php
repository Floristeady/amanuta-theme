<?php
/**
 * Template Name: Plantilla inicio
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */

get_header(); ?>

<div id="content" class="site-content">
	
	<?php
		while ( have_posts() ) : the_post(); ?>
		
		<?php // Gallery home
			$rows = get_field('gallery_home');  ?>
			<?php if($rows) { ?>
			<div id="home-gallery" class="flexslider">
					<ul class="slides">
						<?php foreach($rows as $row) { ?>
						<li>
							<?php if ($row['gallery_text_up'] or $row['gallery_text_down']) { ?>
							<div class="row">
								<div class="text">
									<div class="inner <?php if ($row['gallery_select'] == 'derecha') { echo 'right'; } else if ($row['gallery_select'] == 'izquierda') { echo 'left'; } else if ($row['gallery_select'] == 'centro') { echo 'center'; } ?>">
										<h2><?php echo $row['gallery_text_up'] ?></h2>
										<h1><?php echo $row['gallery_text_down'] ?></h1>
										<?php if ($row['gallery_link']) { ?>
										<a title="" class="button mybutton-red" href="<?php echo $row['gallery_link'] ?>"><?php echo $row['gallery_button'] ?></a>
										<?php } ?>
									</div>
								</div>
							</div>
							<?php } ?>	
							 <?php if ($row['gallery_image']) { ?>
							    <?php if ($row['gallery_link']) { ?>
							 		<a class="img" href="<?php echo $row['gallery_link'] ?>">
							 		<?php $attachment_id = $row['gallery_image'];
								 	echo wp_get_attachment_image( $attachment_id, 'homeslide'); ?>
							 		</a>
							 	<?php } else { ?>
								 	<span class="img">
								 	<?php $attachment_id = $row['gallery_image'];
									 echo wp_get_attachment_image( $attachment_id, 'homeslide'); ?>
								 	</span>
							 	<?php } ?>	
							 <?php } ?>		
						</li>				
						<?php } ?>
					</ul>
			</div>
			<?php } ?>
	<?php
	endwhile;
	?>
	
	<?php 
	    $args = array(
		'post_type'	=> 'post',
		'post_status' => 'publish',
		'posts_per_page' => 2,
		'orderby' => 'date',
		'order' => 'DESC',
		'offset' => 0
		 );
		 $last_post = new WP_Query( $args );
	?>

	<?php if ( $last_post ->have_posts() ) : ?>

	<div id="featured-news">
		<div class="row">
			<div class="title">
				<h3>Noticias y últimas novedades</h3>
				<a class="more" title="leer todas noticias" href="#">Leer Todas </a>
			</div>
				
			<ul id="news-items" class="small-block-grid-1 medium-block-grid-2">
				
			<?php while ( $last_post ->have_posts() ) : $last_post ->the_post(); 
				
				get_template_part( 'content');
				
			 endwhile; wp_reset_postdata(); ?>
			 <?php wp_reset_query(); ?>
			</ul>

		</div>
	</div>
	<? endif; ?>


</div><!-- #content -->

<?php get_footer(); ?>