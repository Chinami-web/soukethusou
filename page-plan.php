<?php get_header(); ?>
<main class="main">
  <section class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flow/fv.jpg" alt="ページヘッダー画像"
          width="1920"
          height="1080">
      </div>
      <div class="page-mv__title mincho">
        <h1 class="page-mv__title-text">プラン・費用</h1>
      </div>
    </div>
  </section>
  <div class="page-plan">

    <section class="page-plan__title">
      <div class="l-inner">
        <h2 class="border-title">
          <span>想結葬の考え方</span>
          <span class="border-title__main-border main-border"></span>
        </h2>
        <ul class="plan-card__list">
          <li class="plan-card__item">
            <figure class="plan-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image01.jpg" alt="葬儀プラン・費用案内の画像"
                width="777"
                height="449"
                loading="lazy">
            </figure>
            <ul class="plan-card__images">
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image01.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168"
                  loading="lazy">
              </li>
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image01.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168">
              </li>
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image01.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168">
              </li>
            </ul>
            <div class="plan-card__title-wrapper">
              <div class="plan-card__title-left">
                <span class="plan-card__title-subtitle">
                  想結葬の家族葬
                </span>
                <h3 class="plan-card__title-text heisei">
                  家族葬 プラン
                </h3>
              </div>
              <div class="plan-card__title-right">
                <div class="plan-card__price-normal-wrapper">
                  <p class="plan-card__price-label">通常価格</p>
                  <p class="plan-card__price-amount-wrap">
                    <span class="plan-card__price-amount delete-line">542,000円</span>
                    <span class="plan-card__price-tax">（税抜）</span>
                  </p>
                  <p class="plan-card__price-tax-in">（税込 596,200円）</p>
                </div>
                <div class="plan-card__price-arrow"></div>
                <div class="plan-card__price-special-wrapper">
                  <div class="plan-card__discount-banner">資料請求で50,000円割引</div>
                  <div class="plan-card__price-special-content">
                    <div class="plan-card__price-special-label">資料請求<br>特別価格</div>
                    <div class="plan-card__price-special-amount-wrap">
                      <span class="plan-card__price-special-amount heisei">492,000円</span>
                      <span class="plan-card__price-special-tax">（税抜）</span>
                    </div>
                  </div>
                  <p class="plan-card__price-special-tax-in">（税込 541,200円）</p>
                </div>
                <p class="plan-card__price-note">※本プランはお見積り作成時での事前の申告が必要となります。</p>
              </div>
              <div class="plan-card__text">
              ご家族中心でゆったり見送るお葬式
              </div>
            </div>
            <div class="plan-card__body">
              <div class="plan-card__list">
                <ul class="plan-card__list-items">
                  <li class="plan-card__list-item">
                    白木祭壇を中心に、両側に生花を飾る伝統的な設え。厳かな雰囲気を大切にしたい方へ。
                  </li>
                  <li class="plan-card__list-item">
                    ご年配の親族が多く、格式を重視される方。昔ながらのスタイルを希望されるご家族に。
                  </li>
                </ul>
              </div>
            </div>
            <div class="plan-card__drawer">
              <div class="plan-card__drawer-wrapper">
                <p class="plan-card__drawer-text">
                  含まれるもの
                </p>
              </div>
              <div class="plan-card__drawer-content">
                <!-- PC用: 一覧表示 -->
                <ul class="plan-card__icon-list pc-only">
                  <?php for ($i = 1; $i <= 23; $i++): ?>
                    <li class="plan-card__icon-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                    </li>
                  <?php endfor; ?>
                </ul>
                <!-- SP用: スライダー表示 -->
                <div class="plan-card__icon-slider splide js-plan-icon-slider sp-only">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <?php
                      $icon_range = range(1, 23);
                      $icon_chunks = array_chunk($icon_range, 9);
                      foreach ($icon_chunks as $chunk):
                      ?>
                      <li class="splide__slide">
                        <div class="plan-card__icon-group">
                          <?php foreach ($chunk as $i): ?>
                            <div class="plan-card__icon-item">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                            </div>
                          <?php endforeach; ?>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
                <p class="plan-card__drawer-text">プラン料金についてプランには葬儀の基本的な内容が含まれています。火葬費・飲食費・返礼品・式場利用費などご希望やご利用内容に応じ別途費用となります。
                <span>※事前にお見積りをご提示し、ご納得いただいた上で進めてまいります。ご不明点はお気軽にご相談ください。</span>
                </p>
              </div>
            </div>
          <ul class="plan-card-box-list">
            <li class="plan-card-box-list__item">
              <h4 class="plan-card-box-list__item-title pc-only">
                事例紹介
              </h4>

              <div class="plan-card-box-list__item-image-wrapper">
                <figure class="plan-card-box-list__item-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image05.jpg" alt="葬儀プラン・費用案内の画像">
                </figure>
                <span class="plan-card-box-list__item-image-label">
                （朝霞市／50代男性）
                </span>
              </div>
              <p class="plan-card-box-list__item-text">
                限られた時間でしたが、家族でしっかり想いを伝えられました。
              </p>
            </li>
            <li class="plan-card-box-list__item">
              <h4 class="plan-card-box-list__item-title">
              スタッフからの一言
              </h4>

              <div class="plan-card-box-list__item-image-wrapper">
                <figure class="plan-card-box-list__item-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image06.jpg" alt="葬儀プラン・費用案内の画像">
                </figure>
              </div>
              <p class="plan-card-box-list__item-text">
                限られた時間でしたが、家族でしっかり想いを伝えられました。
              </p>
            </li>

          </ul>
          <div class="plan-card__btn-wrapper">
            <a class="plan-card__btn" href="<?php echo esc_url(home_url('/contact/')); ?>">
              <span></span>
              <span></span>
              お見積り・ご相談
            </a>
          </div>
            <div class="plan-card__label">
              <span>○</span>
              家族葬
            </div>
          </li>
          <li class="plan-card__item">
            <figure class="plan-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image02.jpg" alt="葬儀プラン・費用案内の画像"
                width="777"
                height="449"
                loading="lazy">
            </figure>
            <ul class="plan-card__images">
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image02.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168"
                  loading="lazy">
              </li>
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image02.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168">
              </li>
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image02.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168">
              </li>
            </ul>
            <div class="plan-card__title-wrapper">
              <div class="plan-card__title-left">
                <span class="plan-card__title-subtitle">
                  想結葬の一日葬
                </span>
                <h3 class="plan-card__title-text heisei">
                  一日葬 プラン
                </h3>
                <p class="plan-card__title-description">
                  通夜をせず、告別式と火葬を一日で行うお葬式
                </p>
              </div>
              <div class="plan-card__title-right">
                <div class="plan-card__price-normal-wrapper">
                  <p class="plan-card__price-label">通常価格</p>
                  <p class="plan-card__price-amount-wrap">
                    <span class="plan-card__price-amount delete-line">542,000円</span>
                    <span class="plan-card__price-tax">（税抜）</span>
                  </p>
                  <p class="plan-card__price-tax-in">（税込 596,200円）</p>
                </div>
                <div class="plan-card__price-arrow"></div>
                <div class="plan-card__price-special-wrapper">
                  <div class="plan-card__discount-banner">資料請求で50,000円割引</div>
                  <div class="plan-card__price-special-content">
                    <div class="plan-card__price-special-label">資料請求<br>特別価格</div>
                    <div class="plan-card__price-special-amount-wrap">
                      <span class="plan-card__price-special-amount heisei">492,000円</span>
                      <span class="plan-card__price-special-tax">（税抜）</span>
                    </div>
                  </div>
                  <p class="plan-card__price-special-tax-in">（税込 541,200円）</p>
                </div>
                <p class="plan-card__price-note">※本プランはお見積り作成時での事前の申告が必要となります。</p>
              </div>
            </div>
            <div class="plan-card__text">
            ご家族中心でゆったり見送るお葬式
            </div>
            <div class="plan-card__body">
              <div class="plan-card__list">
                <ul class="plan-card__list-items">
                  <li class="plan-card__list-item">
                    ご家族や親しい方々と落ち着いた雰囲気の中で、しっかりとお別れの時間をお過ごしいただけます。
                  </li>
                  <li class="plan-card__list-item">
                    通夜がないため準備や移動の負担を抑えられ、一日で儀式を終えられる点が大きなメリットです。
                  </li>
                  <li class="plan-card__list-item">
                    伝統的な白木祭壇、故人の個性に合わせた花祭壇をお選びいただくことも可能です。 
                  </li>
                </ul>
              </div>
              <div class="plan-card__btn pc-only">
                <a class="button button-solid" href="<?php echo esc_url(home_url('/plan/')); ?>">
                  <span></span>
                  <span></span>
                  プラン詳細をみる
                </a>
              </div>
            </div>
            <div class="plan-card__drawer">
              <div class="plan-card__drawer-wrapper">
                <p class="plan-card__drawer-text">
                  含まれるもの
                </p>
              </div>
              <div class="plan-card__drawer-content">
                <!-- PC用: 一覧表示 -->
                <ul class="plan-card__icon-list pc-only">
                  <?php
                  $icon_numbers = [1, 2, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36];
                  foreach ($icon_numbers as $i): ?>
                    <li class="plan-card__icon-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                    </li>
                  <?php endforeach; ?>
                </ul>
                <!-- SP用: スライダー表示 -->
                <div class="plan-card__icon-slider splide js-plan-icon-slider sp-only">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <?php
                      $icon_chunks = array_chunk($icon_numbers, 9);
                      foreach ($icon_chunks as $chunk): ?>
                        <li class="splide__slide">
                          <div class="plan-card__icon-group">
                            <?php foreach ($chunk as $i): ?>
                              <div class="plan-card__icon-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                              </div>
                            <?php endforeach; ?>
                          </div>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="plan-card__label">
              <span>○</span>
              一日葬
            </div>
          </li>
          <li class="plan-card__item">
            <figure class="plan-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image03.jpg" alt="葬儀プラン・費用案内の画像"
                width="777"
                height="449"
                loading="lazy">
            </figure>
            <ul class="plan-card__images">
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image03.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168"
                  loading="lazy">
              </li>
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image03.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168">
              </li>
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image03.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168">
              </li>
            </ul>
            <div class="plan-card__title-wrapper">
              <div class="plan-card__title-left">
                <span class="plan-card__title-subtitle">
                  想結葬の一般葬
                </span>
                <h3 class="plan-card__title-text heisei">
                  一般葬 プラン
                </h3>
                <p class="plan-card__title-description">
                  多くの方々と故人を偲ぶ伝統的な葬儀
                </p>
              </div>
              <div class="plan-card__title-right">
                <div class="plan-card__price-normal-wrapper">
                  <p class="plan-card__price-label">通常価格</p>
                  <p class="plan-card__price-amount-wrap">
                    <span class="plan-card__price-amount delete-line">1,343,000円</span>
                    <span class="plan-card__price-tax">（税抜）</span>
                  </p>
                  <p class="plan-card__price-tax-in">（税込 1,477,300円）</p>
                </div>
                <div class="plan-card__price-arrow"></div>
                <div class="plan-card__price-special-wrapper">
                  <div class="plan-card__discount-banner">資料請求で50,000円割引</div>
                  <div class="plan-card__price-special-content">
                    <div class="plan-card__price-special-label">資料請求<br>特別価格</div>
                    <div class="plan-card__price-special-amount-wrap">
                      <span class="plan-card__price-special-amount heisei">1,293,000円</span>
                      <span class="plan-card__price-special-tax">（税抜）</span>
                    </div>
                  </div>
                  <p class="plan-card__price-special-tax-in">（税込 1,422,300円）</p>
                </div>
                <p class="plan-card__price-note">※本プランはお見積り作成時での事前の申告が必要となります。</p>
              </div>
            </div>
            <div class="plan-card__body">
              <div class="plan-card__list">
                <ul class="plan-card__list-items">
                  <li class="plan-card__list-item">
                    通夜・告別式を通じて、伝統的な儀式として丁寧に故人をお見送りできます。 
                  </li>
                  <li class="plan-card__list-item">
                    花祭壇のデザインをお選びいただけるため、故人の個性や想いに合わせたお別れができます。
                  </li>
                  <li class="plan-card__list-item">
                    親族や友人ゆかりの方々と共に、「しっかりと見送ってあげたい」そんな方におすすめです。 </li>
                </ul>
              </div>
              <div class="plan-card__btn pc-only">
                <a class="button button-solid" href="<?php echo esc_url(home_url('/plan/')); ?>">
                  <span></span>
                  <span></span>
                  プラン詳細をみる
                </a>
              </div>
            </div>
            <div class="plan-card__drawer">
              <div class="plan-card__drawer-wrapper">
                <p class="plan-card__drawer-text">
                  含まれるもの
                </p>
              </div>
              <div class="plan-card__drawer-content">
                <!-- PC用: 一覧表示 -->
                <ul class="plan-card__icon-list pc-only">
                  <?php for ($i = 1; $i <= 27; $i++): ?>
                    <li class="plan-card__icon-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                    </li>
                  <?php endfor; ?>
                </ul>
                <!-- SP用: スライダー表示 -->
                <div class="plan-card__icon-slider splide js-plan-icon-slider sp-only">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <?php
                      $icon_range = range(1, 27);
                      $icon_chunks = array_chunk($icon_range, 9);
                      foreach ($icon_chunks as $chunk):
                      ?>
                      <li class="splide__slide">
                        <div class="plan-card__icon-group">
                          <?php foreach ($chunk as $i): ?>
                            <div class="plan-card__icon-item">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                            </div>
                          <?php endforeach; ?>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="plan-card__label">
              <span>○</span>
              一般葬
            </div>
          </li>
          <li class="plan-card__item">
            <figure class="plan-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image04.jpg" alt="葬儀プラン・費用案内の画像"
                width="777"
                height="449"
                loading="lazy">
            </figure>
            <ul class="plan-card__images">
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image04.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168"
                  loading="lazy">
              </li>
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image04.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168">
              </li>
              <li class="plan-card__image-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image04.jpg" alt="葬儀プラン・費用案内の画像"
                  width="331"
                  height="168">
              </li>
            </ul>
            <div class="plan-card__title-wrapper">
              <div class="plan-card__title-left">
                <span class="plan-card__title-subtitle">
                  想結葬の火葬式
                </span>
                <h3 class="plan-card__title-text heisei">
                  火葬式 プラン
                </h3>
                <p class="plan-card__title-description">
                  火葬だけのシンプルなお見送り
                </p>
              </div>
              <div class="plan-card__title-right">
                <div class="plan-card__price-normal-wrapper">
                  <p class="plan-card__price-label">通常価格</p>
                  <p class="plan-card__price-amount-wrap">
                    <span class="plan-card__price-amount delete-line">272,000円</span>
                    <span class="plan-card__price-tax">（税抜）</span>
                  </p>
                  <p class="plan-card__price-tax-in">（税込 299,200円）</p>
                </div>
                <div class="plan-card__price-arrow"></div>
                <div class="plan-card__price-special-wrapper">
                  <div class="plan-card__discount-banner">資料請求で50,000円割引</div>
                  <div class="plan-card__price-special-content">
                    <div class="plan-card__price-special-label">資料請求<br>特別価格</div>
                    <div class="plan-card__price-special-amount-wrap">
                      <span class="plan-card__price-special-amount heisei">222,000円</span>
                      <span class="plan-card__price-special-tax">（税抜）</span>
                    </div>
                  </div>
                  <p class="plan-card__price-special-tax-in">（税込 244,200円）</p>
                </div>
                <p class="plan-card__price-note">※本プランはお見積り作成時での事前の申告が必要となります。</p>
              </div>
            </div>
            <div class="plan-card__body">
              <div class="plan-card__list">
                <ul class="plan-card__list-items">
                  <li class="plan-card__list-item">
                    ごく親しい家族だけで、静かに故人との最期の時間をお過ごしいただけます。
                  </li>
                  <li class="plan-card__list-item">
                    費用やご家族の負担をできるだけ抑えたい方、参列を家族だけにしたい方に選ばれています。
                  </li>
                  <li class="plan-card__list-item">
                    儀式にこだわらない方でも、手続きを最小限にし、無理のない形でお別れいただけます。
                  </li>
                </ul>
              </div>
              <div class="plan-card__btn pc-only">
                <a class="button button-solid" href="<?php echo esc_url(home_url('/plan/')); ?>">
                  <span></span>
                  <span></span>
                  プラン詳細をみる
                </a>
              </div>
            </div>
            <div class="plan-card__drawer">
              <div class="plan-card__drawer-wrapper">
                <p class="plan-card__drawer-text">
                  含まれるもの
                </p>
              </div>
              <div class="plan-card__drawer-content">
                <!-- PC用: 一覧表示 -->
                <ul class="plan-card__icon-list pc-only">
                  <?php for ($i = 1; $i <= 27; $i++): ?>
                    <li class="plan-card__icon-item">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                    </li>
                  <?php endfor; ?>
                </ul>
                <!-- SP用: スライダー表示 -->
                <div class="plan-card__icon-slider splide js-plan-icon-slider sp-only">
                  <div class="splide__track">
                    <ul class="splide__list">
                      <?php
                      $icon_range = range(1, 27);
                      $icon_chunks = array_chunk($icon_range, 9);
                      foreach ($icon_chunks as $chunk):
                      ?>
                      <li class="splide__slide">
                        <div class="plan-card__icon-group">
                          <?php foreach ($chunk as $i): ?>
                            <div class="plan-card__icon-item">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                            </div>
                          <?php endforeach; ?>
                        </div>
                      </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="plan-card__label">
              <span>○</span>
              火葬式
            </div>
          </li>
        </ul>
      </div>
    </section>
  </div>
</main>
<?php get_footer(); ?>
