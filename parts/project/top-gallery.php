<div class="top-gallery">
  <div class="top-gallery__inner">
    <?php
    $args = array(
      'post_type' => 'gallery', //カスタム投稿タイプを設定
      'posts_per_page' => -1, // 取得する投稿数を設定（−1は無制限）
      'order' => 'DESC', //並び順を指定
      'orderby' => 'date',  // 並び変える項目を設定
    );

    global $slider_library;
    if ($slider_library === 'swiper') {
      get_template_part('parts/common/swiper', null, $args);
    } elseif ($slider_library === 'slick') {
      get_template_part('parts/common/slick', null, $args);
    } else {
      get_template_part('parts/common/splide', null, $args);
    }

    ?>
  </div>
</div>












