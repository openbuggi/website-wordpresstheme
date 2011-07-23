<?php
/**
 * The template for displaying Category Archive pages.
 */

get_header(); 
?>
		<header class="page-header">

					<?php
						$category_description = category_description();
						if ( ! empty( $category_description ) )
							print( '<div class="introduction category-archive-meta">' . $category_description . '</div><hr class="shadow" />' );
					?>
				</header>
		<section id="primary" class="primaryCat">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>			

				<?php openbuggi_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php openbuggi_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'openbuggi' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'openbuggi' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<div style="clear:both;"></div>
<?php get_footer(); ?>
