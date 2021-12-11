<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lavenia_Cosméticos
 */

	$image = get_the_post_thumbnail_url(get_the_ID(), 'list-posts');
	$image_mobile = get_the_post_thumbnail_url(get_the_ID(), 'recent-posts');
	$categories = get_the_category();
	$separator = ' ';
	$output = '';

	$excerpt = get_the_excerpt();
	$excerpt = substr($excerpt, 0, 150);
	$result = substr($excerpt, 0, strrpos($excerpt, ' '));

?>

<article class="col-md-12 mb-5">
	<div class="list-posts box-shadow d-flex">
		<div class="image">
			<a href="<?php echo get_permalink(); ?>">
				<?php if($image || $image_mobile){ ?>
					<div class="img">
						<picture>
							<source srcset="<?php echo esc_url($image_mobile); ?>" media="(max-width: 767px)">
							<source srcset="<?php echo esc_url($image); ?>" media="(min-width: 768px)">
							<img src="<?php echo esc_url($image); ?>" alt="<?php echo get_the_title(); ?>" />
						</picture>
					</div>
				<?php } else { ?>
					<div class="img">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/blog-default.jpg" alt="" />
					</div>
				<?php } ?>
				</a>
		</div>
		<div class="content">
			<a href="<?php echo get_permalink(); ?>" class="post-titulo d-block">
				<h2><?php echo get_the_title(); ?></h2>
			</a>
			<p class="excerpt"><?php echo $result; ?></p>
			<div class="d-flex justify-content-between">
				<span class="post-autor">Postado por: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
				<?php get_template_part( 'template-parts/share-box'); ?>
			</div>
		</div>
	</div>
</article><!-- <?php the_ID(); ?> -->
