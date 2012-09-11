<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	</div> <!-- end .wrapper -->
	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div class="wrapper">
			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
			
			<div id="site-generator">
				<?php // do_action( 'twentyeleven_credits' ); ?>
				<!-- <a href="<?php // echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php // esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php // printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a> -->
			</div>
			<div id="siteCredits">
				<div class="wrapper">
					© Copyright 2012 UCLA Events Office. All rights reserved. <?php wp_loginout(); ?><br /> 
					<a href="http://ucla.edu" target="_blank">UCLA Homepage</a>
				</div>
			</div>
			
	</footer><!-- #colophon -->
</div><!-- #page -->
		</div> <!-- end .wrapper -->
		
<?php wp_footer(); ?>

</body>
</html>