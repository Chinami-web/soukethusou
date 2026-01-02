<?php
/**
 * func-utility
 * ユーティリティ関数
 */

/**
 * 投稿が指定した日数以内であるか判定（未設定の場合は7日）
 */
function new_posting($days = 7 ,$entry_time = null){
  $today = date_i18n('U');
  if(!$entry_time) {
    $entry = get_the_time('U');
  }
  $posting = date('U',($today - $entry)) / 86400;
  if( $days > $posting) {
    return true;
  }
  return false;
}

// add_action('wp_footer', 'redirect_to_thanks_page');
// function redirect_to_thanks_page() {
//   $homeUrl = home_url();
//   echo <<< EOD
//     <script>
//       document.addEventListener( 'wpcf7mailsent', function( event ) {
//         location = '{$homeUrl}/contact-thanks/';
//       }, false );
//     </script>
//   EOD;
// }
