<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
	
<!-- *********** ADD CSS, Javascript, Jquery ***************	 -->
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" src="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css" media="screen" title="no title" charset="utf-8">
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.animate.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.anchorScroll.js" type="text/javascript" charset="utf-8"></script>


<!-- *********** Fancybox Jquery ***************	 -->
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fancybox/source/jquery.fancybox.css?v=2.1.0" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.0"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.3" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.3"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.3"></script>

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.6" type="text/css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.6"></script>


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!-- jquery for flexslider -->
<script type="text/javascript">
	$(window).load(function() {
	 $('.flexslider').flexslider({
	   animation: "slide",
		controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
		directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
	 });
	});

	$(document).ready(function(){
		$('.flexslider').hover(function(){
			$('.slideCaption').animate({
				opacity:'toggle',
			}, 500, function() {
			});		
		});
		// jquery for flexslider
		$("dt.gallery-icon a").addClass("fancybox").attr('rel', 'gallery-<?php the_ID(); ?>' );
		$(".fancybox").fancybox({
				openEffect	: 'none',
				closeEffect	: 'none'
			});
		var destination = $("#scrollTo").offset().top;
    $("html,body").animate({ scrollTop: destination},"easeInQuad");
	});
	
</script>



<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?> id="top">
<div id="page" class="hfeed">
	<div id="headerContainer">
		<div class="wrapper">
		<header id="branding" role="banner" class="twelveCol alpha omega">
			<div class="threeCol omega alignright floatRight studentStaffLinks">
				<a href="http://map.ais.ucla.edu/portal/site/UCLA/menuitem.ff496d71b71149c1ae13e110f848344a/?vgnextoid=0379d039a7e2f010VgnVCM100000db6643a4RCRD" target="_blank">UCLA Students, Faculty and Staff</a>
			</div>
					<div id="logoHomeLink"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php bloginfo('template_directory'); ?>/images/spacer.gif" width="100%" height="100%"></a></div>
					
					
					
					
				<hgroup>
					<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
					<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
				</hgroup>

				<?php
					// Check to see if the header image has been removed
					$header_image = get_header_image();
					if ( $header_image ) :
						// Compatibility with versions of WordPress prior to 3.4.
						if ( function_exists( 'get_custom_header' ) ) {
							// We need to figure out what the minimum width should be for our featured image.
							// This result would be the suggested width if the theme were to implement flexible widths.
							$header_image_width = get_theme_support( 'custom-header', 'width' );
						} else {
							$header_image_width = HEADER_IMAGE_WIDTH;
						}
						?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
						// The header image
						// Check if this is a post or page, if it has a thumbnail, and if it's a big one
						if ( is_singular() && has_post_thumbnail( $post->ID ) &&
								( /* $src, $width, $height */ $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), array( $header_image_width, $header_image_width ) ) ) &&
								$image[1] >= $header_image_width ) :
							// Houston, we have a new header image!
							echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
						else :
							// Compatibility with versions of WordPress prior to 3.4.
							if ( function_exists( 'get_custom_header' ) ) {
								$header_image_width  = get_custom_header()->width;
								$header_image_height = get_custom_header()->height;
							} else {
								$header_image_width  = HEADER_IMAGE_WIDTH;
								$header_image_height = HEADER_IMAGE_HEIGHT;
							}
							?>
						<img src="<?php header_image(); ?>" width="<?php echo $header_image_width; ?>" height="<?php echo $header_image_height; ?>" alt="" />
					<?php endif; // end check for featured image or standard header ?>
				</a>
				<?php endif; // end check for removed header image ?>
				<?php
					// Has the text been hidden?
					if ( 'blank' == get_header_textcolor() ) :
				?>
					<div class="only-search<?php if ( $header_image ) : ?> with-image<?php endif; ?>">
					<!-- <?php get_search_form(); ?> -->
					</div>
				<?php
					else :
				?>
					<!-- <?php get_search_form(); ?> -->
				<?php endif; ?>
				

				<nav id="access" role="navigation">
					<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
					<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
					<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
					<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
					<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					
				</nav><!-- #access -->
		</header><!-- #branding -->
		</div> <!-- end .wrapper -->
		
		<div class="wrapper">
			<div id="slideshow">				
				<div class="flexslider twelveCol alpha omega">
					<ul class="slides">
						<?php if( is_front_page() ) : ?>
							<li>
									<img src="<?php bloginfo('template_directory'); ?>/images/slides/slide1.jpg" />
									<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
									<div class="captionShow"><div class="slideCaption" style="display:none">Wilson Plaza</div></div>
					    </li>					
							<li>
								<img src="<?php bloginfo('template_directory'); ?>/images/slides/slide2.jpg" />
								<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
								<div class="captionShow"><div class="slideCaption" style="display:none">Wilson Plaza</div></div>
							</li>
						<?php elseif (is_page('filming-and-photgraphy') ) : ?>						
								<li>
										<img src="<?php bloginfo('template_directory'); ?>/images/slides/filming-2.jpg" />
										<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
										<div class="captionShow"><div class="slideCaption" style="display:none">Royce Hall Portico</div></div>
						    </li>									
								<li>
										<img src="<?php bloginfo('template_directory'); ?>/images/slides/filming-1.jpg" />
										<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
										<div class="captionShow"><div class="slideCaption" style="display:none">Filming at Mathias Botanical Garden</div></div>
						    </li>
						<?php elseif (is_page('equipment-rentals') ) : ?>						
								<li>
										<img src="<?php bloginfo('template_directory'); ?>/images/slides/equip-rentals-2.jpg" />
										<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
										<div class="captionShow"><div class="slideCaption" style="display:none">Rent tables, chairs, linens, and more!</div></div>
						    </li>
								<li>
										<img src="<?php bloginfo('template_directory'); ?>/images/slides/rentals-1.jpg" />
										<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
										<div class="captionShow"><div class="slideCaption" style="display:none">Rent tables, chairs, linens, and more!</div></div>
						    </li>
						<?php elseif (is_page('room-rentals') ) : ?>		
							weddprivevents-1.jpg				
							<li>
									<img src="<?php bloginfo('template_directory'); ?>/images/slides/roomrentals-2.jpg" />
									<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
									<div class="captionShow"><div class="slideCaption" style="display:none">Humanities 51 Lecture Hall</div></div>
					    </li>
							<li>
									<img src="<?php bloginfo('template_directory'); ?>/images/slides/roomrentals-hains39-1.jpg" />
									<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
									<div class="captionShow"><div class="slideCaption" style="display:none">Haines 39 Lecture Hall</div></div>
					    </li>
						<?php elseif (is_page('weddings-private-parties') ) : ?>						
							<li>
									<img src="<?php bloginfo('template_directory'); ?>/images/slides/weddprivevents-1.jpg" />
									<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
									<div class="captionShow"><div class="slideCaption" style="display:none">Weddings &amp; Private Parties</div></div>
					    </li>
						<?php elseif (is_page('corporate-events') ) : ?>						
							<li>
									<img src="<?php bloginfo('template_directory'); ?>/images/slides/corp-events-1.jpg" />
									<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
									<div class="captionShow"><div class="slideCaption" style="display:none">Corporate Events</div></div>
					    </li>
						<?php else : ?>
							<li>
									<img src="<?php bloginfo('template_directory'); ?>/images/slides/slide1.jpg" />
									<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
									<div class="captionShow"><div class="slideCaption" style="display:none">Wilson Plaza</div></div>
					    </li>					
							<li>
								<img src="<?php bloginfo('template_directory'); ?>/images/slides/slide2.jpg" />
								<!-- DISPLAY A CAPTION FOR HEADER SLIDE -->
								<div class="captionShow"><div class="slideCaption" style="display:none">Wilson Plaza</div></div>
							</li>						
						<?php endif; ?>				
				  </ul>
				</div> <!-- end .flexslider -->
				
			</div> <!-- end #slideshow -->
						<div class="siteSlogan">IMAGINE <br /> YOUR EVENT <br />AT UCLA</div>
		</div> <!-- end .wrapper -->
		
		
	</div> <!-- end #headerContainer -->
	<div id="main">
		<div class="wrapper">
			<br />
