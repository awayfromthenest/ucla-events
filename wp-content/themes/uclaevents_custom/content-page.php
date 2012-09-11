<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<?php if( is_front_page() ) : ?>
<!-- FIND ME IN CONTENT-PAGE.PHP IN THE THEME FILES -->
			<span id="about">&nbsp;</span>
			
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
				</div><!-- .entry-content -->
				<footer class="entry-meta">
					<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-meta -->
			</article><!-- #post-<?php the_ID(); ?> -->

	<div class="eightCol alpha omega">
			<!-- <h1 class="entry-title">Quicklinks</h1>

						<div class="sixCol alpha omega">
							<ul>
								<li><a href="#">Download Guidelines for Film and Photography Shoots at UCLA</a></li>
								<li><a href="#">Submit an Online Event Equipment Rental Request</a></li>
							</ul>
						</div>
						<div class="clearer"></div> -->
				
				<div class="fourCol nomargin">
					<a href="/filming-and-photgraphy/"><div class="oneCol icon film">&nbsp;</div></a>
					<div class="threeCol nomargin"><br />
						<h2>Filming and Photography</h2>
					</div> <!-- end .threeCol .nomargin -->
					<div class="clearer"></div>
					<div class="oneCol">&nbsp;</div>	
					<div class="threeCol nomargin">
						<!-- <ul>
							<li><a href="/filming/#how">How to film at UCLA</a></li>
							<li><a href="/filming/#client">Client and film list</a></li>
							<li><a href="/filming/#faq">Filming FAQs</a></li>
							<li><a href="/filming/#student">Student filming</a></li>
						</ul> -->
					</div> <!-- end .threeCol .nomargin -->
				</div> <!-- end .fourCol .alpha -->
				
				<div class="fourCol">
					<a href="/image-gallery/"><div class="oneCol icon photo">&nbsp;</div></a>
					<div class="threeCol nomargin"><br />
						<h2>Image Galleries</h2>
					</div> <!-- end .threeCol .nomargin -->
					<div class="clearer"></div>
					
					<div class="oneCol">&nbsp;</div>	
					<div class="threeCol nomargin">
						<!-- <ul>
							<li><a href="#">Nickelodeon Kids Choice Awards</a></li>
							<li><a href="#">Wedding Example</a></li>
							<li><a href="/bruin-day-2012/">BruinDay</a></li>
						</ul> -->
					</div> <!-- end .threeCol .nomargin -->
				</div> <!-- end .fourCol -->
				<div class="clearer"></div>
				
									
					<div class="fourCol nomargin">
						<a href="/parties-events/weddings-private-parties/"><div class="oneCol icon wedd">&nbsp;</div></a>
						<div class="threeCol nomargin"><br />
							<h2>Weddings and Private Events</h2>
						</div> <!-- end .threeCol .nomargin -->
						<div class="clearer"></div>

						<div class="oneCol">&nbsp;</div>	
						<div class="threeCol nomargin">
							<!-- <ul>
								<li><a href="#">Contact an Event Manager</a></li>
							</ul>
							<br /> -->
						</div> <!-- end .threeCol .nomargin -->
					</div> <!-- end .fourCol .alpha -->
				
					<div class="fourCol">
						<a href="/parties-events/corporate-events/"><div class="oneCol icon corp">&nbsp;</div></a>
						<div class="threeCol nomargin"><br />
							<h2>Corporate Events</h2>
						</div> <!-- end .threeCol .nomargin -->
						<div class="clearer"></div>

						<div class="oneCol">&nbsp;</div>	
						<div class="threeCol nomargin">
							<!-- <ul>
								<li><a href="#">Link #1</a></li>
								<li><a href="#">Link #2</a></li>
								<li><a href="#">Link #3</a></li>
							</ul> -->
						</div> <!-- end .threeCol .nomargin -->
					</div> <!-- end .fourCol .alpha -->
					<div class="clearer"></div>
				
					<div class="fourCol nomargin">
						<a href="/rentals/equipment-rentals/"><div class="oneCol icon equip">&nbsp;</div></a>
						<div class="threeCol nomargin"><br />
							<h2>Equipment Rentals</h2>
						</div> <!-- end .threeCol .nomargin -->
						<div class="clearer"></div>

						<div class="oneCol">&nbsp;</div>	
						<div class="threeCol nomargin">
							<!-- <ul>
								<li>Rental Catalog (coming soon)</li>
								<li><a href="https://spreadsheets.google.com/viewform?hl=en&formkey=dHJFVjlxX1dWdzN1OUU3S2lmVkZaYkE6MA">Staff/Faculty Order Form</a></li>
								<li><a href="https://spreadsheets.google.com/viewform?hl=en&formkey=dDhaQ3c5M0ozczNGaVpJRVRLaHRXUGc6MA">Registered Campus Organization Order Form</a></li>
							</ul> -->
						</div> <!-- end .threeCol .nomargin -->
					</div> <!-- end .fourCol .alpha -->				
				
					<div class="fourCol">
						<a href="/rentals/room-rentals/"><div class="oneCol icon room">&nbsp;</div></a>
						<div class="threeCol nomargin"><br />
							<h2>Room Rentals</h2>
						</div> <!-- end .threeCol .nomargin -->
						<div class="clearer"></div>

						<div class="oneCol">&nbsp;</div>	
						<div class="threeCol nomargin">
							<!-- <ul>
														<li><a href="#">Link #1</a></li>
														<li><a href="#">Link #2</a></li>
														<li><a href="#">Link #3</a></li>
													</ul> -->
						</div> <!-- end .threeCol .nomargin -->
					</div> <!-- end .fourCol .alpha -->								
				<div class="clearer"></div>
			
		</div> <!-- end .entry-content -->
	</div> <!-- .eightCol .alpha .omega -->
		

<?php else : ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if( is_page('image-gallery') ) : ?>
				<h1 class="entry-title">Venues</h1>
			<? else :?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php endif;?>
		</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->

<?php endif;?>