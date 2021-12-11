<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Lavenia_Cosméticos
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found mb-5">

			<div class="container">

				<div class="row">

					<div class="col-md-12">
						<header class="page-header mb-5">
							<h1 class="page-title"><?php esc_html_e( 'Ops! Essa página não pode ser encontrada.', 'lavenia' ); ?></h1>
						</header><!-- .page-header -->
					</div>

					<div class="col-md-8">
						<div class="page-content">
							<p><?php esc_html_e( 'Parece que nada foi encontrado neste local. Talvez tente uma pesquisa?', 'lavenia' ); ?></p>

								<?php
								get_template_part( 'template-parts/searchform' );
								?>
						</div><!-- .page-content -->
					</div>

					<div class="col-md-4">
						<?php get_template_part( 'template-parts/sidebar' ); ?>
					</div>

				</div>

			</div>

		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
