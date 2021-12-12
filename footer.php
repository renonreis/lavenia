<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lavenia_Cosméticos
 */

?>

	<footer>
		<?php get_template_part( 'template-parts/newsletter' ); ?>
		<section class="footer">
			<div class="container">
				<div class="row">
					<div class="col-12 information">
						<ul class="d-flex justify-content-between">
							<li>
								<a href="">
									<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/whatsapp.svg" alt=""/></span>
									<?php the_field('whatsapp', 'options'); ?>
								</a>
							</li>
							<li>
								<a href="">
									<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/phone.svg" alt=""/></span>
									<?php the_field('telefone', 'options'); ?>
								</a>
							</li>
							<li>
								<a href="">
									<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/mail.svg" alt=""/></span>
									<?php the_field('email', 'options'); ?>
								</a>
							</li>
							<li>
								<a href="" class="text-uppercase">
									<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/pin.svg" alt=""/></span>
									<?php the_field('endereco', 'options'); ?>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-12 text-center">
						<p class="mb-0"><?php the_field('texto_copyright', 'options'); ?></p>
						<p class="mb-0"><?php the_field( 'copyright', 'options' ); ?></p>
					</div>
				</div>
			</div>
		</section>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
