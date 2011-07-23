<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 */
?>
</div><!-- #page -->
	</div><!-- #main -->
	<div id="footerShadow"></div>
	<footer id="colophon" role="contentinfo">
		<div class="container">
		<?php
			/* A sidebar in the footer? Yep. You can can customize
			  * your footer with three columns of widgets.
			  */
			get_sidebar( 'footer' );
		?>
		<div id="copyright">
			Copyright © 2011 OPENBUGGi project <br />
			<span class="creativeCommons"><a href="http://creativecommons.org/licenses/by/3.0/" >Creative Commons CC-BY</a>. Powered by <a href="http://wordpress.org/">WordPress</a></span>
		</div>
	  </div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>