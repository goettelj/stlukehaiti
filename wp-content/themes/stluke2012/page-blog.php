<?php
/*
Template Name: Blog Homepage
*/
	get_header(); ?>
	
		<div id="content" role="main" class="blog-home">
			<div id="dot_bar"></div>
			
				<h1><?php the_title(); ?></h1>
				
				
				<div id="dashedLine"></div>
				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>
						
						
						<?php $posts = get_field('big_featured_story');
						 
						if( $posts ): ?>
						   
						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>
						        <article class="featured-post primary group">
						            <?php the_post_thumbnail('full'); ?>
						            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						            <p class="byline"><?php the_time('F jS, Y') ?></p>
						            <p><?php echo excerpt(25); ?></p>
						            <p class="readmore"><a href="<?php the_permalink(); ?>">Read more</a></p>
						        </article>
						    <?php endforeach; ?>
						    
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>
						
						
						<?php $posts = get_field('small_featured_stories');
						 
						if( $posts ): ?>
						   <div class="group">
						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>
						        <article class="featured-post secondary">
						            <?php the_post_thumbnail('full'); ?>
						            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						            <p class="byline"><?php the_time('F jS, Y') ?></p>
						            <p><?php echo excerpt(15); ?></p>
						            <p class="readmore"><a href="<?php the_permalink(); ?>">Read more</a></p>
						        </article>
						    <?php endforeach; ?>
						    </div>
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>
						
					
						<?php $posts = get_field('listed_stories');
						 
						if( $posts ): ?>
						   
						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post); ?>
						        <article class="group">
						            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						            <p class="byline"><?php the_time('F jS, Y') ?></p>
						            <p><?php echo excerpt(25); ?></p>
						            <p class="readmore"><a href="<?php the_permalink(); ?>">Read more</a></p>
						        </article>
						    <?php endforeach; ?>
						    
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>
						
						
						
						
						
					<?php endwhile; ?>

					<p class="readmore"><a href="/blog-archive">Read more stories</p></div>

				<?php else : ?>

					<h1 class="center">Not Found</h1>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					<?php get_search_form(); ?>

				<?php endif; ?>
		</div><!-- END OF #content -->
		
		<div id="sidebar" class="blog">
			<?php get_template_part('parts/sidebar-blog'); ?>
		</div>
		
		
	<?php get_footer(); ?>
	<script>
		var contentHeight = $('#seventywideleft').height();
		$('#tenwideright').height(contentHeight);
	</script>