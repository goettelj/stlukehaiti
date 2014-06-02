<?php
/*
Template Name: Blog Archive
*/

 get_header(); ?>

	<div id="content" role="main" class="blog-category">
				<div id="dot_bar"></div>
				
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<h1>Blog Archive</h1>
						<div id="dashedLine"></div>
						
						<?php 
						// the query
						
						$args = array(
							'posts_per_page' => 10,
							'paged' => $paged,
							'order' => 'DESC'
						);
						
						$wp_query = new WP_Query($args); ?>
						
						<?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>
						
						
					
						    <article class="group">
						        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						        <p class="byline"><?php the_time('F jS, Y') ?></p>
						        <p><?php echo excerpt(25); ?></p>
						        <p class="readmore"><a href="<?php the_permalink(); ?>">Read more</a></p>
						    </article>
						  <?php endwhile; ?>     
						 	 <?php else : // do not delete ?>
						 	     <p>No presentations to display</p>
						 	 <?php endif; // do not delete ?>
						 
						 
						 
						 
						 
						 
						 
						 <?php the_pagination(); ?>
						
						 <?php wp_reset_query(); ?>
							
							
				<?php endwhile; endif; ?>
						
						
						
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
