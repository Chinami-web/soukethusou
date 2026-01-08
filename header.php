<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <meta property="og:title" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="" /> -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <header class="header" id="header">
      <div class="header__inner container">
        <nav class="header__nav">
          <ul class="header__nav-list">
            <li class="header__nav-item">
              <p>埼玉、練馬、板橋で60年・東上セレモのお葬式<span class="pc-only">・家族葬</span></p>
            </li>
            <li class="header__nav-item">
              <p><span class="sp-only">直葬・家族葬 / </span>24時間365日受付</p>
            </li>
          </ul>
          <div class="header__nav-btn">
            <a href="tel:048-472-6136">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/phone.png" alt="電話番号">
              </figure>
            </a>
          </div>
          <button class="header__hamburger js-hamburger" type="button" aria-label="メニュー" aria-expanded="false" aria-controls="global-menu">
            <span class="header__hamburger-text">メニュー</span>
            <span class="header__hamburger-bar" aria-hidden="true"></span>
            <span class="header__hamburger-bar" aria-hidden="true"></span>
          </button>
        </nav>
      </div>
      <div class="header__drawer js-drawer" id="global-menu" aria-hidden="true">
        <div class="header__drawer-inner">
          <div class="header__drawer-logo">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-w.png" alt="東上セレモ">
            </a>
          </div>
          <div class="header__drawer-nav-wrap">
            <nav class="header__drawer-nav header__drawer-nav-01">
              <p class="header__drawer-title">想結葬について</p>
              <ul class="header__drawer-list">
                <li class="header__drawer-item">
                  <a href="#">想結葬のおもい</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">想結葬の特徴</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">葬祭ディレクター</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">スタッフ紹介</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">地域連携</a>
                </li>
              </ul>
            </nav>
            <nav class="header__drawer-nav header__drawer-nav-02">
              <p class="header__drawer-title">葬儀プラン・費用案内</p>
              <ul class="header__drawer-list">
                <li class="header__drawer-item">
                  <a href="#">想結直葬</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">想結家族葬</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">想結一般葬</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">各種サービス紹介</a>
                </li>
                <li class="header__drawer-item header__drawer-item--big">
                  <a href="#">各種サービス</a>
                </li>
              </ul>
            </nav>

            <nav class="header__drawer-nav header__drawer-nav-03">
              <p class="header__drawer-title">式場案内</p>
              <ul class="header__drawer-list">
                <li class="header__drawer-item">
                  <a href="#">東上セレモニーホール新座</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">東上セレモニーホール志木</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">東上セレモニーホールみずほ台</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">東上セレモニーホールふじみ野</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">東上セレモニーホール川越</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">東上セレモニーホール坂戸</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">東上セレモニーホール所沢</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">東上セレモニーホール入間</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">東上セレモニーホール狭山</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">東上プライベートホール朝霞</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">東上プライベートホール東松山</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">提携社葬式場&公営斎場式場のご案内</a>
                </li>
              </ul>
            </nav>
            <nav class="header__drawer-nav header__drawer-nav-04">

              <ul class="header__drawer-list">
                <li class="header__drawer-item">
                  <a href="#">葬儀の流れ</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">事前相談・終活</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">お客様の声・事例紹介</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">コラム・お知らせ</a>
                </li>
              </ul>
            </nav>
            <nav class="header__drawer-nav header__drawer-nav-05">
              <ul class="header__drawer-list">
                <li class="header__drawer-item">
                  <a href="#">葬式の知識</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">ネット葬儀社について</a>
                </li>
                <li class="header__drawer-item">
                  <a href="#">よくある質問</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
