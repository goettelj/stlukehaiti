<?php
/**
 * Archive Template
 *
 * @package WP Arabica
 * @subpackage Template
 */
 
global $ct_options;

get_header(); ?>

	<div id="archive-header">
		<div class="container">
		<?php if(is_home()) { ?>
			<h1 class="marT0 marB5"><?php _e('Home', 'contempo'); ?></h1>
		<?php } else { ?>
			<h1 class="marT0 marB5"><?php _e('Archives', 'contempo'); ?></h1>
			<?php ct_breadcrumbs(); ?>
		<?php } ?>
				<div class="clear"></div>
		</div>
	</div>

<?php echo '<div class="container archive marT60">';

		if($ct_options['ct_layout'] == 'left-sidebar') {
			get_sidebar();
		} ?>

		<div class="col span_9 <?php if($ct_options['ct_layout'] == 'right-sidebar') { echo 'first'; } ?>">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>
			
		<?php endwhile; ?>
		
			<?php ct_pagination(); ?>
		
		<?php else : ?>
		
			<?php get_template_part( 'content', 'none' ); ?>
		
		<?php endif; ?>

		</div>
		
		<?php if($ct_options['ct_layout'] == 'right-sidebar') {
			get_sidebar();
		}
		
		echo '<div class="clear"></div>';
        
echo '</div>';

get_footer(); ?>