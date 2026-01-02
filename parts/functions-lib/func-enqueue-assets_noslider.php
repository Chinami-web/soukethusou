<?php

/**
 * func-enqueue-assets
 * CSSとJavaScriptの読み込み
 * スライダーを使用しない場合
 *
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 */
function my_script_init()
{
  // フォントの設定
  wp_enqueue_style('NotoSansJP', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap',array(), null);
  // wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap', array(), null, 'all');

  // WordPressがデフォルトで提供するjQueryは使用しない
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', array(), '3.6.1');
  wp_enqueue_script('desvg', '//cdn.jsdelivr.net/npm/desvg@1.0.2/desvg.min.js', array(), '1.0.2', true);
  wp_add_inline_script('desvg', 'window.addEventListener("load", function(){
    deSVG(".desvg", true);
  });');

  // 基本JavaScript
  wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/script.js', array(), filemtime(get_theme_file_path('assets/js/script.js')), true);
  // 基本CSS
  wp_enqueue_style('my-style', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('assets/css/style.css')), 'all');

}
add_action('wp_enqueue_scripts', 'my_script_init');

// ファビコンを読み込ませる
function setup_favicon()
{
  echo '<link rel="icon" type="image/x-icon" href="' . get_template_directory_uri() . '/favicon.ico">';
  echo '<link rel="apple-touch-icon" href="' . get_template_directory_uri() . '/apple-touch-icon.png">';
  echo '<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/android-touch-icon.png" sizes="192x192">';
}

add_action('wp_head', 'setup_favicon');
add_action('login_head', 'setup_favicon');
add_action('admin_head', 'setup_favicon');
