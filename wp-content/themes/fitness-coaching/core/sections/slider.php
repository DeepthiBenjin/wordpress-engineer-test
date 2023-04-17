<?php if ( get_theme_mod('fitness_coaching_blog_box_enable') ) : ?>

<?php $fitness_coaching_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('fitness_coaching_blog_slide_category'),
  'posts_per_page' => get_theme_mod('fitness_coaching_blog_slide_number'),
); ?>

<div class="slider">
  <div class="owl-carousel">
    <?php $fitness_coaching_arr_posts = new WP_Query( $fitness_coaching_args );
    if ( $fitness_coaching_arr_posts->have_posts() ) :
      while ( $fitness_coaching_arr_posts->have_posts() ) :
        $fitness_coaching_arr_posts->the_post();
        ?>
        <div class="blog_box">
          <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            endif;
          ?>
          <div class="blog_inner_box">
            <?php if ( get_theme_mod('fitness_coaching_slider_main_title', true) == true ) : ?>
              <h2><?php echo esc_html( get_theme_mod('fitness_coaching_slider_main_title' ) ); ?></h2>
            <?php endif; ?>
            <?php if ( get_theme_mod('fitness_coaching_slide_second_title_enable_disable', true) == true ) : ?>
              <h3 class="post-title mb-3 mt-0"><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php the_title(); ?></a></h3>
            <?php endif; ?>
            <hr>
            <?php if ( get_theme_mod('fitness_coaching_slide_text_enable_disable', true) == true ) : ?>
              <p class="slider-text"><?php echo wp_trim_words( get_the_content(), get_theme_mod('fitness_coaching_slide_excerpt_number',20) ); ?></p>
            <?php endif; ?>
            <?php if ( get_theme_mod('fitness_coaching_slide_btn_enable_disable', true) == true ) : ?>
              <?php if ( get_theme_mod('fitness_coaching_slider_button_text', true) == true ) : ?>
                <p class="slider_btn my-5">
                    <a href="<?php the_permalink(); ?>" class="py-3 px-4"><?php echo esc_html( get_theme_mod('fitness_coaching_slider_button_text' ) ); ?></a>
                </p>
              <?php endif; ?>
            <?php endif; ?>
          </div>
        </div>
      <?php
    endwhile;
    wp_reset_postdata();
    endif; ?>
  </div>
</div>

<?php endif; ?>