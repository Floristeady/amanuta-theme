<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage amanuta
 * @since amanuta 1.0
 */

get_header(); ?>


<div id="content" class="site-content">

	<article style="margin:30px 0 120px;" id="post-0" class="post error404 not-found" role="main">
		<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'amanuta' ); ?></h1>
		<p><?php _e( 'It appears the page you are looking for does not exist. Perhaps searching, or one of the links below, can help.', 'amanuta' ); ?></p>

	</article>
	
</div>

	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
