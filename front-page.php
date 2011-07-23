<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

<div id="front-page-banner"><div id="site-description"><div><?php bloginfo( 'description' ); ?></div></div></div> <div style="clear: both; font-size: 23px; line-height: 60px; text-align: center; color:#666;">A collaborative engineering project to design and create an Open Source Buggy</div><hr class="shadow" />
<div id="latest"><img src="/images/latest.png" alt="Latest" style="margin-top: -10px;"/></div>




				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>