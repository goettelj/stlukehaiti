<?php
/*
Template Name: Team Template
*/

    get_header(); 
    $pagesWithoutAutoParagraph = array("Ambassadors", "Mass Cards", "AAN");
    if ( in_array(get_the_title(), $pagesWithoutAutoParagraph) ){
    	remove_filter('the_content','wpautop');
    }
?>

    <div id="content" class="<?php echo get_the_title(); ?>">
    	<p style="display:none"><?php echo get_the_title(); ?></p>
	
    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    	    <div class="post" id="post-<?php the_ID(); ?>">				
        		<div id="dot_bar"></div>
        		<div class="entry">
        		    <div id="thirtywideright">
        		        <img class="sideimg" alt="" src="/images/ambassadors/sidebar/ambassador_sidebar_img04.jpg" />
                        <img class="sideimg" alt="" src="/images/ambassadors/sidebar/ambassador_sidebar_img02.jpg" />
                        <img class="sideimg" alt="" src="/images/ambassadors/sidebar/ambassador_sidebar_img03.jpg" />
                        <a href="http://stlukehaiti.org/donate/"><img class="sideimg padtwenty objectcenter" alt="" src="/images/donate_sidebar.png" /></a>
                    </div>
                    <div id="tenwideright">
                        <img alt="" src="/images/bar_tall.png" />
                    </div>
                    <div id="seventywideleft">
        			    <?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
        			    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        			</div>
        		</div>
        	</div>
    	<?php endwhile; endif; ?>
    	
    </div>
    <hr />
    <div class="clearfooter"></div>	
    <?php get_footer(); ?>