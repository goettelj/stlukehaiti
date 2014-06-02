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


//function to create on the fly excerpt lengths

function excerpt($limit) {
	    return wp_trim_words(get_the_excerpt(), $limit);
	}

//function to create pagination

if ( ! function_exists( 'the_pagination' ) ) :
	function the_pagination() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages
		) );
	}
endif;	
	

?>