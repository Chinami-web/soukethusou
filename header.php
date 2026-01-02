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
              <p>埼玉、練馬、板橋で60年・東上セレモのお葬式<span class="pc-only">・直葬・家族葬</span></p>
            </li>
            <li class="header__nav-item">
              <p><span class="sp-only">直葬・家族葬 / </span>24時間365日受付</p>
            </li>
          </ul>
          <div class="header__nav-btn">
            <a href="tel:048-472-6136">048-472-6136</a>
          </div>
          <button class="header__hamburger js-hamburger" type="button" aria-label="メニュー" aria-expanded="false" aria-controls="global-menu">
            <span class="header__hamburger-text">メニュー</span>
            <span class="header__hamburger-bar" aria-hidden="true"></span>
            <span class="header__hamburger-bar" aria-hidden="true"></span>
          </button>
      </nav>
      </div>
      <div class="header__drawer js-drawer" id="global-menu" aria-hidden="true">
        <nav class="header__drawer-nav">
          <ul class="header__drawer-list">
            <li class="header__drawer-item">
              <a href="#">top</a>
            </li>
            <li class="header__drawer-item">
              <a href="#">about</a>
            </li>
            <li class="header__drawer-item">
              <a href="#">works</a>
            </li>
            <li class="header__drawer-item header__drawer-item--contact">
              <a href="#" target="_blank" rel="noopener">contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
