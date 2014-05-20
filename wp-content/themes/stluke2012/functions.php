<?php
//For thumbnails. Code in archive.php, search.php, and single.php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 225, 1000 ); // 225 pixels wide by 1000 pixels tall, box resize mode
add_image_size( 'single-post-thumbnail', 360, 1000 ); // Permalink thumbnail size


//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);

?>