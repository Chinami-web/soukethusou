<div class="post-connect">
  <div class="post-connect__inner container">
    <?php
      $current_post_type = get_post_type(get_the_ID());
      $current_category = get_the_category();
      $args = array(
        'post_type' => array($current_post_type),
        'posts_per_page' => 6, //取得する件数
        'post__not_in' => array($post->ID), //現在の記事は含めない
        'order'  => 'DESC',
        'orderby' => 'date', //日付で並び替える
        'cat' => $current_category[0]->term_id,
      );
      // カスタム投稿でカテゴリを設定しない場合に備えて別途定義
      if (!empty($current_category)) {
        $args['cat'] = $current_category[0]->term_id;
      }
      $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
      <div class="splide" id="post-connect-slider">
        <div class="splide__track">
          <ul class="splide__list post-connect__items">
            <!-- ループ -->
            <?php while ($the_query->have_posts()) : ?>
              <?php
              $the_query->the_post();
              ?>
              <!-- post-cardの内容を直接記述してクラスを統合 -->
              <li class="splide__slide post-card">
                <a href="<?php the_permalink(); ?>" class="post-card__link">
                  <?php
                  if (has_post_thumbnail()) {
                    $thumbID = get_post_thumbnail_id($post->ID);
                    $thumbAlt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);
                    $image_url = get_the_post_thumbnail_url($post->ID, 'large');
                  } else {
                    $image_url = get_template_directory_uri() . '/assets/images/common/template.png';
                    $thumbAlt = "";
                  }
                  ?>
                  <div class="post-card__body">
                    <figure class="post-card__img">
                      <img src="<?php echo $image_url; ?>" alt="<?php echo $thumbAlt; ?>" loading="lazy">
                    </figure>
                    <div class="post-card__title">
                      <?php the_title(); ?>
                    </div>
                  </div>
                </a>
              </li>
            <?php endwhile;
            ?>
          </ul>
        </div>
      </div>
    <?php else : ?>
      <p>該当の記事はありません</p>
    <?php endif; ?>
  </div>
</div>
