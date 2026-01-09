<?php get_header(); ?>

<main class="main">
  <section class="mv">
    <div class="mv__inner">
      <div class="mv__nav-wrap">
        <a class="mv__nav-logo">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-w.png" media="(min-width:768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-wSP.png" alt="想結葬"
              width="180"
              height="188">
          </picture>
        </a>
        <div class="mv__nav-box pc-only">
          <nav class="mv__nav">
            <ul class="mv__nav-list">
              <p class="mv__nav-title">東上セレモの想結葬</p>
              <li class="mv__nav-item">
                <a class="mv__nav-item-link" href="#">東上セレモの想結葬</a>
              </li>
              <li class="mv__nav-item">
                <a class="mv__nav-item-link" href="#">プラン・費用</a>
              </li>
              <li class="mv__nav-item">
                <a class="mv__nav-item-link" href="#">葬儀場を探す</a>
              </li>
              <li class="mv__nav-item">
                <a class="mv__nav-item-link" href="#">各種サービス</a>
              </li>
            </ul>
          </nav>
          <nav class="mv__nav">
            <ul class="mv__nav-list">
              <li class="mv__nav-item">
                <a class="mv__nav-item-link" href="#">運営会社</a>
              </li>
              <li class="mv__nav-item">
                <a class="mv__nav-item-link" href="#">お問い合わせ</a>
              </li>
            </ul>
          </nav>
          <div class="mv__nav-btn">
            <a class="mv__nav-btn-link" href="#">
              <span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/flower.png" alt="生花の依頼のこちら">
              </span>
              生花の依頼のこちら
            </a>
          </div>
        </div>
      </div>
      <div class="mv__title-wrap">
        <h2 class="mv__main-title mincho">想いが生きる、最期の時間</h2>
        <p class="mv__sub-title mincho">― 手と手でつなぐ、心からの「ありがとう」を ―</p>
        <p class="mv__text pc-only">
          地域と歩んで60年。信用と信頼に支えられ、選ばれ続ける葬儀社。<br>
          心に寄り添い、故人の想いを家族とともにかたちにする。<br>
          想結葬（そうけつそう）は、そんな東上セレモの新しいお葬儀のかたちです。</p>
      </div>
      <div class="mv__video">
        <video autoplay muted loop playsinline preload="auto">
          <source src="<?php echo get_template_directory_uri(); ?>/assets/movie/mv.mp4" type="video/mp4" fetchpriority="high">
        </video>
      </div>
      <div class="mv__modal" id="mv-modal">
        <figure class="mv__modal-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/play.png" alt="play movie" width="141" height="141">
        </figure>
      </div>
    </div>
  </section>

  <section class="top-about">
    <div class="l-inner">
      <div class="top-about__container">
        <div class="top-about__main-title top-about__vertical-title vertical-title heisei">
          想結葬のおもい
        </div>
        <div class="top-about__sub-title heisei">
          <span class="top-about__main-border main-border"></span>
          手と手でつなぐ、<br>
          想いのかたち「想結葬」
        </div>
        <p class="top-about__text">
          大切な人とのお別れの瞬間、言葉では伝えきれない想いがあります。<br>
          東上セレモは、その想いをかたちにし、心からの「ありがとう」を届けるお手伝いをします。<br>
          手を取り合い、寄り添う温もりが、最期の時間を優しく包み込みます。<br>
          地域に根ざし、信頼と安心の葬儀を提供する私たちは、ご遺族の気持ちに寄り添いながら、<br class="pc-only">
          心を込めたサポートをお約束します。<br>
          故人への敬意と家族の想いを大切にし、一つひとつの葬儀をかけがえのない時間へと紡いでいきます。<br>
        </p>
        <div class="top-about__btn">
          <a class="button button-solid" href="#">
            <span></span>
            <span></span>
            想結葬について
          </a>
        </div>
      </div>
      <div class="top-about__image-wrapper">
        <figure class="top-about__image">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/image01.png" media="(min-width:768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image01SP.png" alt="想結葬の葬儀の画像"
              width="1622"
              height="905">
          </picture>
        </figure>
      </div>
    </div>
  </section>

  <section class="features">
    <div class="l-inner">
      <div class="section-title__wrapper">
        <h2 class="section-title">
          想結葬の特徴
        </h2>
        <p class="section-title__text">
          東上セレモが大切にしている、<br class="sp-only">６つのこと
        </p>
      </div>
      <ul class="feature-list">
        <li class="feature-list__item">
          <figure class="feature-list__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image03.jpg" alt="葬儀の様子"
              width="333"
              height="222"
              loading="lazy">
          </figure>
          <div class="feature-list__content">
            <h3 class="feature-list__title heisei">
              人の心を大切に
              <span class="feature-list__single-border single-border"></span>
            </h3>
            <p class="feature-list__text">
              故人を偲ぶ心とご遺族の想いを何よりも大切にしています。一人ひとりの想いに寄り添い、心に残る葬儀をお手伝いいたします。
            </p>
          </div>
        </li>
        <li class="feature-list__item">
          <figure class="feature-list__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image04.jpg" alt="葬儀の様子"
              width="333"
              height="222"
              loading="lazy">
          </figure>
          <div class="feature-list__content">
            <h3 class="feature-list__title heisei">
              顔の見えるサポート
              <span class="feature-list__single-border single-border"></span>
            </h3>
            <p class="feature-list__text">
              お客様と向き合い、どんな小さなことでも直接お話しをしながら、丁寧にサポートいたします。安心して相談できる〝身近な存在”でありたいと願っています。
            </p>
          </div>
        </li>
        <li class="feature-list__border"></li>
        <li class="feature-list__item">
          <figure class="feature-list__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image05.jpg" alt="葬儀の様子"
              width="333"
              height="222"
              loading="lazy">
          </figure>
          <div class="feature-list__content">
            <h3 class="feature-list__title heisei">
              地域と「共」に
              <span class="feature-list__single-border single-border"></span>
            </h3>
            <p class="feature-list__text">
              地域と共に歩む葬儀社として、地元の風習や文化を大切にしながら、日々信頼される身近な存在であり続けています。
            </p>
          </div>
        </li>
        <li class="feature-list__item">
          <figure class="feature-list__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image06.jpg" alt="葬儀の様子"
              width="333"
              height="222"
              loading="lazy">
          </figure>
          <div class="feature-list__content">
            <h3 class="feature-list__title heisei">
              わかりやすく安心な料金
              <span class="feature-list__single-border single-border"></span>
            </h3>
            <p class="feature-list__text">
              お見積りはわかりやすくご提示。何がいくら掛かるかが直ぐ分かり、安心できる料金です。 </p>
          </div>
        </li>
        <li class="feature-list__border"></li>
        <li class="feature-list__item">
          <figure class="feature-list__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image07.jpg" alt="葬儀の様子"
              width="333"
              height="222"
              loading="lazy">
          </figure>
          <div class="feature-list__content">
            <h3 class="feature-list__title heisei">
              心やすらぐ空間
              <span class="feature-list__single-border single-border"></span>
            </h3>
            <p class="feature-list__text">
              1フロアに１つの式場のため、プライベートな空間で、心やすらぐ時間をお過ごしいただけます。
            </p>
          </div>
        </li>
        <li class="feature-list__item">
          <figure class="feature-list__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image08.jpg" alt="葬儀の様子"
              width="333"
              height="222"
              loading="lazy">
          </figure>
          <div class="feature-list__content">
            <h3 class="feature-list__title heisei">
              アフターケアも万全
              <span class="feature-list__single-border single-border"></span>
            </h3>
            <p class="feature-list__text">
              お葬式が終わった後も法要や手続き、ご供養などを通じて、ご家族に安心を届けます。 </p>
          </div>
        </li>
        <li class="feature-list__border"></li>

      </ul>
    </div>
  </section>

  <section class="top-philosophy">
    <div class="l-inner">
      <h2 class="border-title">
        <span>想結葬の考え方</span>
        <span class="border-title__main-border main-border"></span>
      </h2>
      <div class="top-philosophy__container">
        <h3 class="top-philosophy__container-title heisei">
          想結葬は故人と家族、地域を結ぶ<br class="pc-only">
          新しいカタチのお葬式です。
        </h3>
        <p class="top-philosophy__container-text">
          大切な人とのお別れの瞬間、言葉では伝えきれない想いがあります。東上セレモは、その想いをかたちにし、心からの「ありがとう」を届けるお手伝いをします。手を取り合い、寄り添う温もりが、最期の時間を優しく包み込みます。
        </p>
        <div class="top-philosophy__container-logo">
          <figure class="top-philosophy__container-logo-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-b.png" alt="想結葬のロゴ"
              width="280"
              height="288"
              loading="lazy">
          </figure>
        </div>
        <div class="top-philosophy__container-image">
          <figure class="top-philosophy__container-image-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/concept01.png" alt="想結葬の画像"
              width="764"
              height="644"
              loading="lazy">
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="top-plan">
    <div class="l-inner">
      <h2 class="top-plan__left-title left-title">
        <span>葬儀プラン・費用案内</span>
      </h2>
      <div class="top-plan__container">
        <div class="top-plan__container-title">
          <h3 class="top-plan__container-title-text mincho">
            ご要望を伺って、想いをかたちにしたお葬式をご提案。<br>
            家族葬や一般葬、一日葬、火葬式など、幅広く対応いたします。
          </h3>
        </div>
        <div class="plan-card splide" id="plan-card-slider">
          <div class="splide__track">
            <ul class="plan-card__list splide__list">
              <li class="plan-card__item splide__slide">
                <figure class="plan-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image01.jpg" alt="葬儀プラン・費用案内の画像"
                    width="777"
                    height="449"
                    loading="lazy">
                </figure>
                <div class="plan-card__title-wrapper">
                  <span class="plan-card__title-subtitle">
                    想結葬の家族葬
                  </span>
                  <h3 class="plan-card__title-text heisei">
                    家族葬プラン
                  </h3>
                  <p class="plan-card__title-description">
                    家族、親族を中心としたお葬式
                  </p>
                  <div class="plan-card__title-price heisei">
                    <p>
                      484,000円
                      <span>
                        (税別)
                      </span>
                    </p>
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
                  <div class="plan-card__btn pc-only">
                    <a class="button button-solid" href="#">
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
                    <ul class="plan-card__icon-list">
                      <?php for ($i = 1; $i <= 23; $i++): ?>
                        <li class="plan-card__icon-item">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                        </li>
                      <?php endfor; ?>
                    </ul>
                  </div>
                </div>
                <div class="plan-card__label">
                  <span>○</span>
                  家族葬
                </div>
              </li>
              <li class="plan-card__item splide__slide">
                <figure class="plan-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image02.jpg" alt="葬儀プラン・費用案内の画像"
                    width="777"
                    height="449"
                    loading="lazy">
                </figure>
                <div class="plan-card__title-wrapper">
                  <span class="plan-card__title-subtitle">
                    想結葬の一日葬
                  </span>
                  <h3 class="plan-card__title-text heisei">
                    一日葬プラン
                  </h3>
                  <p class="plan-card__title-description">
                    通夜をせず、告別式と火葬を一日で行うお葬式 
                  </p>
                  <div class="plan-card__title-price heisei">
                    492,000円
                    <span>
                      (税別)
                    </span>
                  </div>
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
                    <a class="button button-solid" href="#">
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
                    <ul class="plan-card__icon-list">
                      <?php
                      $icon_numbers = [1, 2, 4, 5, 6, 7, 9, 12, 14, 16, 17, 23, 25, 26, 28, 31, 32, 33, 34, 35];
                      foreach ($icon_numbers as $i): ?>
                        <li class="plan-card__icon-item">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                </div>
                <div class="plan-card__label">
                  <span>○</span>
                  一日葬
                </div>
              </li>
              <li class="plan-card__item splide__slide">
                <figure class="plan-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image03.jpg" alt="葬儀プラン・費用案内の画像"
                    width="777"
                    height="449"
                    loading="lazy">
                </figure>
                <div class="plan-card__title-wrapper">
                  <span class="plan-card__title-subtitle">
                    想結葬の一般葬
                  </span>
                  <h3 class="plan-card__title-text heisei">
                    一般葬プラン
                  </h3>
                  <p class="plan-card__title-description">
                    多くの方々と故人を偲ぶ伝統的な葬儀
                  </p>
                  <div class="plan-card__title-price heisei">
                    1,293,000円 <span>
                      (税別)
                    </span>
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
                    <a class="button button-solid" href="#">
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
                    <ul class="plan-card__icon-list">
                      <?php for ($i = 1; $i <= 23; $i++): ?>
                        <li class="plan-card__icon-item">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                        </li>
                      <?php endfor; ?>
                    </ul>
                  </div>
                </div>
                <div class="plan-card__label">
                  <span>○</span>
                  一般葬
                </div>
              </li>
              <li class="plan-card__item splide__slide">
                <figure class="plan-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plan/image04.jpg" alt="葬儀プラン・費用案内の画像"
                    width="777"
                    height="449"
                    loading="lazy">
                </figure>
                <div class="plan-card__title-wrapper">
                  <span class="plan-card__title-subtitle">
                    想結葬の火葬式
                  </span>
                  <h3 class="plan-card__title-text heisei">
                    火葬式プラン
                  </h3>
                  <p class="plan-card__title-description">
                    火葬だけのシンプルなお見送り
                  </p>
                  <div class="plan-card__title-price heisei">
                    222,000円 <span>
                      (税別)
                    </span>
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
                    <a class="button button-solid" href="#">
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
                    <ul class="plan-card__icon-list">
                      <?php for ($i = 1; $i <= 27; $i++): ?>
                        <li class="plan-card__icon-item">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/icon/icon<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>.png" alt="アイコン">
                        </li>
                      <?php endfor; ?>
                    </ul>
                  </div>
                </div>
                <div class="plan-card__label">
                  <span>○</span>
                  火葬式
                </div>
              </li>
            </ul>
            <div class="top-plan__btn">
              <a class="button" href="#">
                <span></span>
                <span></span>
                プラン詳細をみる
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="top-images">
    <figure>
      <picture class="top-images__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/image09.png" media="(min-width:768px)">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image09SP.png" alt="葬儀の様子"
          width="1920"
          height="961"
          loading="lazy">
      </picture>
    </figure>
    <h2 class="top-images__title heisei">
      地域から選ばれる、<br class="sp-only">あたたかな見送りのかたち
    </h2>
  </section>

  <section class="top-facility">
    <div class="l-inner">
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

        <div class="facility-map__button-wrapper">
          <a class="button button-solid" href="#">
            <span></span>
            <span></span>
            施設一覧をみる
          </a>
        </div>
        <div class="facility-map__selling-wrapper">
          <p class="facility-map__selling">
            埼玉県内に
            <span>12ヵ所の自社葬儀場</span>
          </p>
        </div>
        <div class="facility-map">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/map.png" alt="施設マップ" class="facility-map__bg" width="1171" height="738" loading="lazy">
          <a href="#higasimatuyama" class="facility-pin" style="--x:56.9%; --y:22.0%;">
            <span class="facility-pin__label">東松山</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/higasimatuyama.png" alt="東松山">
            </figure>
          </a>
          <a href="#kawagoe" class="facility-pin" style="--x:67.2%; --y:31.2%;">
            <span class="facility-pin__label">川越</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/kawagoe.png" alt="川越">
            </figure>
          </a>
          <a href="#huzimino" class="facility-pin" style="--x:70.6%; --y:49.9%;">
            <span class="facility-pin__label">ふじみ野</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/huzimino.png" alt="ふじみ野">
            </figure>
          </a>
          <a href="#mizuhodai" class="facility-pin" style="--x:82.7%; --y:34.0%;">
            <span class="facility-pin__label">みずほ台</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/mizuhodai.png" alt="みずほ台">
            </figure>
          </a>
          <a href="#siki" class="facility-pin" style="--x:84.8%; --y:61.6%;">
            <span class="facility-pin__label">志木</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/siki.png" alt="志木">
            </figure>
          </a>
          <a href="#asaka" class="facility-pin" style="--x:83.8%; --y:81.8%;">
            <span class="facility-pin__label">朝霞</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/asaka.png" alt="朝霞">
            </figure>
          </a>
          <a href="#niiza" class="facility-pin" style="--x:65.2%; --y:91.5%;">
            <span class="facility-pin__label">新座</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/niiza.png" alt="新座">
            </figure>
          </a>
          <a href="#tokorozawa" class="facility-pin" style="--x:50.3%; --y:86.6%;">
            <span class="facility-pin__label">所沢</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/tokorozawa.png" alt="所沢">
            </figure>
          </a>
          <a href="#iruma" class="facility-pin" style="--x:41.0%; --y:67.9%;">
            <span class="facility-pin__label">入間</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/iruma.png" alt="入間">
            </figure>
          </a>
          <a href="#sayama" class="facility-pin" style="--x:38.0%; --y:48.3%;">
            <span class="facility-pin__label">狭山</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/sayama.png" alt="狭山">
            </figure>
          </a>
          <a href="#sakado" class="facility-pin" style="--x:48.8%; --y:47.4%;">
            <span class="facility-pin__label">坂戸</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/sakado.png" alt="坂戸">
            </figure>
          </a>
          <a href="#sakadoekimae" class="facility-pin" style="--x:46.5%; --y:25.4%;">
            <span class="facility-pin__label">坂戸駅前</span>
            <figure class="facility-pin__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facility/map/sakadoekimae.png" alt="坂戸駅前">
            </figure>
          </a>
        </div>
      </div>
    </div>
    <div class="top-main-card">
      <?php
      $facility_query = new WP_Query(
        array(
          'post_type' => 'facility',
          'posts_per_page' => -1,
          'orderby' => 'menu_order',
          'order' => 'ASC',
        )
      );
      $facility_total = $facility_query->post_count;
      ?>
      <?php if ($facility_query->have_posts()): ?>
        <div class="main-card splide" id="main-card-slider" data-facility-total="<?php echo esc_attr($facility_total); ?>">
          <div class="splide__track">
            <ul class="main-card__list splide__list">
              <?php while ($facility_query->have_posts()): $facility_query->the_post(); ?>
                <?php
                $post_id = get_the_ID();
                $slide_id = get_post_field('post_name', $post_id);
                $label = get_post_meta($post_id, 'facility_label', true);
                $label_text = $label ? $label : 'プライベートホール';
                // 伸ばし棒（ー）を含む部分をspanで囲む
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
                <li class="main-card__item splide__slide" id="<?php echo esc_attr($slide_id); ?>">
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
                    <div class="main-card__button-wrapper">
                      <a class="button button-solid" href="<?php the_permalink(); ?>">
                        <span></span>
                        <span></span>
                        ホール詳細

                      </a>
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
          </div>
          <div class="main-card__pagination pc-only">
            <div class="main-card__counter">01 / <?php echo esc_html(str_pad($facility_total, 2, '0', STR_PAD_LEFT)); ?></div>
            <div class="main-card__nav">
              <button class="main-card__nav-btn main-card__nav-prev" type="button" aria-label="前へ"></button>
              <button class="main-card__nav-btn main-card__nav-pause" type="button" aria-label="一時停止"></button>
              <button class="main-card__nav-btn main-card__nav-next" type="button" aria-label="次へ"></button>
            </div>
          </div>
          <div class="main-card__progress sp-only" aria-hidden="true">
            <div class="main-card__progress-bar"></div>
          </div>
        </div>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </section>


  <!-- ギャラリー -->
  <?php get_template_part('parts/project/top-gallery'); ?>



  <section class="comparison">
    <div class="l-inner">
      <div class="section-title__wrapper comparison__title__wrapper">
        <h2 class="section-title section-title--big">
          そのお葬式、誰が寄り添いますか？
        </h2>
        <p class="section-title__text section-title__text--small">
          ネット仲介葬儀ではできない、東上セレモの「ちがい」
        </p>
        <span class="comparison__main-border main-border"></span>
      </div>
      <div class="comparison__content-wrapper">
        <span class="comparison__main-border main-border"></span>
        <div class="comparison__content">
          <div class="comparison__content-heading-wrapper">
            <span class="comparison__content-heading-text heisei comparison__content-heading-text--left">
              ネット<br>
              仲介葬儀
            </span>
            <span class="comparison__content-heading-text comparison__content-heading-text--right">
              <figure class="comparison__content-heading-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-b02.png" alt="ネット 仲介葬儀">
              </figure>
            </span>
          </div>
          <div class="comparison__content-label">
            <div class="comparison__content-label-text">
              <span>スタッフ</span>
            </div>
            <div class="comparison__content-label-text">
              <span>寄り添い</span>
            </div>
            <div class="comparison__content-label-text">
              <span>地域性</span>
            </div>
            <div class="comparison__content-label-text">
              <span>式場</span>
            </div>
            <div class="comparison__content-label-text">
              <span>金額</span>
            </div>
          </div>
          <div class="comparison__content-text-wrapper">
            <div class="comparison__content-text">
              <span>
                委託スタッフで対応品質に差、<br class="pc-only">
                担当がころころ変わることも
              </span>
            </div>
            <div class="comparison__content-text">
              <span>
                システマチックな対応になりがち
              </span>
            </div>
            <div class="comparison__content-text">
              <span>
                エリアごとの配慮が弱い
              </span>
            </div>
            <div class="comparison__content-text">
              <span>
                提携先まかせの外注式場
              </span>
            </div>
            <div class="comparison__content-text">
              <span>
                追加費用が多く、<br>
                最終金額がわかりにくい。
              </span>
            </div>
          </div>
          <div class="comparison__content-text-wrapper comparison__content-text-wrapper--right">
            <div class="comparison__content-text">
              <span>自社スタッフによる一貫対応
                <br>
                経験豊富なディレクターが対応
              </span>
            </div>
            <div class="comparison__content-text">
              <span>顔が見える、心で寄り添う葬儀</span>
            </div>
            <div class="comparison__content-text">
              <span>地域文化や風習に詳しい</span>
            </div>
            <div class="comparison__content-text">
              <span>地元・直営の会館と設備</span>
            </div>
            <div class="comparison__content-text">
              <span>費用が明瞭で、総額が事前に把握しやすい。</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="top-staff">
    <div class="l-inner">
      <h2 class="top-staff__left-title left-title">
        <span>スタッフ紹介</span>
      </h2>
      <div class="top-staff__container">
        <div class="top-staff__container-wrapper">
          <div class="top-staff__container-title-wrapper">
            <h3 class="top-staff__container-title-main mincho">
              「葬儀のプロ」が心に寄り添ってお手伝い
            </h3>
            <p class="top-staff__container-title-sub mincho">
              東上セレモには「葬祭ディレクター」資格をもったスタッフが多数在籍。<br>
              ご家族の不安や想いに、プロとして真摯に向き合います。
            </p>
          </div>
          <figure class="top-staff__container-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/staff/image01.jpg" alt="スタッフ紹介" width="881" height="587" loading="lazy">
          </figure>
          <p class="top-staff__container-title-border mincho">
            顔が見えるスタッフだからこそできる、責任と温かさ
            <span class="top-staff__container-title-border main-border"></span>
          </p>
          <div class="top-staff__container-description">
            <p class="top-staff__container-description-text">
              あらゆるお葬式を知りつくした「葬祭ディレクター」が専従し、ご遺族をサポートいたします。<br>
              お迎えからお葬式後のケアまで、すべてを知る担当者が寄り添います。<br>
              東上セレモでは、顔の見える対応が信頼につながります。
            </p>
          </div>
        </div>
        <div class="top-staff-slider">
          <ul class="top-staff-slider__list">
            <?php for ($loop = 0; $loop < 2; $loop++): ?>
              <?php for ($i = 1; $i <= 8; $i++): ?>
                <li class="top-staff-slider__item">
                  <figure class="top-staff-slider__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/staff/staff<?php echo sprintf('%02d', $i); ?>.jpg" alt="スタッフ紹介" width="220" height="312" loading="lazy">
                  </figure>
                </li>
              <?php endfor; ?>
            <?php endfor; ?>
          </ul>
          <ul class="top-staff-slider__list">
            <?php for ($loop = 0; $loop < 2; $loop++): ?>
              <?php for ($i = 9; $i <= 17; $i++): ?>
                <li class="top-staff-slider__item">
                  <figure class="top-staff-slider__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/staff/staff<?php echo sprintf('%02d', $i); ?>.jpg" alt="スタッフ紹介" width="220" height="312" loading="lazy">
                  </figure>
                </li>
              <?php endfor; ?>
            <?php endfor; ?>
          </ul>
        </div>
        <div class="top-staff__btn">
          <a class="button button--wide" href="#">
            <span></span>
            <span></span>
            葬祭ディレクターの詳細
          </a>
        </div>
      </div>

    </div>
  </section>

  <section class="top-voice">
    <div class="l-inner">
      <div class="top-voice__container">
        <figure class="top-voice__container-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/ribon.png" alt="想結葬の画像" width="161" height="110" loading="lazy">
        </figure>
        <div class="top-voice__container-title-wrapper">
          <h3 class="top-voice__container-title heisei">
            「ありがとう」を形にできた、あの日の記憶。
            <span class="top-voice__main-border main-border"></span>
          </h3>
          <p class="top-voice__container-title-text heisei">
            “心に残る時間でした”お葬式をされた方から届いた声
          </p>
        </div>
        <p class="top-voice__container-description">
          お葬式とは、故人の人生を想い、お送りすることです。<br>
          ご家族がどんな気持ちでその時間を迎えるのか。それは一人ひとり違っていて当然です。<br>
          東上セレモでは、“想結葬”というブランドを通じて、「その人らしさを大切にすること」「遺された方の心に寄り添うこと」を、何より大切にしています。ご家族の中には、「母のために、何かしてあげられた気がします」「あたたかい時間になったと、親族みんなで話しました」とお話しして下さる方もいらっしゃいました。ここでは、実際に東上セレモでお葬式をされた方々の声をご紹介します。
        </p>

        <?php
        $voice_query = new WP_Query(array(
          'post_type' => 'voice',
          'posts_per_page' => 2,
          'orderby' => 'date',
          'order' => 'DESC',
        ));
        ?>
        <?php if ($voice_query->have_posts()): ?>
          <div class="top-voice__list">
            <?php while ($voice_query->have_posts()): $voice_query->the_post();
              $post_id = get_the_ID();
              $voice_address = get_post_meta($post_id, 'voice_address', true);
              $voice_customer_name = get_post_meta($post_id, 'voice_customer_name', true);

              // タクソノミー
              $voice_halls = get_the_terms($post_id, 'voice_hall');
              $voice_hall_name = ($voice_halls && !is_wp_error($voice_halls)) ? $voice_halls[0]->name : '';

              $voice_plans = get_the_terms($post_id, 'voice_plan');
              $voice_plan_name = ($voice_plans && !is_wp_error($voice_plans)) ? $voice_plans[0]->name : '';

              $thumb_id = get_post_thumbnail_id($post_id);
              $thumb_url = $thumb_id ? get_the_post_thumbnail_url($post_id, 'large') : '';
              $thumb_alt = $thumb_id ? get_post_meta($thumb_id, '_wp_attachment_image_alt', true) : '';

              if (!$thumb_url) {
                $thumb_url = get_template_directory_uri() . '/assets/images/common/logo-b.png';
              }
              if (!$thumb_alt) {
                $thumb_alt = get_the_title();
              }
            ?>
              <article class="top-voice__item">
                <figure class="top-voice__img">
                  <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr($thumb_alt); ?>" loading="lazy">
                </figure>
                <div class="top-voice__content">
                  <h4 class="top-voice__title mincho"><?php the_title(); ?></h4>
                  <div class="top-voice__text">
                    <?php echo get_the_excerpt(); ?>
                  </div>
                  <div class="top-voice__meta">
                    <div class="top-voice__info">
                      <?php if ($voice_address): ?>
                        <span class="top-voice__address"><?php echo esc_html($voice_address); ?></span>
                      <?php endif; ?>
                      <?php if ($voice_customer_name): ?>
                        <span class="top-voice__name"> <?php echo esc_html($voice_customer_name); ?></span>
                      <?php endif; ?>
                      <?php if ($voice_hall_name): ?>
                        <span class="top-voice__hall"> / <?php echo esc_html($voice_hall_name); ?></span>
                      <?php endif; ?>
                      <?php if ($voice_plan_name): ?>
                        <span class="top-voice__plan"> / <?php echo esc_html($voice_plan_name); ?></span>
                      <?php endif; ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="top-voice__link">詳細をみる</a>
                  </div>
                </div>
              </article>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="top-voice__btn">
        <a class="button button--wide" href="#">
          <span></span>
          <span></span>
          もっと見る
        </a>
      </div>
    </div>
  </section>

  <section class="top-info">
    <div class="l-inner">
      <div class="top-info__container-01">
        <figure class="top-info__container-01-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image15.jpg" alt="想結葬の画像" width="856" height="571" loading="lazy">
        </figure>
        <div class="top-info__container-01-text-wrapper">
          <div class="top-info__container-01-title-wrapper">
            <h2 class="top-info__title heisei">
              地域とつながる、想いを育む。<br>
              <span class="top-info__main-border main-border"></span>
            </h2>
            <p class="top-info__text heisei">
              心が届く関係を─そんな私たちの取り組みをご紹介します。
            </p>
          </div>
          <p class="top-info__description">
            東上セレモは、葬儀だけで終わらない「つながり」を大切にしています。<br>
            地元の皆さまと共に、「ありがとう」や「想い出」を分かち合えるような、終活イベント,感謝祭,地域貢献,学校連携など、さまざまな取り組みを行っています。
          </p>
          <div class="top-info__btn">
            <a class="button button-solid" href="#">
              <span></span>
              <span></span>
              地域との取り組みを見る
            </a>
          </div>
        </div>
      </div>
      <div class="top-info__container-02">
        <div class="top-info__container-02-text-wrapper">
          <h2 class="top-info__container-02-title mincho">
            コラム・お知らせ
          </h2>
          <p class="top-info__text heisei">
            日々の活動や、終活・葬儀のヒントをお届けします。
          </p>
        </div>
          <ul class="top-post-news__list">
            <?php
            $category_ids = array();
            $category_names = array('お知らせ', 'コラム');
            foreach ($category_names as $cat_name) {
              $cat = get_term_by('name', $cat_name, 'category');
              if ($cat) {
                $category_ids[] = $cat->term_id;
              }
            }
            $post_query = new WP_Query(array(
              'post_type' => 'post',
              'posts_per_page' => 4,
              'orderby' => 'date',
              'order' => 'DESC',
              'cat' => !empty($category_ids) ? implode(',', $category_ids) : '',
            ));
            ?>
            <?php if ($post_query->have_posts()): ?>
              <?php while ($post_query->have_posts()): $post_query->the_post(); ?>
                <?php
                $post_categories = get_the_category();
                $category_name = '';
                if (!empty($post_categories)) {
                  $category_name = $post_categories[0]->name;
                }
                ?>
                <li class="top-post-news__item">
                  <a href="<?php the_permalink(); ?>" class="top-post-news__link">
                    <div class="top-post-news__icon-wrapper">
                      <span class="top-post-news__icon"></span>
                    </div>
                    <?php if ($category_name): ?>
                      <span class="top-post-news__category"><?php echo esc_html($category_name); ?></span>
                    <?php endif; ?>
                    <time class="top-post-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">[<?php echo get_the_date('Y.m.d'); ?>]</time>
                    <h3 class="top-post-news__title"><?php the_title(); ?></h3>
                  </a>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            <?php endif; ?>
          </ul>
          <div class="top-post-news__btn">
            <a class="button button-solid" href="#">
              <span></span>
              <span></span>
              お知らせ
            </a>
            <a class="button button-solid" href="#">
              <span></span>
              <span></span>
              コラム
            </a>
          </div>
      </div>
      <div class="top-info__container-03">
      <div class="top-info__container-03-text-wrapper">
          <h2 class="top-info__container-03-title heisei">
          事前相談
          </h2>
          <p class="top-info__text mincho">
          “まだ先”と思っている今こそ、話しておきませんか？
          </p>
        </div>
        <div class="top-info__container-03-image-wrapper">
          <figure class="top-info__container-03-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image16.jpg" alt="想結葬の画像" width="856" height="571" loading="lazy">
          </figure>
          <div class="top-info__container-03-image-text">
            <p class="top-info__container-03-image-text-text">
            もしもの時、慌てないために。
            ご自身の想いや希望を整理したり、ご家族と話し合うきっかけとして、事前相談や終活サポートをご利用いただく方が増えています。費用や流れ、準備しておくべきことなど、不安なことはすべてご相談ください。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="top-post-news">
    <div class="l-inner">
    </div>
  </section>

  <?php get_template_part('parts/project/top-post'); ?>

  <?php get_template_part('parts/project/top-works');
  ?>




  <?php get_template_part('parts/project/top-post-list'); ?>

  <?php get_template_part('parts/project/top-works-list'); ?>

  <!-- モーダル -->

  <div id="movie-modal" class="movie-modal">
    <div class="movie-modal__overlay"></div>
    <div class="movie-modal__content">
      <button class="movie-modal__close" aria-label="閉じる">
        <span class="movie-modal__close-icon"></span>
      </button>
      <div class="movie-modal__video-wrapper">
        <video id="modal-video" controls playsinline>
          <source src="<?php echo get_template_directory_uri(); ?>/assets/movie/mv.mp4" type="video/mp4">
        </video>
      </div>
      <ul class="movie-modal__thumbnails">
        <li class="movie-modal__thumbnail is-active" data-src="<?php echo get_template_directory_uri(); ?>/assets/movie/modalmv01.mp4">
          <div class="movie-modal__thumbnail-overlay">
            <span class="movie-modal__thumbnail-title">「祖母の手」篇</span>
            <span class="movie-modal__thumbnail-play">▶</span>
          </div>
          <video muted playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/movie/mv.mp4" type="video/mp4">
          </video>
        </li>
        <li class="movie-modal__thumbnail" data-src="<?php echo get_template_directory_uri(); ?>/assets/movie/modalmv02.mp4">
          <div class="movie-modal__thumbnail-overlay">
            <span class="movie-modal__thumbnail-title">「もう一度孫から」篇</span>
            <span class="movie-modal__thumbnail-play">▶</span>
          </div>
          <video muted playsinline>
            <source src="<?php echo get_template_directory_uri(); ?>/assets/movie/modalmv02.mp4" type="video/mp4">
          </video>
        </li>
      </ul>
    </div>
  </div>




</main>

<?php get_footer(); ?>
