<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lavenia_Cosméticos
 */

?>

<section class="no-results not-found">
	<div class="container-full">

		<div class="row">

			<div class="col-md-12">
				<header class="page-header mb-5">
					<h1 class="page-title"><?php esc_html_e( 'Nenhum resultado encontrado', 'lavenia' ); ?></h1>
				</header><!-- .page-header -->
			</div>

			<div class="col-md-8">
				<div class="page-content">
					<?php
					if ( is_search() ) :
						?>

						<p><?php esc_html_e( 'Desculpe, mas nada corresponde aos seus termos de pesquisa. Por favor, tente novamente com algumas palavras-chave diferentes.', 'lavenia' ); ?></p>
						<?php
						get_template_part( 'template-parts/searchform' );

					else :
						?>

						<p><?php esc_html_e( 'Parece que não conseguimos encontrar o que você está procurando. Talvez pesquisar possa ajudar.', 'lavenia' ); ?></p>
						<?php
						get_template_part( 'template-parts/searchform' );

					endif;
					?>
				</div><!-- .page-content -->
			</div>

			<div class="col-md-4">
				<?php get_template_part( 'template-parts/sidebar' ); ?>
			</div>

		</div>

	</div>
</section><!-- .no-results -->
