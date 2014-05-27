<?php
/*
Template Name: Homepage
*/
 
	get_header(); ?>
	
	<div id="content" class="<?php echo get_the_title(); ?>">
		<p style="display:none"><?php echo get_the_title(); ?></p>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">				
			<div class="entry">
				<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
				
				<!-- Column 1 -->
				
				<div id="one-thirdleft" class="column">
					<?php the_field("column1"); ?>				
				</div>
				
				
				<!-- Column 2 -->
				<div id="one-thirdcenter" class="column">
					<?php the_field("column2"); ?>
				</div>
				
				<!-- Column 3 (latest articles pulled in) -->
				<div id="one-thirdright" class="column">
					<h2>From the Blog</h2>
					<?php 
					// the query
					
					$args = array(
						'posts_per_page' => 3
					);
					
					$the_query = new WP_Query( $args ); ?>
					
					<?php if ( $the_query->have_posts() ) : ?>
					
					  <!-- pagination here -->
					
					  <!-- the loop -->
					  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					    <article>
					    	<p class="date-published"><?php the_time('F jS, Y') ?></p>
					        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</article>
					  <?php endwhile; ?>
					  <!-- end of the loop -->
					
					  <!-- pagination here -->
					
					  <?php wp_reset_postdata(); ?>
					
					<?php else:  ?>
					  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
				
					<p class="readmore"><a href="/blog">Read more</a></p>
				
				
					
				</div>
				
				
			</div>
		<?php endwhile; endif; ?>
		</div>
	</div>
	<hr />
	<div class="clearfooter"></div>	
<?php get_footer(); ?>
