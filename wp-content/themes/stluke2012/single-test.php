<?php get_header(); ?>

	<div id="content" class="blog-post">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link', 'Previous in category', TRUE) ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;', 'Next in category', TRUE) ?></div>
		</div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1 class="pagetitle"><?php the_title(); ?></h1>
			
			<p class="byline"><?php if(get_field('author')){ ?>by <?php the_field('author'); ?> / <?php } ?><?php the_time('F jS, Y') ?></p>
			<p class="categories">Published in: <?php the_category(', ') ?></p>
			
			<div class="entry">
				<?php if( method_exists( $GoogleTranslation, 'google_ajax_translate_button' ) ) {
    				$GoogleTranslation -> google_ajax_translate_button();
				} ?>
								
				
				<!-- NOTE: this pulls in the custom fields for "main content area" -->
				
				<?php get_template_part( 'parts/detail-page-options'); ?>
				
				<!-- END custom fields -->
				
				

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

				<!--<p class="postmetadata alt">
						This entry was posted
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/wordpress/time-since/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						on <?php the_time('l, F jS, Y') ?> and is filed under <?php the_category(', ') ?>.
						You can follow any responses to this entry through the <?php post_comments_feed_link('RSS 2.0'); ?> feed.

						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.

						<?php } ?>
				</p>-->
			
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			
			</div>
			<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-537e5b4a7a0bdcbb"></script>
			<!-- AddThis Button END -->
			
			
			
			
			</div>
		</div>

	
	<?php 
	if ( in_category( 'news' )) {
		echo comments_template(); 
		} ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>
	<div id="sidebar" class="blog">
		<?php get_template_part('parts/sidebar-blog'); ?>
		<div class="categories">
			<h2>Categories</h2>
			<ul><?php wp_list_categories('title_li='); ?></ul>
		</div>
	</div>
<?php get_footer(); ?>
