<?php
$post_type = 'works';
$link_post_type = $post_type;
if (wp_is_mobile()) {
  $posts_per_page = 2;
} else {
  $posts_per_page = 4;
}

$args = array(
  'post_type' => $post_type,
  'posts_per_page' => $posts_per_page,
  'order' => 'DESC', //降順
  'orderby' => 'date', //日付で並び替える
);
?>
<section class="post-list">
  <div class="post-list__wrap">
    <div class="post-list__inner container">
      <h2 class="post-list__title">
        Works
      </h2>
      <div class="post-list__wrap">
        <ul class="post-list__items">
          <?php get_template_part('parts/post/post-list-subloop', null, $args); ?>
        </ul>
      </div>
      <div class="post-list__btn">
        <a class="button" href="<?php echo esc_url(home_url($link_post_type)); ?>">詳しく見る</a>
      </div>
    </div>
  </div>
</section>












