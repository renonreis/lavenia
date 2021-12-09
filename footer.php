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
									(12) 3456-7890
								</a>
							</li>
							<li>
								<a href="">
									<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/phone.svg" alt=""/></span>
									(12) 3456-7890
								</a>
							</li>
							<li>
								<a href="">
									<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/mail.svg" alt=""/></span>
									laveniacosmeticos@gmail.com
								</a>
							</li>
							<li>
								<a href="" class="text-uppercase">
									<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/pin.svg" alt=""/></span>
									RUA vicente machado,1645 apto 17 , centro, cep 85812-150 - Cascavel pr
								</a>
							</li>
						</ul>
					</div>
					<div class="col-12 text-center">
						<p class="mb-0">Aenean lacinia bibendum nulla sed consectetur. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor.</p>
						<p class="mb-0">© All Rights Reserved 2021 - LaVenia.</p>
					</div>
				</div>
			</div>
		</section>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
