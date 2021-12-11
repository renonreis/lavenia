<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lavenia_Cosméticos
 */

$image = get_the_post_thumbnail_url(get_the_ID(), 'full');
$image_mobile = get_the_post_thumbnail_url(get_the_ID(), 'featured-blog-mobile');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="col-12">
			<?php if($image): ?>
				<div class="img img-post-mobile">
					<picture>
						<source srcset="<?php echo esc_url($image_mobile); ?>" media="(max-width: 414px)">
						<source srcset="<?php echo esc_url($image); ?>" media="(min-width: 415px)">
						<img class="post-image" src="<?php echo esc_url($image); ?>" alt="<?php echo get_the_title(); ?>" />
					</picture>
					<div class="box-autor">
						<picture>
							<source srcset="<?php print get_avatar_url($user->ID, ['size' => '74']); ?>" media="(min-width: 992px)"/>
							<img src="<?php print get_avatar_url($user->ID, ['size' => '74']); ?>"/>
						</picture>
						<div class="content">
							<p class="author-name"><?php the_author(); ?></p>
							<p><?php echo nl2br(get_the_author_meta('description')); ?></p>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>

	<div class="row justify-content-around">
		<div class="col-md-7">
			<header class="entry-header">
				<div class="breadcrumbs">
					<span><a href="<?php echo get_site_url(); ?>">Blog</a></span> > <span><?php echo get_the_title(); ?></span>
				</div>
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
				<?php echo do_shortcode( '[addtoany buttons="pinterest,facebook,twitter,whatsapp"]' ); ?>
			</header><!-- .entry-header -->
		</div>
		<div class="col-md-4">
		</div>
	</div>

	<div class="row justify-content-around entry-content pb-5">
		<div class="col-md-7">
			<?php
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'lavenia' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lavenia' ),
					'after'  => '</div>',
				)
			);
			?>

			<p>
				Publicado por <?php the_author(); ?><br/>
				<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
			</p>
		</div>

		<div class="col-md-4">
			<h2>Mais lidas</h2>
			<?php
				$popular_post = array(
					'meta_key'  => 'wp_post_views_count', // set custom meta key
					'orderby'    => 'meta_value_num',
					'order'      => 'DESC',
					'posts_per_page' => 2
				);
				$list_posts = new WP_Query( $popular_post );

				if ( $list_posts->have_posts() ) {
					while ( $list_posts->have_posts() ) {
						$list_posts->the_post();

						get_template_part( 'template-parts/blog', 'grid', $args = array( 'columns' => 'col-md-12' ) );

					}
				} else {
					echo '<h2>Não há postagens existentes</h2>';
				}
				wp_reset_postdata();
			?>
			<?php get_template_part( 'template-parts/sidebar' ); ?>
		</div>

	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
