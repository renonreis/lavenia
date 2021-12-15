<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Lavenia_Cosméticos
 */

?>
<!doctype html>
<html lang="pt-BR" xml:lang="pt-BR" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php bloginfo( 'name' ); ?></title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://use.typekit.net/kgu0gkn.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header>
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<button class="col-1 navbar-toggler menu-mobile" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<svg xmlns="http://www.w3.org/2000/svg" width="31" height="21.382" viewBox="0 0 31 21.382">
						<path id="Caminho_29338" data-name="Caminho 29338" d="M29.563,5.309H2.438a1.938,1.938,0,0,0,0,3.875H29.563a1.938,1.938,0,0,0,0-3.875Zm0,8.753H2.438a1.938,1.938,0,0,0,0,3.875H29.563a1.938,1.938,0,0,0,0-3.875Zm0,8.753H2.438a1.938,1.938,0,0,0,0,3.875H29.563a1.938,1.938,0,0,0,0-3.875Z" transform="translate(-0.5 -5.309)" fill="#0a92e0"/>
					</svg>
				</button>
				<a class="logo col-6 col-md-3 col-lg-2 order-md-2 text-center" href="<?php echo get_site_url(); ?>">
					<span><img src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/img/logo-lavenia.png" alt="" /></span>
				</a>
				<div class="col-md-5 col-lg-5 collapse order-2 navbar-collapse order-md-1" id="navbarNavAltMarkup">
					<div class="navbar-nav w-100">
						<?php
							wp_nav_menu(array(
									'theme_location'    => 'header-menu',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'col',
									'container_id'      => 'bs-example-navbar-collapse',
									'menu_class'        => 'navbar-nav justify-content-between',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker(),
							));
						?>
					</div>
				</div>
				<div class="search col-5 col-md-8 col-lg-5 order-1 order-md-3 d-flex justify-content-end justify-content-lg-between">
					<div class="search-div w-100 d-none d-md-block">
						<?php get_template_part( 'template-parts/searchform' ); ?>
					</div>
					<div class="d-md-none open-search">
						<svg xmlns="http://www.w3.org/2000/svg" width="15.8" height="15.798" viewBox="0 0 15.8 15.798">
							<path id="Caminho_2" data-name="Caminho 2" d="M17.545,15.467l-3.779-3.779a6.15,6.15,0,0,0,.9-3.21A6.517,6.517,0,0,0,8.286,2.1,6.185,6.185,0,0,0,2.1,8.288a6.517,6.517,0,0,0,6.377,6.376,6.15,6.15,0,0,0,3.115-.844l3.8,3.8a.953.953,0,0,0,1.346,0l.943-.943c.371-.371.236-.84-.135-1.211ZM4,8.287A4.282,4.282,0,0,1,8.287,4,4.615,4.615,0,0,1,12.76,8.478a4.284,4.284,0,0,1-4.282,4.283A4.616,4.616,0,0,1,4,8.287Z" transform="translate(-2.1 -2.101)" fill="#0a92e0"/>
						</svg>
					</div>
					<a href="<?php the_field('url_shop', 'options'); ?>" target="_blank" class="btn-shop">Loja</a>
				</div>
			</div>
		</nav>
	</header><!-- #masthead -->
