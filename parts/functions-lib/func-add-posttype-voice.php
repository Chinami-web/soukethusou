<?php
/**
 * カスタム投稿タイプ：お客様の声
 */
add_action('init', 'soukessou_add_posttype_voice');

function soukessou_add_posttype_voice() {
  // カスタム投稿タイプ「voice」
  register_post_type('voice', array(
    'label' => 'お客様の声',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-testimonial',
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'show_in_rest' => true,
  ));

  // タクソノミー「場所 (voice_hall)」
  register_taxonomy('voice_hall', 'voice', array(
    'label' => '場所・施設',
    'hierarchical' => true,
    'show_in_rest' => true,
  ));

  // タクソノミー「葬儀の種類 (voice_plan)」
  register_taxonomy('voice_plan', 'voice', array(
    'label' => '葬儀の種類',
    'hierarchical' => true,
    'show_in_rest' => true,
  ));
}











