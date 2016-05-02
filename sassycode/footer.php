<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sassycode
 */

?>

	</div><!-- #content -->

	<footer id="ft" class="site-footer">

		<div id="contact-section" >
	      <div class="container">
	      	<div class="content-top">
	      	</div>
		      <div class="content-txt">
		      	<h1> Hire Me </h1>
		      	<?php echo do_shortcode( '[contact-form-7 id="10" title="Contact form 1"]' ); ?>
		      </div>
	      
	      </div>
	    </div><!-- #contact section -->

		<div class="site-info">
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'Stella' ), 'Stella', '<a href="/" >SassyCode</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
