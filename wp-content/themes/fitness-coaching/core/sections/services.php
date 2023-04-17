<?php if ( get_theme_mod('fitness_coaching_services_box_enable') ) : ?>

  <?php $fitness_coaching_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' =>  get_theme_mod('fitness_coaching_services_category'),
    'posts_per_page' => get_theme_mod('fitness_coaching_services_number'),
  ); ?>

  <div class="services text-center">
    <div class="container">
      <?php if ( get_theme_mod('fitness_coaching_services_main_title', true) == true ) : ?>
        <h2><?php echo esc_html( get_theme_mod('fitness_coaching_services_main_title' ) ); ?></h2>
      <?php endif; ?>
      <?php if ( get_theme_mod('fitness_coaching_services_title', true) == true ) : ?>
        <h3><?php echo esc_html( get_theme_mod('fitness_coaching_services_title' ) ); ?></h3>
      <?php endif; ?>
      <div class="owl-carousel">
        <?php $fitness_coaching_arr_posts = new WP_Query( $fitness_coaching_args );
        if ( $fitness_coaching_arr_posts->have_posts() ) :
          while ( $fitness_coaching_arr_posts->have_posts() ) :
            $fitness_coaching_arr_posts->the_post();
            ?>
            <div class="service-box mt-4">
              <?php the_post_thumbnail(); ?>
              <div class="services-title p-3">
                <h4 class="my-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h4>
              </div>
            </div>
          <?php
        endwhile;
        wp_reset_postdata();
        endif; ?>
      </div>
    </div>
  </div>

<?php endif; ?>
