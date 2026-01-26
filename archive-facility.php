<?php get_header(); ?>
< class="main">
  <section class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/fv.jpg" alt="ページヘッダー画像"
          width="1920"
          height="1080">
      </div>
      <div class="page-mv__title mincho">
        <h1 class="page-mv__title-text">葬儀場を探す</h1>
      </div>
    </div>
  </section>
  <div class="page-facility">
    <div class="l-inner">
      <?php
      // facility-pinの設定配列（両方のセクションで使用）
      $facility_pins = array(
        array('label' => '東松山', 'x' => '56.9%', 'y' => '22.0%', 'image' => 'higasimatuyama'),
        array('label' => '川越', 'x' => '67.2%', 'y' => '31.2%', 'image' => 'kawagoe'),
        array('label' => 'ふじみ野', 'x' => '70.6%', 'y' => '49.9%', 'image' => 'huzimino'),
        array('label' => 'みずほ台', 'x' => '82.7%', 'y' => '34.0%', 'image' => 'mizuhodai'),
        array('label' => '志木', 'x' => '84.8%', 'y' => '61.6%', 'image' => 'siki'),
        array('label' => '朝霞', 'x' => '83.8%', 'y' => '81.8%', 'image' => 'asaka'),
        array('label' => '新座', 'x' => '65.2%', 'y' => '91.5%', 'image' => 'niiza'),
        array('label' => '所沢', 'x' => '50.3%', 'y' => '86.6%', 'image' => 'tokorozawa'),
        array('label' => '入間', 'x' => '41.0%', 'y' => '67.9%', 'image' => 'iruma'),
        array('label' => '狭山', 'x' => '38.0%', 'y' => '48.3%', 'image' => 'sayama'),
        array('label' => '坂戸', 'x' => '48.8%', 'y' => '47.4%', 'image' => 'sakado'),
        array('label' => '坂戸駅前', 'x' => '46.5%', 'y' => '25.4%', 'image' => 'sakadoekimae'),
      );

      // ラベルからimage（スライドID）へのマッピングを作成
      $facility_label_image_map = array();
      foreach ($facility_pins as $pin) {
        $facility_label_image_map[$pin['label']] = $pin['image'];
      }
      ?>
      <h2 class="vertical-border-title">
        <span class="vertical-border-title__single-border single-border"></span>
        式場紹介
      </h2>

      <div class="facility-map__container">
        <div class="facility-map__description-wrapper">
          <p class="facility-map__description heisei">
            自社施設だからできる、柔軟な対応と安心感。直営ホールのほか、<br class="pc-only">
            公営斎場・ご自宅・寺院でもお葬式を行うことができます。<br>
            それぞれの会場の特徴を活かし、プライベートな空間で心やすらぐお見送りをサポートします。
          </p>
        </div>
        <div class="facility-map__notion-wrapper">
          <p class="facility-map__notion">
            60ヵ所以上の提携式場や地域の公営斎場でも<br>ご葬儀を行っていただけます。
          </p>
        </div>

        <!-- <div class="facility-map__button-wrapper">
          <a class="button button-solid" href="#">
            <span></span>
            <span></span>
            施設一覧をみる
          </a>
        </div> -->
        <div class="facility-map__selling-wrapper">
          <p class="facility-map__selling">
            埼玉県内に
            <span>12ヵ所の自社葬儀場</span>
          </p>
        </div>
        <div class="facility-map js-fade-up">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/map.png" alt="施設マップ" class="facility-map__bg" width="1171" height="738" loading="lazy">
          <?php
          // 施設の投稿データを取得して、ラベルとスラッグのマッピングを作成
          $facility_pin_query = new WP_Query(
            array(
              'post_type' => 'facility',
              'posts_per_page' => -1,
              'orderby' => 'menu_order',
              'order' => 'ASC',
            )
          );
          // ラベルから投稿スラッグへのマッピングを作成
          $facility_label_to_slug_map = array();
          if ($facility_pin_query->have_posts()) {
            while ($facility_pin_query->have_posts()) {
              $facility_pin_query->the_post();
              $post_id = get_the_ID();
              $facility_label = get_post_meta($post_id, 'facility_label', true);
              $facility_slug = get_post_field('post_name', $post_id);
              // ラベルが設定されている場合は、ラベルをキーとしてスラッグを保存
              if ($facility_label) {
                $facility_label_to_slug_map[trim($facility_label)] = $facility_slug;
              }
              // タイトルもキーとして保存（念のため）
              $facility_title = get_the_title();
              $facility_label_to_slug_map[trim($facility_title)] = $facility_slug;
            }
            wp_reset_postdata();
          }

          foreach ($facility_pins as $pin) {
            $pin_label = $pin['label'];
            // ラベルから投稿スラッグを取得（投稿スラッグをそのまま使用）
            $pin_slug = isset($facility_label_to_slug_map[$pin_label]) ? $facility_label_to_slug_map[$pin_label] : $pin['image'];
            $pin_href = '#' . esc_attr($pin_slug);
          ?>
            <a href="<?php echo $pin_href; ?>" class="facility-pin" style="--x:<?php echo esc_attr($pin['x']); ?>; --y:<?php echo esc_attr($pin['y']); ?>;" data-facility-slug="<?php echo esc_attr($pin_slug); ?>">
              <span class="facility-pin__label"><?php echo esc_html($pin_label); ?></span>
              <figure class="facility-pin__img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/<?php echo esc_attr($pin['image']); ?>.png" alt="<?php echo esc_attr($pin_label); ?>">
              </figure>
            </a>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
    <div class="facility-grid">
      <div class="l-inner">

        <?php
        $facility_query = new WP_Query(
          array(
            'post_type' => 'facility',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
          )
        );
        ?>
        <?php if ($facility_query->have_posts()): ?>
          <ul class="facility-grid__list main-card__list">
            <?php while ($facility_query->have_posts()): $facility_query->the_post(); ?>
              <?php
              $post_id = get_the_ID();
              $post_slug = get_post_field('post_name', $post_id);
              $label = get_post_meta($post_id, 'facility_label', true);
              $label_text = $label ? $label : 'プライベートホール';
              $label_text = preg_replace('/([ー]+)/u', '<span class="main-card__label-long-vowel">$1</span>', $label_text);
              $address = get_post_meta($post_id, 'facility_address', true);
              $address_text = $address ? $address : '';
              $tags_raw = get_post_meta($post_id, 'facility_tags', true);
              $tags = array_filter(array_map('trim', preg_split('/[\r\n,]+/', $tags_raw)));
              $thumb_ids = array_filter(array(
                get_post_meta($post_id, 'facility_thumb_1', true),
                get_post_meta($post_id, 'facility_thumb_2', true),
              ));
              $hero_id = get_post_thumbnail_id($post_id);
              $hero = $hero_id ? get_the_post_thumbnail_url($post_id, 'large') : '';
              $hero_alt = $hero_id ? get_post_meta($hero_id, '_wp_attachment_image_alt', true) : '';
              if (!$hero) {
                $hero = get_template_directory_uri() . '/assets/images/top/image09.jpg';
              }
              if (!$hero_alt) {
                $hero_alt = get_the_title();
              }
              ?>
              <li class="main-card__item" id="<?php echo esc_attr($post_slug); ?>">
                <a class="main-card__link" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr(get_the_title() . 'の詳細ページへ'); ?>"></a>
                <div class="main-card__content">
                  <figure class="main-card__hero">
                    <img src="<?php echo esc_url($hero); ?>" alt="<?php echo esc_attr($hero_alt); ?>" loading="lazy">
                  </figure>
                  <?php if (!empty($thumb_ids)): ?>
                    <div class="main-card__thumbs">
                      <?php foreach ($thumb_ids as $index => $thumb_id): ?>
                        <?php
                        $thumb_id = intval($thumb_id);
                        $thumb_src = wp_get_attachment_image_url($thumb_id, 'large');
                        $thumb_alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                        if (!$thumb_alt) {
                          $thumb_alt = get_the_title();
                        }
                        ?>
                        <?php if ($thumb_src): ?>
                          <figure class="main-card__thumb">
                            <img src="<?php echo esc_url($thumb_src); ?>" alt="<?php echo esc_attr($thumb_alt); ?>" loading="lazy">
                          </figure>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                  <div class="main-card__info">
                    <p class="main-card__name heisei"><span class="main-card__name-mark">○</span> <?php the_title(); ?></p>
                    <?php if ($address_text): ?>
                      <p class="main-card__address"><?php echo esc_html($address_text); ?></p>
                    <?php endif; ?>
                    <?php if (!empty($tags)): ?>
                      <div class="main-card__tags">
                        <?php foreach ($tags as $tag): ?>
                          <span class="main-card__tag"><?php echo esc_html($tag); ?></span>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>
                  </div>
                  <div class="main-card__button-wrapper pc-only">
                    <div class="button button-solid" href="<?php the_permalink(); ?>">
                      <span></span>
                      <span></span>
                      ホール詳細
                    </div>
                  </div>
                </div>
                <p class="main-card__label">
                  <span class="main-card__label-mark">○</span>
                  <span class="main-card__label-text">
                    <?php echo wp_kses($label_text, array('span' => array('class' => array()))); ?>
                  </span>
                </p>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif;
        wp_reset_postdata(); ?>

      </div>
    </div>

    <!-- 提携式場＆公営斎場のご案内 -->


    <!-- 想結葬式場の魅力と特長 -->
    <section class="page-director-block">
      <div class="left-title">
        想結葬式場の魅力と特長
      </div>
      <div class="page-director-block__container">
        <div class="page-director-block__container-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/image05.jpg" alt="想結葬のディレクターの画像"
            width="1671"
            height="796">
        </div>
        <div class="page-director-block__container-wrapper">
          <div class="page-director-block__container-title mincho">
            心に寄り添う人がいるから、<br>
            安心できる最期の時間に。
          </div>
          <div class="page-director-block__container-text">
            <p>
              大切な人との最期の時間をゆっくりと過ごせます。想結葬ではご家族の想いを何よりも大切にし、プライベートな空間で「想い」を結ぶ特別な時間をお届けします。
            </p>
          </div>
          <ul class="page-facility-list">
            <li class="page-facility-list__item">

              <div class="page-facility-list__item-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/image01.jpg" alt="お迎え">
              </div>
              <div class="page-facility-list__item-title-wrapper">
                <h3 class="page-facility-list__item-title">もしもの時の安心感
                  <span class="page-facility-list__item-title-border main-border"></span>
                </h3>
              </div>
              <div class="page-facility-list__item-text-wrapper">
                <p class="page-facility-list__item-text">
                  東武東上線・西武線エリアを中心に幅広くカバーしています。安心してご利用いただける様、近隣に式場があることで、もしもの時にはすぐにお迎えできる安心感があります。スタッフが常駐しているので、事前相談や見学も気軽にご相談いただけ、地域に根差した温かい対応が魅力です。
                </p>
              </div>
            </li>
            <li class="page-facility-list__item">

              <div class="page-facility-list__item-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/image02.jpg" alt="お迎え">
              </div>
              <div class="page-facility-list__item-title-wrapper">
                <h3 class="page-facility-list__item-title">プライベートを守る空間設計
                  <span class="page-facility-list__item-title-border main-border"></span>
                </h3>
              </div>
              <div class="page-facility-list__item-text-wrapper">
                <p class="page-facility-list__item-text">
                  すべてのホールは1フロア1式場のため、参列されるすべての皆様が気兼ねなく過ごせる空間づくりを目指し、大切な人と向き合える環境を整えています。
                </p>
              </div>
            </li>
            <li class="page-facility-list__item">

              <div class="page-facility-list__item-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/image03.jpg" alt="お迎え">
              </div>
              <div class="page-facility-list__item-title-wrapper">
                <h3 class="page-facility-list__item-title">ご自宅のようにくつろげる控室
                  <span class="page-facility-list__item-title-border main-border"></span>
                </h3>
              </div>
              <div class="page-facility-list__item-text-wrapper">
                <p class="page-facility-list__item-text">
                  親族控室は、リビングスペースやバスルームが完備されており、自宅にいるようなリラックス感を味わえます。遠方から来られるご親族も、安心して心と体を休めながら大切な時間を過ごしていただけます。
                </p>
              </div>
            </li>
            <li class="page-facility-list__item">

              <div class="page-facility-list__item-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/image04.jpg" alt="お迎え">
              </div>
              <div class="page-facility-list__item-title-wrapper">
                <h3 class="page-facility-list__item-title">安心と安全の設備
                  <span class="page-facility-list__item-title-border main-border"></span>
                </h3>
              </div>
              <div class="page-facility-list__item-text-wrapper">
                <p class="page-facility-list__item-text">
                  全館耐震設計でAEDも設置し、万が一の際にも迅速な対応が可能です。十分な専用駐車場を完備しており、遠方からの参列者にも安心です。さらに、式場内には「想いを形にする」演出スペースがあり、思い出の展示や故人の個性を表現する特別な空間演出が可能です。
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="public-facility">
      <div class="l-inner">
        <h2 class="public-facility__title">
          提携式場＆公営斎場のご案内
          <span class="main-border"></span>
        </h2>
        <div class="public-facility__lead-wrapper">
          <p class="public-facility__lead">
            地域の特性やご家族のご希望に合わせて、最適な会場をご提案します。どの場所でも想結葬ならではの心のこもったお別れを実現できますので、安心してご相談ください。
          </p>
        </div>

        <?php
        // データ定義
        $public_data = [
          'saitama' => [
            'label' => '埼玉県',
            'cities' => [
              'niiza' => '新座市',
              'asaka' => '朝霞市',
              'shiki' => '志木市',
              'fujimi' => '富士見市',
              'miyoshi' => '三芳町',
              'kawagoe' => '川越市',
              'tsurugashima' => '鶴ヶ島市',
              'sakado' => '坂戸市',
              'higashimatsuyama' => '東松山市',
              'hidaka' => '日高市',
              'hanno' => '飯能市',
              'tokorozawa' => '所沢市',
              'iruma' => '入間市',
              'hatoyama' => '鳩山町',
              'saitama' => 'さいたま市',
              'kawaguchi' => '川口市',
              'warabi' => '蕨市'
            ],
            // 施設データ（川越市のみ実装）
            'facilities' => [
              'kawagoe' => [
                ['name' => '市民聖苑やすらぎのさと', 'img' => 'image01.jpg'],
                ['name' => '蓮馨寺講堂', 'img' => 'image02.jpg'],
                ['name' => '最明寺道心殿', 'img' => 'image03.jpg'],
                ['name' => '喜多院斎霊殿', 'img' => 'image04.jpg'],
                ['name' => '福昌寺会館', 'img' => 'image01.jpg'],
                ['name' => '萬久院会館', 'img' => 'image02.jpg'],
              ]
            ]
          ],
          'tokyo' => [
            'label' => '東京都',
            'cities' => [
              'dummy1' => 'エリア1',
              'dummy2' => 'エリア2'
            ],
            'facilities' => [
              'dummy1' => [
                ['name' => 'ダミー施設1', 'img' => 'image03.jpg'],
              ]
            ]
          ]
        ];
        ?>

        <div class="public-facility__tabs">
          <?php foreach ($public_data as $key => $data): ?>
            <button class="public-facility__tab js-public-tab <?php echo $key === 'saitama' ? 'is-active' : ''; ?>" data-pref="<?php echo $key; ?>">
              <?php echo $data['label']; ?>
            </button>
          <?php endforeach; ?>
        </div>

        <div class="public-facility__content">
          <?php foreach ($public_data as $pref_key => $data): ?>
            <div class="public-facility__areas js-public-area-list <?php echo $pref_key === 'saitama' ? 'is-active' : ''; ?>" id="area-<?php echo $pref_key; ?>">
              <div class="public-facility__area-grid">
                <?php foreach ($data['cities'] as $city_key => $city_name): ?>
                  <button class="public-facility__area-btn js-public-area-btn <?php echo ($pref_key === 'saitama' && $city_key === 'kawagoe') ? 'is-active' : ''; ?>" data-pref="<?php echo $pref_key; ?>" data-city="<?php echo $city_key; ?>">
                    <?php echo $city_name; ?>
                  </button>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>

          <div class="public-facility__list-wrapper">
            <ul class="public-facility__list">
              <?php foreach ($public_data as $pref_key => $data): ?>
                <?php if (isset($data['facilities'])): ?>
                  <?php foreach ($data['facilities'] as $city_key => $facilities): ?>
                    <?php foreach ($facilities as $facility): ?>
                      <li class="public-facility__item js-public-item <?php echo ($pref_key === 'saitama' && $city_key === 'kawagoe') ? 'is-active' : ''; ?>" data-pref="<?php echo $pref_key; ?>" data-city="<?php echo $city_key; ?>">
                        <figure class="public-facility__item-img">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/saitama/<?php echo $facility['img']; ?>" alt="<?php echo $facility['name']; ?>" loading="lazy">
                        </figure>
                        <p class="public-facility__item-name heisei"><?php echo $facility['name']; ?></p>
                      </li>
                    <?php endforeach; ?>
                  <?php endforeach; ?>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>

    <?php get_template_part('parts/project/relation-parts'); ?>


</main>
<?php get_footer(); ?>
