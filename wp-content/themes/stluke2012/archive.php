<?php get_header(); ?> 

	<div id="content" role="main">
		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="pagetitle">All <?php single_cat_title(); ?></h1>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h1>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h1>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="pagetitle">Author Archive</h1>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1 class="pagetitle">Blog Archives</h1>
 	  <?php } ?>


		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Posts in Category', $in_same_cat = true) ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Posts in Category &raquo;', $in_same_cat = true) ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class('postbox') ?>>
				<?php if ( is_category('testimonials') == FALSE ) {
					echo '<h1 id="post-';
					echo the_ID();
					echo '"><a href="';
					echo the_permalink();
					echo '" rel="bookmark" title="Permanent Link to ';
					echo the_title_attribute();
					echo '">';
					echo the_title();
					echo '</a></h1>';
					} ?>				
				<p class="postmetadata"><?php the_time('l, F jS, Y') ?></p>

				<div class="entry">
					<div class="alignimgleft"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div>
					<?php the_content() ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?>
				<?php if ( in_category( 'uncategorized') == false && is_category() == false) {
					echo "Posted in ";
					the_category('. ');
					echo ".  ";} ?> 
				<?php if ( in_category( 'news' )) {
					echo comments_popup_link('No Comments', '1 Comment', '% Comments');} ?>
				</p>
		</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Posts in Category', $in_same_cat = true) ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Posts in Category &raquo;', $in_same_cat = true) ?></div>
		</div>
		
		<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h1 class='center'>Sorry, but there aren't any posts in the %s category yet.</h1>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h1 class='center'>Sorry, but there aren't any posts with this date.</h1>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h1 class='center'>Sorry, but there aren't any posts by %s yet.</h1>", $userdata->display_name);
		} else {
			echo("<h1 class='center'>No posts found.</h1>");
		}

		endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
