<?php get_header(); ?>

	<div id="content" role="main">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class('postbox') ?>>
				<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p class="postmetadata"><?php the_time('l, F jS, Y') ?></p>

				<div class="entry">
					<div class="alignimgleft"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>
					<?php the_excerpt() ?>
				</div>
				
				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> 
				<?php if ( in_category( 'uncategorized') == false) {
					echo "Posted in ";
					the_category('. ');
					echo ".  ";} ?>
				<?php if ( in_category( 'news' )) {
					echo comments_popup_link('No Comments', '1 Comment', '% Comments');} ?>
				</p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
