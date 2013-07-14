<?php /*Template Name: Custom Front Page*/ ?><?php get_header(); ?>

<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="post" id="post-<?php the_ID(); ?>">	

		<div class="entry">

			<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

		</div>

	<?php endwhile; endif; ?>

	</div>

	<div id="news_box">

		<?php $temp_query = $wp_query; ?>

		<?php query_posts('cat=3,4&showposts=3&order=DESC'); ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

				<?php if(get_post_meta($post->ID, 'month_of_event', true) || get_post_meta($post->ID, 'day_of_event', true)): ?>

					<div class="calthumb">

						<div class="event_month"><?php echo get_post_meta($post->ID, 'month_of_event', true); ?></div>

						<div class="event_day"><?php echo get_post_meta($post->ID, 'day_of_event', true); ?></div>

					</div>

					<div class="shiftright">

						<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>

						<?php echo custom_trim_excerpt(20); ?>

					</div>

				<?php else: ?>

					<h3 style="font-size:13px;font-weight:normal;"><a style="color:#F47529;" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

					<?php echo custom_trim_excerpt(30); ?>

				<?php endif; ?>

			</div>

		<?php endwhile; ?>

	</div>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

