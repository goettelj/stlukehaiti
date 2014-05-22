<?php
/**
 * The template for displaying Category Archive pages
 *
 */
	get_header(); ?>
	
		<div id="content" role="main" class="blog-category">
			<div id="dot_bar"></div>
			
				
				<?php if (have_posts()) : ?>
					<h1><?php echo single_cat_title( '', false ); ?></h1>
					<div id="dashedLine"></div>
					
					<?php while (have_posts()) : the_post(); ?>
						
						
					<article class="group">
					    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					    <p class="byline"><?php the_time('F jS, Y') ?></p>
					    <p><?php echo excerpt(25); ?></p>
					    <p class="readmore"><a href="<?php the_permalink(); ?>">Read more</a></p>
					</article>
						
						
						
						
					<?php endwhile; ?>


				<?php else : ?>

					<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
					
					<?php get_search_form(); ?>

				<?php endif; ?>
		</div><!-- END OF #content -->
		
		<div id="sidebar" class="blog">
			<?php get_template_part('parts/sidebar-blog'); ?>
			<div class="categories">
				<h2>Categories</h2>
				<ul><?php wp_list_categories('title_li='); ?></ul>
			</div>
		</div>
		
		
	<?php get_footer(); ?>
	<script>
		var contentHeight = $('#seventywideleft').height();
		$('#tenwideright').height(contentHeight);
	</script>