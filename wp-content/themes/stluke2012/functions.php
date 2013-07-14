<?php
//For thumbnails. Code in archive.php, search.php, and single.php
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 225, 1000 ); // 225 pixels wide by 1000 pixels tall, box resize mode
add_image_size( 'single-post-thumbnail', 360, 1000 ); // Permalink thumbnail size

?>