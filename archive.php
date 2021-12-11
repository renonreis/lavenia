<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lavenia_Cosméticos
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="container">

			<div class="row">
				<div class="col-sm-12">
					<?php if ( have_posts() ) : ?>

					<header class="page-header mb-5">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->
				</div>

				<div class="col-md-8">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/blog', 'list' );

					endwhile;

					?>

					<div class="pagination">
						<?php
							$big = 99;
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'prev_text' => '<',
								'next_text' => '>'
							));
						?>
					</div>
				</div>

				<div class="col-sm-4">
					<?php get_template_part( 'template-parts/sidebar' ); ?>
				</div>

				<div class="col-sm-12">
					<?php

					else :

					get_template_part( 'template-parts/content', 'none' );

					endif;

					?>
				</div>

			</div>

		</div>

	</main><!-- #main -->

<?php
get_footer();
