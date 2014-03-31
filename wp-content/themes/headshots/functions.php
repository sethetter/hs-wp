<?php

add_theme_support('post-thumbnails');

add_action('init', create_food_post_type);
add_action('init', create_drinks_post_type);
add_action('init', create_games_post_type);

function create_food_post_type() {
  register_post_type('food', array(
    'label' => 'Food',
    'public' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('category')
  ));

  register_taxonomy('category', 'food');
}

function create_drinks_post_type() {
  register_post_type('drinks', array(
    'label' => 'Drinks',
    'public' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('category')
  ));

  register_taxonomy('category', 'drinks');
}

function create_games_post_type() {
  register_post_type('games', array(
    'label' => 'Games',
    'public' => true,
    'menu_position' => 5,
    'supports' => array('title', 'editor', 'thumbnail'),
    'taxonomies' => array('category')
  ));

  register_taxonomy('category', 'games');
}

?>
