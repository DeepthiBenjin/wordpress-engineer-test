<?php 
/*
Plugin Name: Custom Posts
Plugin URI: https://www.example.com/custom-posts
Description: Adds a custom post type for testimonials.
Version: 1.0.0
Author: Deepthi
Author URI: https://www.example.com
License: GPL2
*/

function custom_posts_register_post_type() {
  $labels = array(
    'name' => __( 'Testimonials' ),
    'singular_name' => __( 'Testimonial' ),
    'menu_name' => __( 'Testimonials' ),
    'all_items' => __( 'All Testimonials' ),
    'add_new' => __( 'Add New' ),
    'add_new_item' => __( 'Add New Testimonial' ),
    'edit_item' => __( 'Edit Testimonial' ),
    'new_item' => __( 'New Testimonial' ),
    'view_item' => __( 'View Testimonial' ),
    'search_items' => __( 'Search Testimonials' ),
    'not_found' => __( 'No Testimonials found' ),
    'not_found_in_trash' => __( 'No Testimonials found in Trash' ),
    'parent_item_colon' => '',
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'testimonials' ),
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array( 'title', 'editor', 'thumbnail' )
  );

  register_post_type( 'testimonials', $args );
}
add_action( 'init', 'custom_posts_register_post_type' );

function custom_posts_shortcode( $atts ) {
    $atts = shortcode_atts( array(
      'count' => -1,
    ), $atts );
  
    $query_args = array(
      'post_type' => 'testimonials',
      'posts_per_page' => $atts['count'],
    );
  
    $query = new WP_Query( $query_args );
  
    $output = '<ul>';
  
    while ( $query->have_posts() ) {
      $query->the_post();
  
      $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
    }
  
    $output .= '</ul>';
  
    wp_reset_postdata();
  
    return $output;
  }
  add_shortcode( 'testimonials', 'custom_posts_shortcode' );

?>