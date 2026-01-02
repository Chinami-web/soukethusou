
document.addEventListener('DOMContentLoaded', function() {
  var library = sliderSettings.library;
  // Splideの読み込み
  if (library === "splide") {
    // Splideの読み込み
    if (document.querySelector('#mv_slider')) {
      new Splide('#mv_slider',
        {
          type: 'fade',   // slide,loop,fade から選択
          speed: 3000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: true, // 自動実行を有効にする true:有効、false:無効
          interval: 3000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fade,slideの時使用)
          arrows: true,    // true:矢印ボタンを表示,false:非表示
          perPage: 1,      // 1ページに何枚のスライドを表示するかを指定
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            767: {
              perPage: 1,  // 1ページに何枚のスライドを表示するかを指定
            }
          },
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          focus: 'center', //これを指定すると中央にある画像にフォーカスされる
          gap: '10px',     // 画像間の余白の設定
          pauseOnHover: false // true:マウスがスライダーの上にある間は自動再生を一時停止します,false:停止しない
        }
      ).mount();
    }
    if (document.querySelector('#gallery')) {
      const gallerySlider = new Splide('#gallery',
        {
          type: 'loop',   // slide,loop,fade から選択
          speed: 2000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: true, // 自動実行を有効にする
          interval: 4000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fadeの時使用)
          arrows: true,    // true:矢印ボタンを表示
          perPage: 1,      // 中央1枚
          fixedWidth: '64%', // 中央を大きく確保
          pagination: false,
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            767: {
              perPage: 1,  // SPも中央1枚
              fixedWidth: '76%', // SPはやや広め
              padding: '0%', // 左右12%分を見せる
              gap: '20px',
            }
          },
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          focus: 'center', //これを指定すると中央にある画像にフォーカスされる
          padding: '15',  // 左右36%分を見せる
          gap: '70px',     // 画像間の余白の設定
        }
      );

      // 移動開始時に次のスライドをアクティブにする
      gallerySlider.on('move', function(newIndex, prevIndex) {
        const slides = gallerySlider.Components.Elements.slides;
        if (slides && slides.length > 0) {
          // すべてのスライドからis-activeクラスを削除
          slides.forEach(function(slide) {
            slide.classList.remove('is-active');
          });
          // 新しいインデックスのスライドにis-activeクラスを追加
          if (slides[newIndex]) {
            slides[newIndex].classList.add('is-active');
          }
        }
      });

      gallerySlider.mount();
    }
    // event
    if (document.querySelector('#post')) {
      new Splide('#post',
        {
          type: 'loop',   // slide,loop,fade から選択
          speed: 3000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: true, // 自動実行を有効にする
          interval: 3000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fadeの時使用)
          arrows: true,    // true:矢印ボタンを表示
          perPage: 3,      // 1ページに何枚のスライドを表示するかを指定
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            767: {
              perPage: 2,  // 1ページに何枚のスライドを表示するかを指定
            }
          },
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          focus: 'center',//これを指定すると中央にある画像にフォーカスされる
          gap: '10px',     // 画像間の余白の設定
        }
      ).mount();
    }
    // works
    if (document.querySelector('#works')) {
      new Splide('#works',
        {
          type: 'loop',   // slide,loop,fade から選択
          speed: 3000,    // スライダーの移動時間をミリ秒単位で指定
          autoplay: true, // 自動実行を有効にする
          interval: 3000, // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          rewind: true,    // true:スライダーの終わりまで行ったときに、先頭に巻き戻す(type:fadeの時使用)
          arrows: true,    // true:矢印ボタンを表示
          perPage: 5,      // 1ページに何枚のスライドを表示するかを指定
          breakpoints: {   // レスポンシブデザインのブレークポイントを指定（指定したpx以下の場合）
            767: {
              perPage: 2,  // 1ページに何枚のスライドを表示するかを指定
            }
          },
          perMove: 1,      // 1度の移動で、何枚のスライドを移動するかを指定
          focus: 'center',//これを指定すると中央にある画像にフォーカスされる
          gap: '10px',     // 画像間の余白の設定
        }
      ).mount();
    }
    if (document.querySelector('#main-card-slider')) {
      const mainCardSlider = new Splide('#main-card-slider',
        {
          type: 'loop',
          speed: 800,
          autoplay: false,
          interval: 4000,
          rewind: true,
          arrows: false,
          pagination: false,
          perPage: 3,
          focus: 'center',
          padding: '8%',
          gap: '24px',
          breakpoints: {
            767: {
              perPage: 1,
              padding: '0',
              gap: '12px'
            }
          }
        }
      );

      const mainCardPrev = document.querySelector('.main-card__nav-prev');
      const mainCardNext = document.querySelector('.main-card__nav-next');
      const mainCardPause = document.querySelector('.main-card__nav-pause');
      const mainCardCounter = document.querySelector('.main-card__counter');
      const mainCardProgress = document.querySelector('.main-card__progress-bar');
      let isPaused = true;

      const formatNumber = (num, total) => {
        const digits = String(total).length < 2 ? 2 : String(total).length;
        return String(num).padStart(digits, '0');
      };

      const updateMainCardStatus = () => {
        const total = mainCardSlider.length;
        if (total === 0) return;
        const current = (mainCardSlider.index % total) + 1;
        if (mainCardCounter) {
          mainCardCounter.textContent = `${formatNumber(current, total)} / ${formatNumber(total, total)}`;
        }
        if (mainCardProgress) {
          const rate = (current / total) * 100;
          mainCardProgress.style.width = `${rate}%`;
        }
      };

      mainCardSlider.on('mounted move', updateMainCardStatus);

      if (mainCardPrev) {
        mainCardPrev.addEventListener('click', () => {
          mainCardSlider.go('<');
        });
      }

      if (mainCardNext) {
        mainCardNext.addEventListener('click', () => {
          mainCardSlider.go('>');
        });
      }

      if (mainCardPause) {
        mainCardPause.addEventListener('click', () => {
          const autoplay = mainCardSlider.Components.Autoplay;
          if (autoplay) {
            if (isPaused) {
              autoplay.play();
              isPaused = false;
              mainCardPause.setAttribute('aria-label', '停止');
            } else {
              autoplay.pause();
              isPaused = true;
              mainCardPause.setAttribute('aria-label', '再生');
            }
          }
        });
      }

      mainCardSlider.mount();
    }
    // plan-card (plan)
    if (document.querySelector('#plan-card-slider')) {
      // トラックのクラス更新処理を関数化
      const updatePlanCardOverflow = (forceOpen) => {
        const $track = jQuery('#plan-card-slider .splide__track');
        if (!$track.length) return;

        // forceOpenが指定されている場合はそれに従う
        if (typeof forceOpen !== 'undefined') {
          $track.toggleClass('is-drawer-open', forceOpen);
          return;
        }

        const hasOpen = jQuery('.plan-card__drawer-wrapper.is-open').length > 0;
        $track.toggleClass('is-drawer-open', hasOpen);
      };

      const mainCardSlider = new Splide('#plan-card-slider',
        {
          type: 'loop',
          speed: 1000,
          autoplay: false,
          interval: 3000,
          rewind: true,
          arrows: true,
          pagination: false,
          perPage: 1,
          focus: 'center',
          padding: '25%',
          gap: '100px',
          breakpoints: {
            767: {
              padding: '10%',
              gap: '24px',
            }
          }
        }
      );

      // 矢印の位置調整関数
      const adjustArrowPosition = () => {
        const list = document.querySelector('.plan-card__list');
        const arrows = document.querySelectorAll('#plan-card-slider .splide__arrow');
        if (list && arrows.length > 0) {
          const height = list.clientHeight;
          // カードの高さの50%の位置に設定
          arrows.forEach(arrow => {
             arrow.style.top = height / 2 + 'px';
             let transform = 'translateY(-50%)';
             if (arrow.classList.contains('splide__arrow--prev')) {
                 transform += ' rotate(180deg)';
             }
             arrow.style.transform = transform;
          });
        }
      };

      mainCardSlider.on('move', function () {
        jQuery('.plan-card__drawer-wrapper.is-open').each(function () {
          jQuery(this).removeClass('is-open');
          jQuery(this).next().slideUp({
             duration: 300,
             complete: function() {
                updatePlanCardOverflow();
             }
          });
          jQuery(this).closest('.plan-card__item').removeClass('is-active');
        });
        updatePlanCardOverflow(false);
      });

      mainCardSlider.mount().on(['mounted', 'updated', 'refresh'], adjustArrowPosition);
      window.addEventListener('resize', adjustArrowPosition);
      window.addEventListener('load', adjustArrowPosition);
    }
  }
  if (library === "swiper") {
    // Swiperの読み込み
    if (document.querySelector('#mv_slider')) {
      new Swiper('#mv_slider', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときの動き。選択肢：true：ループする, false：巻き戻す
        speed: 3000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 3000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 1,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: true,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 1,  // 1ページに表示するスライド数
          },
        },
      });
    }
    if (document.querySelector('#gallery')) {
      new Swiper('#gallery', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときに、先頭に巻き戻す。選択肢：true：巻き戻す, false：巻き戻さない
        speed: 3000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 3000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 4,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: true,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 6,  // 1ページに表示するスライド数
          },
        },
      });
    }
    if (document.querySelector('#works')) {
      new Swiper('#works', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときの動き。選択肢：true：ループする, false：巻き戻す
        speed: 1000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 1000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 1,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: false,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 3,  // 1ページに表示するスライド数
          },
        },
      });
    }
    if (document.querySelector('#post')) {
      new Swiper('#post', {
        effect: 'slide', //slide:スライド,fade:フェード,cube:立方体の面のように回転しながら表示,
        loop: true,  // スライダーの終わりまで行ったときの動き。選択肢：true：ループする, false：巻き戻す
        speed: 1000,  // スライダーの移動時間をミリ秒単位で指定
        autoplay: {  // 自動実行を有効にする
          delay: 1000,  // スライドが自動的に進むまでの時間をミリ秒単位で指定する
          disableOnInteraction: false, // ユーザーのスワイプ操作後も自動再生を続ける。選択肢：true：スワイプ操作後に自動再生を停止する, false：スワイプ操作後も自動再生を続ける
        },
        pagination: {  // ページネーション設定
          el: ".swiper-pagination",  // クラス名、idなどのセレクタを指定する
          clickable: true,  // クリックしたスライドに移動するかどうか、true:クリック可、false：クリック不可
        },
        navigation: {  // 矢印ボタンを表示。
          nextEl: '.swiper-button-next',  // "次へ"ボタンのエレメントを指定するセレクタ
          prevEl: '.swiper-button-prev',  // "前へ"ボタンのエレメントを指定するセレクタ
        },
        slidesPerView: 1,  // 1ページに表示するスライド数
        spaceBetween: 10,  // 画像間の余白の設定
        centeredSlides: false,   // これを指定すると中央にある画像にフォーカスされる。選択肢：true：中央にフォーカス, false：中央にフォーカスしない
        breakpoints: {  // レスポンシブデザインのブレークポイントを指定（指定したpx以上の場合）
          768: {
            slidesPerView: 3,  // 1ページに表示するスライド数
          },
        },
      });
    }
  }
  if (library === "slick") {
        //slick slider
    if (document.querySelector('#mv_slider')) {
      $('#mv_slider').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 3000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 3000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 1,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: false,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
    if (document.querySelector('#gallery')) {
      $('#gallery').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 3000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 3000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 5,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: false,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
    if (document.querySelector('#works')) {
      $('#works').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 1000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 1000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 1,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: true,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
    if (document.querySelector('#post')) {
      $('#post').slick({
        // fade: true,  // true:フェード効果を使います, false:スライド効果を使います
        speed: 1000,  // スライドのアニメーション速度をミリ秒単位で設定します
        autoplaySpeed: 1000,  // 自動的にスライドする間隔をミリ秒単位で指定します
        autoplay: true,  // true:自動的にスライドさせる, false:手動でスライドさせる
        arrows: true,  // true:矢印ナビゲーションを表示します, false:矢印ナビゲーションを表示しません
        slidesToShow: 3,  // 一度に表示するスライド数を設定します
        slidesToScroll: 1,  // 一度にスクロールするスライド数を設定します
        centerMode: true,  // true:アクティブなスライドを中央に表示します, false:左から順にスライドを表示します
        pauseOnHover: true,  // true:ホバー時に自動再生を一時停止します, false:ホバー時でも自動再生を続行します
        dots: true,  // ドットの表示
        responsive: [  // レスポンシブ対応の設定
          {
            breakpoint: 768,  // 画面幅が768px未満のときに適用
            settings: {
              slidesToShow: 1,  // 一度に表示するスライド数を設定します
            }
          }
        ]
      });
    }
  }
});

// お問い合わせフォーム送信完了ページに移動させる場合使用します。
// document.addEventListener( 'wpcf7mailsent', function( event ) {
//   location = 'ここに完了ページのURLを記入';
//   // location = 'http://toolwordpressmv.local/contact-thanks/';
// }, false );
jQuery(function ($) {
  // ハンバーガーメニュー
  $(function () {
      $(".js-hamburger").click(function () {
          $(this).toggleClass("is-open");
          $(".js-drawer").toggleClass("is-open");
          $("body").toggleClass("is-fixed");

          const isOpen = $(this).hasClass("is-open");
          $(this).attr("aria-expanded", isOpen ? "true" : "false");
          $(".js-drawer").attr("aria-hidden", isOpen ? "false" : "true");
      });

      // ドロワーナビのaタグをクリックで閉じる
      $(".js-drawer a[href]").on("click", function () {
          $(".js-hamburger").removeClass("is-open");
          $(".js-drawer").removeClass("is-open");
          $("body").removeClass("is-fixed");
          $(".js-hamburger").attr("aria-expanded", "false");
          $(".js-drawer").attr("aria-hidden", "true");
      });

      // resizeイベント
      $(window).on('resize', function() {
          if (window.matchMedia("(min-width: 768px)").matches) {
              $(".js-hamburger").removeClass("is-open");
              $(".js-drawer").removeClass("is-open");
              $("body").removeClass("is-fixed");
              $(".js-hamburger").attr("aria-expanded", "false");
              $(".js-drawer").attr("aria-hidden", "true");
          }
      });
  });
  jQuery(function ($) {
    $('.plan-card__drawer-wrapper').on('click', function () {
        const $wrapper = $(this);
        const $content = $wrapper.next();

        // 開閉動作
        $wrapper.toggleClass('is-open');
        $wrapper.closest('.plan-card__item').toggleClass('is-active');

        // 開く動作かどうか
        const isOpening = $wrapper.hasClass('is-open');

        // もし開くなら、アニメーション開始前にトラックを広げる
        if (isOpening) {
             $('#plan-card-slider .splide__track').addClass('is-drawer-open');
        }

        $content.slideToggle({
            duration: 300,
            complete: function() {
                // アニメーション完了後に状態を再チェック
                const $track = $('#plan-card-slider .splide__track');
                if ($track.length) {
                    // まだ開いているドロワーがあるか確認
                    const hasOpen = $('.plan-card__drawer-wrapper.is-open').length > 0;
                    // もし開いているものがなければ、クラスを外す
                    // (閉じるアニメーション完了後にここで外れるため、ガタつきが防げる)
                    if (!hasOpen) {
                        $track.removeClass('is-drawer-open');
                    }
                }
            }
        });
    });
});

  // SVGマップのリンク化処理
  $(window).on('load', function() {
    // リンク設定リスト: IDとURLのペア
    // ※ここに遷移先のURLを設定してください
    const mapLinks = {
      'higasimatuyama': 'https://example.com/higasimatuyama',
      'kawagoe': 'https://example.com/kawagoe',
      'hujimino': 'https://example.com/hujimino',
      'siki': 'https://example.com/siki',
      // 'Group_19': 'https://example.com/mizuhodai', // IDが確認できたら追加
    };

    // .top-facility 内の svg を対象にする
    const $svg = $('.top-facility svg');
    if ($svg.length) {
      $.each(mapLinks, function(id, url) {
        // IDを持つ要素（グループなど）を探す
        const $target = $svg.find('#' + id);
        if ($target.length) {
          // すでにリンクで囲まれていなければ囲む
          if ($target.parent('a').length === 0) {
            // SVG名前空間を意識してa要素を作成するのはjQueryのwrapでは難しい場合があるため
            // 単純なwrapで試すが、SVG内ではxlink:hrefが必要になる場合も。
            // 最近のブラウザはhrefでも動作するが、念のため。

            // 方法1: jQueryのwrap (SVG内でも動作することが多い)
             $target.wrap('<a href="' + url + '" target="_blank"></a>');

            // 方法2: 動作しない場合はDOM操作でSVG要素を作成する必要があるが、
            // jQueryのwrapで<a href="...">が入るとHTMLのaタグとして解釈される可能性がある。
            // しかし、インラインSVG内であればブラウザがよしなに処理してくれることを期待。
          }
        }
      });
    }
  });

});
