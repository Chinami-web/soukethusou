<?php
/**
 * Functions
 */

// 基本設定
get_template_part('parts/functions-lib/func-base');

// セキュリティー対応
get_template_part('parts/functions-lib/func-security');

// ショートコードの設定
get_template_part('parts/functions-lib/func-shortcode');

// URLのショートカット設定
get_template_part('parts/functions-lib/func-url');

// URLのショートカット設定
get_template_part('parts/functions-lib/func-utility');

// メインクエリのSP表示件数設定
// get_template_part('parts/functions-lib/func-posts-edit');

// スクリプト、スタイルシートの設定
get_template_part('parts/functions-lib/func-enqueue-assets');
// get_template_part('parts/functions-lib/func-enqueue-assets_noslider'); //スライダーを使用しない場合

// （MV用）カスタムフィールドの設定
get_template_part('parts/functions-lib/func-add-posttype-mv');

// （gallery用）カスタムフィールドの設定
get_template_part('parts/functions-lib/func-add-posttype-gallery');
// gallery用カスタムフィールド（ACFなし）
get_template_part('parts/functions-lib/func-gallery-meta');

// （Works用）カスタムフィールドの設定
get_template_part('parts/functions-lib/func-add-posttype-facility');
// facility用カスタムフィールド（ACFなし）
get_template_part('parts/functions-lib/func-facility-meta');

// （Event用）投稿の名称変更
get_template_part('parts/functions-lib/func-add-posttype-post');

// フロントページの動画を優先読み込み
add_action('wp_head', 'soukessou_preload_mv_video', 1);
function soukessou_preload_mv_video() {
  if (is_front_page()) {
    $video_url = get_template_directory_uri() . '/assets/movie/mv.mp4';
    echo '<link rel="preload" as="video" href="' . esc_url($video_url) . '" fetchpriority="high">' . "\n";
  }
}

?>
