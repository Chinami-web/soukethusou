<?php
function create_post_type_director() {
  register_post_type('director',
    array(
      'labels' => array(
        'name' => __('ディレクター紹介'),
        'singular_name' => __('ディレクター紹介')
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail'),
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-businessperson',
    )
  );
}
add_action('init', 'create_post_type_director');
