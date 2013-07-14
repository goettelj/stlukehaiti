<?php
/*
Template Name: Stories
*/
	get_header(); ?>
	
		<div id="content" role="main">
			<div id="dot_bar"></div>
			<div id="thirtywideright">
			    <a href="http://www.amazon.com/Haiti-Tough-Places-Lord-Burnt/dp/1412814200" target="_blank">
					<img class="sideimg" src="/images/stories/book_cover.jpg" alt="Haiti: The God of Tough Places, the Lord of Burnt Men" />
				</a>
				<div class="caption">Haiti: The God of Tough Places, the Lord of Burnt Men</div>
			    <!--
				<img class="sideimg" src="/images/stories/sean_penn.jpg" alt="Sean Penn Congratulates Fr. Rick" />
				<div class="caption">Sean Penn Congratulations Fr. Rick - June 23 2012</div>
				-->
			    
			    <a href="http://stlukehaiti.org/donate/"><img class="sideimg padtwenty objectcenter" src="/images/donate_sidebar.png" alt="" /></a>
			</div>
			<div id="tenwideright"></div>
			<div id="seventywideleft">
				<h1><img id="storiesTitle" src="/images/stories/stories_needing_reading.png" alt="Stories Needing Reading"></h1>
				<div id="dashedLine"></div>
				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>
						
						<?php $count++; ?> 
						<?php if ($count != 1) : ?>
							<div class="dashed-line story-separator"></div>
						<?php endif; ?>
						
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<?php 
								if ( has_post_thumbnail() ){
									the_post_thumbnail();
								}
							?>
							<div class="post-title-container">
								<h2><?php the_title(); ?></h2>
								<p class="postmetadata">
									<label class="post-meta-label">Posted:</label><?php the_time('F jS, Y') ?> <br/>
								</p>
							</div>

							<div class="entry">
								<?php the_content('Read the rest of this entry &raquo;'); ?>
							</div>
						</div>

					<?php endwhile; ?>

					<div class="navigation">
						<div class="alignleft"><?php next_posts_link('&laquo; Older Stories') ?></div>
						<div class="alignright"><?php previous_posts_link('Newer Stories &raquo;') ?></div>
					</div>

				<?php else : ?>

					<h1 class="center">Not Found</h1>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					<?php get_search_form(); ?>

				<?php endif; ?>
			</div><!-- END OF #seventywideleft -->
		</div><!-- END OF #content -->

	<?php get_footer(); ?>
	<script>
		var contentHeight = $('#seventywideleft').height();
		$('#tenwideright').height(contentHeight);
	</script>