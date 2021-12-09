<?php
// Template Name: Home

get_header();

?>

<main>
  <section class="banner">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image-banner.jpg" alt="" />
  </section>

  <?php get_template_part( 'template-parts/newsletter' ); ?>

  <section class="recent-posts pt-5 pb-5">
    <div class="container">
      <div class="row">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'paged' => $paged
        );
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) {
            echo '<div class="col-md-4">';
            while ( $the_query->have_posts() ) {
                $the_query->the_post();

                $image = get_the_post_thumbnail_url(get_the_ID(), 'featured-blog');
                $categories = get_the_category();
                $separator = ' ';
                $output = '';

                $excerpt = get_the_excerpt();
                $excerpt = substr($excerpt, 0, 150);
                $result = substr($excerpt, 0, strrpos($excerpt, ' '));
              ?>
                <article class="post">
                  <div class="content">
                    <?php
                      if ( ! empty( $categories ) ) {
                        foreach( $categories as $category ) {
                          $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="post-categoria" alt="' . esc_attr( sprintf( __( 'Ver todos os posts em %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                        }
                        echo trim( $output, $separator );
                      }
                    ?>
                    <h2><?php echo get_the_title(); ?></h2>
                    <p><?php echo $result; ?></p>
                    <a href="<?php echo get_permalink(); ?>" class="btn">Inteiro Teor</a>
                  </div>
                  <div class="image">
                    <?php if($image){ ?>
                      <div class="img">
                        <img src="<?php echo esc_url($image); ?>" />
                      </div>
                    <?php } else { ?>
                      <div class="img">
                        <img src="<?php echo get_bloginfo('template_directory'); ?>-child/images/blog-default.jpg" />
                      </div>
                    <?php } ?>
                    <?php get_template_part( 'template-parts/sharing-box'); ?>
                    <a href="<?php echo get_permalink(); ?>" class="btn">Inteiro Teor</a>
                  </div>
                </article>
              <?php
            }
            echo '</div>';
        } else {
          echo '<h2>Não há postagens existentes</h2>';
        }
        wp_reset_postdata();
      ?>
      <div class="pagination">
        <?php
          $big = 99;
          echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query->max_num_pages
          ));
        ?>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();