<?php 

/*
Plugin Name: Recipe Manager
Plugin URI: https://www.example.com/recipe-manager
Description: Adds a custom post type for recipes.
Version: 1.0.0
Author: Deepthi
Author URI: https://www.example.com
License: GPL2
*/
function recipe_manager_register_post_type() {
    $labels = array(
      'name' => __( 'Recipes' ),
      'singular_name' => __( 'Recipe' ),
      'menu_name' => __( 'Recipes' ),
      'all_items' => __( 'All Recipes' ),
      'add_new' => __( 'Add New' ),
      'add_new_item' => __( 'Add New Recipe' ),
      'edit_item' => __( 'Edit Recipe' ),
      'new_item' => __( 'New Recipe' ),
      'view_item' => __( 'View Recipe' ),
      'search_items' => __( 'Search Recipes' ),
      'not_found' => __( 'No Recipes found' ),
      'not_found_in_trash' => __( 'No Recipes found in Trash' ),
      'parent_item_colon' => '',
    );
  
    $args = array(
        'public' => true,
        'label' => __( 'Recipes' ),
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'show_in_rest' => true, // Enable REST API support
      );
      register_post_type( 'recipes', $args );
  }
  add_action( 'init', 'recipe_manager_register_post_type' );

  function recipe_manager_register_taxonomies() {
    // Register Cuisine taxonomy
    $labels = array(
      'name' => __( 'Cuisines' ),
      'singular_name' => __( 'Cuisine' ),
      'menu_name' => __( 'Cuisines' ),
      'all_items' => __( 'All Cuisines' ),
      'edit_item' => __( 'Edit Cuisine' ),
      'view_item' => __( 'View Cuisine' ),
      'update_item' => __( 'Update Cuisine' ),
      'add_new_item' => __( 'Add New Cuisine' ),
      'new_item_name' => __( 'New Cuisine Name' ),
      'parent_item' => __( 'Parent Cuisine' ),
      'parent_item_colon' => __( 'Parent Cuisine:' ),
      'search_items' => __( 'Search Cuisines' ),
      'popular_items' => __( 'Popular Cuisines' ),
      'separate_items_with_commas' => __( 'Separate cuisines with commas' ),
      'add_or_remove_items' => __( 'Add or remove cuisines' ),
      'choose_from_most_used' => __( 'Choose from the most used cuisines' ),
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'cuisine' ),
    );
    register_taxonomy( 'cuisine', 'recipes', $args );
  
    // Register Meal Type taxonomy
    $labels = array(
      'name' => __( 'Meal Types' ),
      'singular_name' => __( 'Meal Type' ),
      'menu_name' => __( 'Meal Types' ),
      'all_items' => __( 'All Meal Types' ),
      'edit_item' => __( 'Edit Meal Type' ),
      'view_item' => __( 'View Meal Type' ),
      'update_item' => __( 'Update Meal Type' ),
      'add_new_item' => __( 'Add New Meal Type' ),
      'new_item_name' => __( 'New Meal Type Name' ),
      'parent_item' => __( 'Parent Meal Type' ),
      'parent_item_colon' => __( 'Parent Meal Type:' ),
      'search_items' => __( 'Search Meal Types' ),
      'popular_items' => __( 'Popular Meal Types' ),
      'separate_items_with_commas' => __( 'Separate meal types with commas' ),
      'add_or_remove_items' => __( 'Add or remove meal types' ),
      'choose_from_most_used' => __( 'Choose from the most used meal types' ),
    );
    $args = array(
      'labels' => $labels,
      'public' => true,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'meal-type' ),
    );
    register_taxonomy( 'meal-type', 'recipes', $args );
  }
  add_action( 'init', 'recipe_manager_register_taxonomies' );
  

  
  function recipe_manager_register_meta() {
    register_post_meta( 'recipes', 'recipe_time', array(
      'type' => 'string',
      'description' => 'Preparation time for the recipe',
      'single' => true,
      'show_in_rest' => true, // Enable REST API support
    ) );
    register_post_meta( 'recipes', 'recipe_difficulty', array(
      'type' => 'string',
      'description' => 'Difficulty level of the recipe',
      'single' => true,
      'show_in_rest' => true, // Enable REST API support
    ) );
  }
  add_action( 'init', 'recipe_manager_register_meta' );
  
  

?>