<!-- スライダーのコンテナを作成 -->
<div id="<?php echo esc_attr($args['post_type']); ?>" class="splide">
  <div class="splide__track">
    <div class="splide__list">
      <?php
      // 新規WP_Queryオブジェクトを作成し、クエリを実行
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) : // 投稿がある場合
        while ($the_query->have_posts()) : $the_query->the_post(); // 投稿ループの開始
          // 各フィールドの情報を取得
          //　PC用画像
          $image_pc_id = get_post_meta(get_the_ID(), 'slide_img_pc', true);
          $image_pc_src = wp_get_attachment_image_src($image_pc_id, 'large')[0] ?? '';
          //　SP用画像
          $image_sp_id = get_post_meta(get_the_ID(), 'slide_img_sp', true);
          $image_sp_src = wp_get_attachment_image_src($image_sp_id, 'large')[0] ?? '';

          $image_alt = get_post_meta(get_the_ID(), 'slide_img_alt', true);
          $image_url = get_post_meta(get_the_ID(), 'slide_img_url', true);
          $image_tab = get_post_meta(get_the_ID(), 'slide_img_tab', true) == 1 ? '_blank' : '_self'; // 新規タブで開くかどうかを指定
          // $image_text = get_post_meta(get_the_ID(), 'slide_img_text', true);

          // リンクが設定されている場合、a要素を作成。そうでない場合、div要素を作成
          if (!empty($image_pc_src)) :
            $tag = !empty($image_url) ? 'a' : 'div';
            $href = !empty($image_url) ? ' href="' . esc_url($image_url) . '" target="' . esc_attr($image_tab) . '" rel="noreferrer noopener"' : '';
            ?>
            <<?php echo $tag . $href; ?> class="splide__slide">
              <picture>
                <!-- スマホ用画像とPC用画像を指定 -->
                <!-- スマホ用画像が設定されていない場合、sourceタグは出力しない -->
                <?php if (!empty($image_sp_src)) : ?>
                  <source media="(max-width: 767px)" srcset="<?php echo esc_url($image_sp_src); ?>">
                <?php endif; ?>
                <img src="<?php echo esc_url($image_pc_src); ?>" alt="<?php echo esc_attr($image_alt); ?>" loading="lazy">
              </picture>

              <!-- リンクが設定されている場合、a要素を閉じる。そうでない場合、div要素を閉じる -->
            </<?php echo $tag; ?>>
          <?php
          endif;
        endwhile;
      endif;
      wp_reset_postdata(); // クエリをリセット
      ?>
    </div>
  </div>
</div>












