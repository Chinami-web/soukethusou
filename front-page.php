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
        <p class="mv__sub-title">― 手と手でつなぐ、心からの「ありがとう」を ―</p>
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
    </div>
  </section>

  <section class="top-about">
    <div class="l-inner">
      <div class="top-about__container">
        <div class="top-about__main-title vertical-title heisei">
          想結葬のおもい
        </div>
        <div class="top-about__sub-title heisei">
          <span class="main-border"></span>
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
              <span class="single-border"></span>
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
              <span class="single-border"></span>
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
              <span class="single-border"></span>
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
              <span class="single-border"></span>
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
              <span class="single-border"></span>
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
              <span class="single-border"></span>
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
        <span class="main-border"></span>
      </h2>
      <div class="top-philosophy__container">
        <h3 class="top-philosophy__container_title heisei">
          想結葬は故人と家族、地域を結ぶ<br class="pc-only">
          新しいカタチのお葬式です。
        </h3>
        <p class="top-philosophy__container_text">
          大切な人とのお別れの瞬間、言葉では伝えきれない想いがあります。東上セレモは、その想いをかたちにし、心からの「ありがとう」を届けるお手伝いをします。手を取り合い、寄り添う温もりが、最期の時間を優しく包み込みます。
        </p>
        <div class="top-philosophy__container_logo">
          <figure class="top-philosophy__logo-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-b.png" alt="想結葬のロゴ"
              width="280"
              height="288"
              loading="lazy">
          </figure>
        </div>
        <div class="top-philosophy__container_image">
          <figure class="top-philosophy__image-img">
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
      <h2 class="left-title">
        <span>葬儀プラン・費用案内</span>
      </h2>
      <div class="top-plan__container">
        <div class="top-plan__container_title">
          <h3 class="top-plan__container_title-text mincho">
            ご要望を伺って、想いをかたちにしたお葬式をご提案。<br>
            家族葬や一般葬、一日葬、火葬式など、幅広く対応いたします。
          </h3>
        </div>
        <div class="plan-card splide" id="plan-card-slider">
          <div class="splide__track">
            <ul class="plan-card__list splide__list">
              <li class="plan-card__item splide__slide">
                <figure class="plan-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image09.jpg" alt="葬儀プラン・費用案内の画像"
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
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image09.jpg" alt="葬儀プラン・費用案内の画像"
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
                    484,000円
                    <span>
                      (税別)
                    </span>
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
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/image09.jpg" alt="葬儀プラン・費用案内の画像"
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
                    484,000円
                    <span>
                      (税別)
                    </span>
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
                  <61div class="plan-card__drawer-wrapper">
                    <p class="plan-card__drawer-text">
                      含まれるもの
                    </p>
                  </61div>
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
        <span class="single-border"></span>
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
                      <p class="main-card__name heisei">○ <?php the_title(); ?></p>
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
                        施設一覧をみる
                      </a>
                    </div>
                  </div>
                  <p class="main-card__label">
                    <span class="main-card__label-mark">○</span>
                    <span class="main-card__label-text">
                      <?php echo esc_html($label_text); ?>
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
    <div class="l-inner comparison__inner">
      <div class="section-title__wrapper comparison__title__wrapper">
        <h2 class="section-title section-title--big">
          そのお葬式、誰が寄り添いますか？
        </h2>
        <p class="section-title__text section-title__text--small">
          ネット仲介葬儀ではできない、東上セレモの「ちがい」
        </p>
        <span class="main-border"></span>
      </div>
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
              委託スタッフで対応品質に差<br>
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
              追加費用が多く、
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
  </section>






  <?php get_template_part('parts/project/top-post'); ?>

  <?php get_template_part('parts/project/top-works');
  ?>




  <?php get_template_part('parts/project/top-post-list'); ?>

  <?php get_template_part('parts/project/top-works-list'); ?>

</main>

<?php get_footer(); ?>
