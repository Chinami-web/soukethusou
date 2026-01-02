<?php
global $slider_library;
$post_type = 'facility';
$post_type_data = get_post_type_object($post_type);
$post_type_label = $post_type_data->labels->name;
?>
<div class="top-works">
  <div class="top-works__inner">
    <h2 class="title">葬儀プラン・費用案内</h2>
    <!-- 投稿記事のラベルをタイトルにする場合は、以下を使用します -->
    <h2 class="title"><?php echo $post_type_label; ?></h2>
    <?php
    $args = array(
      'post_type' => $post_type,
      'posts_per_page' => -1, // 取得する投稿数を設定（−1は無制限）
      'order' => 'DESC', //並び順を指定
      'orderby' => 'date',  // 並び変える項目を設定
    );

    if ($slider_library === 'splide') {
      get_template_part('parts/common/splide-post', null, $args);
    }
    ?>
  </div>
</div>
<?php
?>












