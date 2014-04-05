<?php

add_theme_support('post-thumbnails');

add_action('init', 'create_food_post_type', 0);
add_action('init', 'create_drinks_post_type', 0);
add_action('init', 'create_games_post_type', 0);

function create_food_post_type() {
  register_taxonomy('food_category', 'food', array(
    'hierarchical' => true,
    'labels' => array(
      'name' => _x( 'Food Category', 'taxonomy general name' ),
      'singular_name' => _x( 'Food Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Food Categories' ),
      'all_items' => __( 'All Food Categories' ),
      'parent_item' => __( 'Parent Food Category' ),
      'parent_item_colon' => __( 'Parent Food Category:' ),
      'edit_item' => __( 'Edit Food Category' ),
      'update_item' => __( 'Update Food Category' ),
      'add_new_item' => __( 'Add New Food Category' ),
      'new_item_name' => __( 'New Food Category' ),
      'menu_name' => __( 'Food Categories' )
    ),
    'rewrite' => array(
      'hierarchical' => true,
      'slug' => 'food_category'
    )
  ));

  register_post_type('food', array(
    'label' => 'Food',
    'public' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    'taxonomies' => array('food_category')
  ));
}

function create_drinks_post_type() {
  register_taxonomy('drink_category', 'drinks', array(
    'hierarchical' => true,
    'labels' => array(
      'name' => _x( 'Drink Category', 'taxonomy general name' ),
      'singular_name' => _x( 'Drink Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Drink Categories' ),
      'all_items' => __( 'All Drink Categories' ),
      'parent_item' => __( 'Parent Drink Category' ),
      'parent_item_colon' => __( 'Parent Drink Category:' ),
      'edit_item' => __( 'Edit Drink Category' ),
      'update_item' => __( 'Update Drink Category' ),
      'add_new_item' => __( 'Add New Drink Category' ),
      'new_item_name' => __( 'New Drink Category' ),
      'menu_name' => __( 'Drink Categories' )
    ),
    'rewrite' => array(
      'hierarchical' => true,
      'slug' => 'drink_category'
    )
  ));

  register_post_type('drinks', array(
    'label' => 'Drinks',
    'public' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
    'taxonomies' => array('drink_category')
  ));
}

function create_games_post_type() {
  register_taxonomy('game_category', 'games', array(
    'hierarchical' => true,
    'labels' => array(
      'name' => _x( 'Game Category', 'taxonomy general name' ),
      'singular_name' => _x( 'Game Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Game Categories' ),
      'all_items' => __( 'All Game Categories' ),
      'parent_item' => __( 'Parent Game Category' ),
      'parent_item_colon' => __( 'Parent Game Category:' ),
      'edit_item' => __( 'Edit Game Category' ),
      'update_item' => __( 'Update Game Category' ),
      'add_new_item' => __( 'Add New Game Category' ),
      'new_item_name' => __( 'New Game Category' ),
      'menu_name' => __( 'Game Categories' )
    ),
    'rewrite' => array(
      'hierarchical' => true,
      'slug' => 'game_category'
    )
  ));

  register_post_type('games', array(
    'label' => 'Games',
    'public' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('game_category')
  ));
}

?>
