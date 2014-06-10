<?php
/**
 * Single Template
 *
 * @package WP Arabica
 * @subpackage Template
 */
 
global $ct_options;

get_header();

$post_featured_type = get_post_meta($post->ID, "_ct_post_featured_type", true);
$post_title = get_post_meta($post->ID, "_ct_post_title", true);
$post_meta = get_post_meta($post->ID, "_ct_post_meta", true);

$cat = get_the_category();
$cat = $cat[0];

$attachments = get_children(
	array(
		'post_type' => 'attachment',
		'post_mime_type' => 'image',
		'post_parent' => $post->ID
	)
);

 ?>

<?php if($post_title == 'Yes') { ?>
    <div id="single-header">
        <h2 class="the-title"><?php the_title(); ?></h2>          
		<?php if($post_meta == 'Yes') {
            get_template_part('includes/post-meta');
        } ?>
            <div class="clear"></div>
    </div>
<?php } ?>

<?php if(get_post_meta($post->ID, "_ct_video", true)) {
	echo '<div class="video col span_12 marB40">';
		echo stripslashes(get_post_meta($post->ID, "_ct_video", true));
	echo '</div>';
} ?>

<?php echo '<div class="marT60">';

		if($ct_options['ct_layout'] == 'left-sidebar') {
			get_sidebar();
		} ?>

        <article class="col span_9 <?php if($ct_options['ct_layout'] == 'right-sidebar') { echo 'first'; } ?>">
        
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
            
				get_template_part( 'content', get_post_format() );
            
            endwhile; endif;
            
                echo '<div class="clear"></div>';

                wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'contempo' ) . '</span>', 'after' => '</div>' ) );

				echo '<div id="post-tools" class="';
					if($post_featured_type == "Standard") { echo 'standard'; }
				echo '">';
				
					get_template_part('includes/post-author-info');
				
					ct_related_posts();

					ct_post_nav();

					if($ct_options['ct_post_comments'] == "Yes" && comments_open()) {
						comments_template( '', true );
					}
				
				echo '</div>';

        echo '</article>';
        
		if($ct_options['ct_layout'] == 'right-sidebar') {
			get_sidebar();
		}
		
		echo '<div class="clear"></div>';

echo '</div>';

get_footer(); ?>