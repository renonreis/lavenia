<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Lavenia_Cosméticos
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="container">

			<div class="row">
				<div class="col-sm-12 mb-5">
					<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Resultados da pesquisa por: %s', 'lavenia' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h1>
					</header><!-- .page-header -->
				</div>

				<div class="col-md-8">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
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
