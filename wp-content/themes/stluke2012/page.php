<?php 
	get_header(); 
	$pagesWithoutAutoParagraph = array("Ambassadors", "Mass Cards");
	if ( in_array(get_the_title(), $pagesWithoutAutoParagraph) ){
		remove_filter('the_content','wpautop');
	}
?>
	
	<div id="content" class="<?php echo get_the_title(); ?>">
		<p style="display:none"><?php echo get_the_title(); ?></p>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">				
			<div id="dot_bar"></div>
			<div class="entry">
				<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		<?php endwhile; endif; ?>
		</div>
	</div>
	<hr />
	<div class="clearfooter"></div>	
<?php get_footer(); ?>
