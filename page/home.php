<?php
// Template Name: Home

get_header();

?>

<main>
  <section class="banner">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/image-banner.jpg" alt="" />
  </section>

  <?php get_template_part( 'template-parts/newsletter' ); ?>

  <section class="recent-posts pt-5 pb-5 recent-posts-load-more">
    <div class="container">
      <div class="row">
      <?php
        $recent_posts_args = array(
          'posts_per_page' => 3,
          'post_type'      => 'post',
        );
        $the_query_recent = new WP_Query( $recent_posts_args );

        if ( $the_query_recent->have_posts() ) {
          while ( $the_query_recent->have_posts() ) {
            $the_query_recent->the_post();

            get_template_part( 'template-parts/blog', 'grid', $args = array( 'columns' => 'col-md-4' ));

          }
        } else {
          echo '<h2>Não há postagens existentes</h2>';
        }
        wp_reset_postdata();
      ?>
    </div>
  </section>

  <section class="list-posts-page">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $args = array(
              'post_type'      => 'post',
              'offset'         => 3,
              'posts_per_page' => 4,
              'paged'          => $paged
            );
            $the_query = new WP_Query( $args );

            if ( $the_query->have_posts() ) {
              while( $the_query->have_posts() ) :
                $the_query->the_post();

                get_template_part( 'template-parts/blog', 'list' );

              endwhile;


            } else {
              echo '<h2>Não há postagens existentes</h2>';
            }

            wp_reset_postdata();
          ?>
          <div class="pagination">
						<?php
							$big = 99;
              $format = empty( get_option('permalink_structure') ) ? '&page=%#%' : 'page/%#%/?s';
              $total = $the_query->max_num_pages;

							echo paginate_links( array(
								'base' => get_pagenum_link(1) . '%_%',
                'format'    => $format,
                'current'   => 1,
                'total'     => $total,
								'prev_text' => '<',
								'next_text' => '>'
							));
						?>
					</div>

        </div>
        <div class="col-md-4">
          <?php get_template_part( 'template-parts/sidebar' ); ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php
get_footer();