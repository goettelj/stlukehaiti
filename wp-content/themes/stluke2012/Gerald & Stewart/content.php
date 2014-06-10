<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WP Arabica
 * @subpackage Template
 */
 
global $ct_options; 

$post_lead = get_post_meta($post->ID, "_ct_post_lead", true);
$post_social = get_post_meta($post->ID, "_ct_post_social", true);

$attachments = get_children(
	array(
		'post_type' => 'attachment',
		'post_mime_type' => 'image',
		'post_parent' => $post->ID
	)
);

if(is_single()) { ?>

	<div class="col <?php if($ct_options['ct_layout'] == 'left-sidebar') { echo 'span_12'; } else { echo 'span_11'; } ?> first">

		<?php if($post_social == 'Yes') {
			get_template_part('includes/post-social');
		}	
		
		if($post_lead == 'Yes' && has_post_thumbnail() && get_post_meta($post->ID, "_ct_video", true) == '' || count($attachments) > 1) {
			echo '<div class="post-thumb col span_11 marB40">';
			
			if(count($attachments) > 1) {
				echo '<div class="flexslider">';
				echo	'<ul class="slides">';
							ct_slider_images();
				echo	'</ul>';
				echo '</div>';
			} elseif(has_post_thumbnail()) {
				echo '<figure>';
				the_post_thumbnail(620,200);  
				echo '</figure>';
			}
			echo '</div>';		
		}
		
		echo '<div class="content col span_10 first">';

			the_content();
		
		echo '</div>';

} else { ?>
        
        <?php
			if($ct_options['ct_blog_style'] == 'Left Thumb') { ?>
            
                <article <?php if($ct_options['ct_layout'] == 'left-sidebar') { post_class('col span_12'); } else { post_class('col span_11 first'); } ?>>
                    
                    <?php get_template_part('includes/blog/left-thumb'); ?>
                    
                </article>
			
			<?php } elseif($ct_options['ct_blog_style'] == 'Large Thumb') { ?>
            
                <article <?php if($ct_options['ct_layout'] == 'left-sidebar') { post_class('col span_12'); } else { post_class('col span_11 first'); } ?>>
			
					<?php get_template_part('includes/blog/large-thumb'); ?>
				
				</article>
			
			<?php } elseif($ct_options['ct_blog_style'] == 'Hybrid') { ?>
			
				<?php get_template_part('includes/blog/hybrid'); ?>
			
			<?php } ?>

<?php } ?>

<?php //wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'contempo' ) . '</span>', 'after' => '</div>' ) ); ?>    