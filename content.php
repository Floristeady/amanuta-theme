<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */
?>

<?php if ( is_single() ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php amanuta_post_thumbnail(); ?>


	<header class="entry-header">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && amanuta_categorized_blog() ) : ?>
		<div class="entry-meta">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'amanuta' ) ); ?></span>
		</div>
		<?php
			endif;

			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
		?>

		<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() )
					amanuta_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>
			
				   <?php if ( 'post' == get_post_type() ) : ?>
					<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'amanuta' ), __( '1 Comment', 'amanuta' ), __( '% Comments', 'amanuta' ) ); ?></span>
					<?php endif; ?>
			<?php
		    endif;

				edit_post_link( __( 'Edit', 'amanuta' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'amanuta' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'amanuta' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>

	</div><!-- .entry-content -->
	<?php endif; ?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->

<?php else : ?>

<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="inner">
		<a class="post-thumbnail" href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('thumbnail-news');  ?>
		</a>
		
		<header class="entry-header">
			<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && amanuta_categorized_blog() ) : ?>
			<div class="entry-meta">
				<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'amanuta' ) ); ?></span>
			</div>
			<?php
				endif;
	
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
	
			<div class="entry-meta">
				<?php
					if ( 'post' == get_post_type() )
						amanuta_posted_on();
	
					edit_post_link( __( 'Edit', 'amanuta' ), '<span class="edit-link">', '</span>' );
				?>
			</div><!-- .entry-meta -->
		</header>
		
		<div class="entry-content">
			
			<?php $content = $post->post_content; ?>
			<p><?php echo wp_trim_words( $content, 60 ); ?></p> 
	
		</div><!-- .entry-content -->
	
		
		<a class="button mybutton-red" href="<?php the_permalink(); ?>"><?php _e('Leer más...', 'spincommerce')?></a>
		
	</div>

</li>

<?php endif; ?>
