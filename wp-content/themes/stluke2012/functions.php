<?php
//For thumbnails. Code in archive.php, search.php, and single.php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 225, 1000 ); // 225 pixels wide by 1000 pixels tall, box resize mode
add_image_size( 'single-post-thumbnail', 360, 1000 ); // Permalink thumbnail size

//Add support for different single pages depending on category 


/**
* Define a constant path to our single template folder
*/
define(SINGLE_PATH, TEMPLATEPATH . '/single');

/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'my_single_template');

/**
* Single template function which will choose our template
*/
function my_single_template($single) {
global $wp_query, $post;

/**
* Checks for single template by category
* Check by category slug and ID
*/
foreach((array)get_the_category() as $cat) :

if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';

elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';

endforeach;

?>