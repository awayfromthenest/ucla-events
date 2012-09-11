<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>

		


		<div id="secondary" class="widget-area" role="complementary">
									
			
			
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
<!-- FIND ME IN SIDEBAR.PHP IN THE THEME FILES -->
				<?php if (is_page('filming-and-photgraphy') ) : ?>
					<h3 class="widget-title">Related Links</h3>
					<ul>
						<li><a href="#">Guidelines for Film and Photography Shoots at UCLA</a></li>
						<li><a href="#how">How to film at UCLA</a></li>
						<li><a href="#client">Client and film list</a></li>
						<li><a href="#faq">Filming FAQs</a></li>
						<li><a href="#student">Student filming</a></li>
					</ul>
				<?php // elseif (is_front_page() ) : ?>
				<?php elseif (is_page('equipment-rentals')) :?>
					<h3 class="widget-title">Related Links</h3>
					<ul>
						<li><a href="#">Submit an Online Event Equipment Rental Request</li></a>
					</ul>
				<?php elseif (is_page('contact')) :?>
					<!-- do nothing -->
				<?php else : ?>	
					<a href="/contact"><div class="contactBtn">&nbsp;</div></a> <!-- end .contactBtn -->
					<br />			
					<iframe width="300" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?ie=UTF8&amp;cid=1450951565398480166&amp;q=UCLA+Events+Office&amp;gl=US&amp;hl=en&amp;t=m&amp;ll=34.070187,-118.443818&amp;spn=0.006221,0.006437&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe><br />
					<div style="width:300px; text-align:center"><small><a href="https://maps.google.com/maps?ie=UTF8&amp;cid=1450951565398480166&amp;q=UCLA+Events+Office&amp;gl=US&amp;hl=en&amp;t=m&amp;ll=34.070187,-118.443818&amp;spn=0.006221,0.006437&amp;z=16&amp;iwloc=A&amp;source=embed">Larger Google map</a></small> | <small><a href="http://maps.ucla.edu/campus/?zlvl=9&locid=268">UCLA interactive map</a></small></div>
					<br />
					
					<a href="/contact"><img src="<?php echo get_template_directory_uri(); ?>/images/img_eventsOfficeWill.png" style="text-align:right;"></a>

				<?php endif; ?>
				
				<!-- OLD DYNAMIC SIDEBAR -->
				<!-- <aside id="archives" class="widget">
									<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
									<ul>
										<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
									</ul>
								</aside>

								<aside id="meta" class="widget">
									<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
									<ul>
										<?php wp_register(); ?>
										<li><?php wp_loginout(); ?></li>
										<?php wp_meta(); ?>
									</ul>
								</aside> -->

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>