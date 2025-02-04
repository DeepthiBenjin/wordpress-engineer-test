<?php
  global $post;
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('post-single p-3 mb-4'); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail(''); ?>
    </div>
  <?php }?>
  <h1 class="post-title"><?php the_title(); ?></h1>
  <div class="post-meta mb-2">
    <i class="far fa-clock"></i>
    <?php echo esc_attr(get_the_date()); ?>
  </div>
  <div class="post-content">
    <?php
      echo wp_trim_words( get_the_content(), get_theme_mod('fitness_coaching_service_excerpt_number',15) );
      the_tags('<div class="post-tags"><strong>'.esc_html__('Tags:','fitness-coaching').'</strong> ', ', ', '</div>');
    ?>
  </div>
</div>