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
		<section class="newsletter">
			<div class="container">
				<div class="row">
					<div class="col d-flex justify-content-center">
						<h2>Inscreva-se na nossa <span>newsletter</span></h2>
						<?php echo do_shortcode('[contact-form-7 id="7" title="Newsletter"]'); ?>
					</div>
				</div>
			</div>
		</section>
		<section class="footer">
			<div class="container">
				<div class="row">
					<div class="col-12 justify-content-center information">
						<ul class="d-flex">
							<li>
								<a href="">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/whatsapp.svg" alt=""/>
									(12) 3456-7890
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/phone.svg" alt=""/>
									(12) 3456-7890
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/mail.svg" alt=""/>
									laveniacosmeticos@gmail.com
								</a>
							</li>
							<li>
								<a href="">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/pin.svg" alt=""/>
									RUA vicente machado,1645 apto 17 , centro, cep 85812-150 - Cascavel pr
								</a>
							</li>
						</ul>
					</div>
					<div class="col-12 text-center">
						<p>Aenean lacinia bibendum nulla sed consectetur. Donec sed odio dui. Maecenas sed diam eget risus varius blandit sit amet non magna. Curabitur blandit tempus porttitor.</p>
						<p>© All Rights Reserved 2021 - LaVenia.</p>
					</div>
				</div>
			</div>
		</section>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
