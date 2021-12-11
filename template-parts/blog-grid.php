<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lavenia_Cosméticos
 */

	$image = get_the_post_thumbnail_url(get_the_ID(), 'recent-posts');
	$categories = get_the_category();
	$separator = ' ';
	$output = '';

?>

<article class="col-md-4">
	<div class="grid-posts box-shadow">
		<div class="image">
			<a href="<?php echo get_permalink(); ?>">
				<?php if($image){ ?>
					<div class="img">
						<img src="<?php echo esc_url($image); ?>" />
					</div>
				<?php } else { ?>
					<div class="img">
						<img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/blog-default.jpg" />
					</div>
				<?php } ?>
				</a>
		</div>
		<div class="content">
			<?php if ( ! empty( $categories ) ) {
				foreach( $categories as $category ) {
					$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="post-categoria" alt="' . esc_attr( sprintf( __( 'Ver todos os posts em %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
				}
				echo trim( $output, $separator );
			} ?>
			<a href="<?php echo get_permalink(); ?>">
				<h2><?php echo get_the_title(); ?></h2>
			</a>
			Postado por: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
		</div>
	</div>
</article><!-- <?php the_ID(); ?> -->
