<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta http-equiv="content-language" content="en-us"/>
	<meta http-equiv="author" content="Bella Group, Inc. www.bellagroupinc.com" />
	<meta http-equiv="contact" content="info@stlukehaiti.org" />
	<meta name="copyright" content="© <?php echo date('Y'); ?> St. Luke Foundation for Haiti. All Rights Reserved." />
	<?php if(is_front_page()){ ?>
		<meta name="google-site-verification" content="" />
		<meta name="y_key" content="" />
		<meta name="msvalidate.01" content="" />	
		<link rel='canonical' href='' />
	<?php } ?>
	<meta property="fb:admins" content="" />
	<meta property="fb:page_id" content="" />
	<title>
		<?php bloginfo('name'); ?>
	</title>
	
	<!-- FONTS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/webfonts/ss-geomicons-squared.css" rel="stylesheet" />
	<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/4a07024c-dbae-4a77-80ec-b5247c924f44.css"/>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/slide_skin.css" type="text/css" media="screen" />
	<!--[if lt IE 7]>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style-ie6.css" />
	<![endif]-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/dropit.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/common.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/contactform.js"></script>
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#nav li.page_item a').last().css('border-right', 'none !important');	
			$('#nav li.page_item a').last().css('padding-right', '0 !important');	
		});
	</script>
	<script type="text/javascript">
		function mycarousel_initCallback(carousel, item, idx){
		
			var offset=$('div.jcarousel-clip-horizontal').width() - $('li.slide').width(); 
			var offsetval=offset / 2; //calculates left offset so item centers
			jQuery('li.slide').next().css('left','auto'); //ensures there is no gap between center and right item
			jQuery('li.slide').prev().css('left',offsetval);//gives previous item the same offset as current item to avoid a gap
			jQuery('li.slide').prev().prev().css('left',offsetval);//three items show at once, so both items preceding the incoming item need the same offset
			jQuery('li.slide').last().css('left',offsetval);
			 
			// Disable autoscrolling if the user clicks the prev or next button.
			carousel.buttonNext.bind('click', function() {
				carousel.startAuto(0);
			});
		 
			carousel.buttonPrev.bind('click', function() {
				carousel.startAuto(0);
			});
		 
			// Pause autoscrolling if the user moves with the cursor over the clip.
			carousel.clip.hover(function() {
				carousel.stopAuto();
			}, function() {
				carousel.startAuto();
			});
		};
		 
		jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel({
				auto: 4,
				scroll: 1,
				start: 2,
				wrap: 'circular',
				animation: 1500,
				initCallback: mycarousel_initCallback
			});
		});
	</script>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
	<noscript id="noscripterror"><p>This site uses AJAX and Javascript for many key elements, including navigation.  <br />Please enable Javascript or use a different browser.</p></noscript>
	
	<div id="page">
		<header class="main-header">
			<a href="<?php bloginfo('url'); ?>"><img class="main-logo" src="<?php bloginfo('stylesheet_directory'); ?>/images/stluke-logo.png" alt="St. Luke Foundation for Haiti" class="" ></a>
			<nav id="externalNav">
			  <a class="donate-link button-link" href="https://donatenow.networkforgood.org/stlukehaiti" target="_blank">DONATE
			  </a><a class="join-email-link button-link" href="http://eepurl.com/LD9_1" target="_blank">JOIN EMAIL LIST
			  </a><a class="facebook-link icon" href="http://www.facebook.com/pages/The-St-Luke-Foundation-for-Haiti/160329870739535" target="_blank">
			  </a><a class="twitter-link icon" href="https://twitter.com/Stlukehaiti" target="_blank">
			  </a><a class="linkedin-link icon" href="http://www.linkedin.com/company/st-luke-foundation-for-haiti/" target="_blank"></a>
			</nav>
			<nav class="main-nav">
			    <div class="dot-bar dot-bar-top"></div>
		        <div class="main-menu-wrapper">
				    <ul class="main-menu clearfix">
    					<?php wp_list_pages('title_li=&include=6,7,10,12,14,16,155,26'); ?> <!--exclude 'slideshow' and 'grid' page.  -->
    				</ul>
    				<!-- THIS GETS MOVED WITH JAVASCRIPT -->
    				<ul id="teamMenu">
    				    <li><a href="/haitian-leadership">Haitian Leadership</a></li>
    				    <li><a href="/advisory-council">Advisory Council</a></li>
    				    <li><a href="/ambassadors">Ambassadors</a></li>
    				    <li><a href="/partners">Partners</a></li>
    				</ul>
    			</div>
				<div class="dot-bar dot-bar-bottom"></div>
    		</nav>
		</header>
				
				
				<?php  $custom_values = get_post_custom_values('image_header');
				if ( ! is_array($custom_values) ){
					$custom_values = array();
				}
				if (in_array('slideshow', $custom_values)){
					$page_id = 68;
					$page_data = get_page( $page_id );
					$content = $page_data->post_content;
					echo $content;
					}?>

<!--if image_header is "none", echo this-->