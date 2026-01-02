<?php
/**
 * facilityのカスタム投稿を設定
 */
add_action('init', 'my_add_custom_post_facility');
function my_add_custom_post_facility()
{
  // 投稿タイプ'works'を登録
  register_post_type(
    'facility', // 新しい投稿タイプの名前
    array(
      'label' => '葬儀プラン・費用案内', // 管理画面に表示される投稿タイプの名前
      'labels' => array( // 投稿タイプの詳細な表示名の設定
        'name' => '葬儀プラン・費用案内', // 投稿タイプの複数形の名前を設定
        'all_items' => '葬儀プラン・費用案内', // 全投稿一覧のリンクのテキスト
      ),
      'public' => true,
      'has_archive' =>  true,
      'menu_position' => 6,   //メニュー表示位置
      'show_in_rest' => true, // ブロックエディタを有効にする
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );
}
