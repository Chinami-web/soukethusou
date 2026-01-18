
document.addEventListener('DOMContentLoaded', function() {
  var floatingContact = document.querySelector('.floating-contact');
  if (floatingContact) {
    var mvSection = document.querySelector('.mv');
    if (!mvSection) {
      floatingContact.classList.add('is-visible');
    } else {
      var mvBottom = Number.POSITIVE_INFINITY;
      var mvReady = false;
      var mvLocked = false;
      var updateMvBottom = function() {
        if (mvLocked) {
          return;
        }
        var rect = mvSection.getBoundingClientRect();
        if (rect.height <= 0) {
          return;
        }
        mvBottom = rect.top + window.pageYOffset + rect.height;
        mvReady = true;
      };
      var updateFloatingVisibility = function() {
        var scrollY = window.pageYOffset || document.documentElement.scrollTop;
        if (mvLocked && scrollY <= 0) {
          mvLocked = false;
          updateMvBottom();
        }
        if (!mvReady) {
          floatingContact.classList.remove('is-visible');
          return;
        }
        if (scrollY > mvBottom) {
          floatingContact.classList.add('is-visible');
          mvLocked = true;
        } else {
          floatingContact.classList.remove('is-visible');
        }
      };
      updateMvBottom();
      updateFloatingVisibility();
      window.addEventListener('scroll', updateFloatingVisibility, { passive: true });
      window.addEventListener('resize', function() {
        updateMvBottom();
        updateFloatingVisibility();
      });
      window.addEventListener('load', function() {
        updateMvBottom();
        updateFloatingVisibility();
      });
    }
  }
  var header = document.querySelector('.header');
  if (header) {
    var lastScrollY = window.pageYOffset || document.documentElement.scrollTop;
    var scrollThreshold = 100;
    var headerMvSection = document.querySelector('.mv');
    var headerMvBottom = Number.POSITIVE_INFINITY;
    var headerMvReady = false;
    var headerMvLocked = false;
    var updateHeaderMvBottom = function() {
      if (headerMvLocked) {
        return;
      }
      if (!headerMvSection) {
        headerMvBottom = 0;
        return;
      }
      var rect = headerMvSection.getBoundingClientRect();
      if (rect.height <= 0) {
        return;
      }
      headerMvBottom = rect.top + window.pageYOffset + rect.height;
      headerMvReady = true;
    };
    var updateHeaderState = function() {
      var currentScrollY = window.pageYOffset || document.documentElement.scrollTop;
      if (document.body.classList.contains('is-fixed')) {
        lastScrollY = currentScrollY;
        return;
      }
      if (headerMvLocked && currentScrollY <= 0) {
        headerMvLocked = false;
        updateHeaderMvBottom();
      }
      if (headerMvSection) {
        if (!headerMvReady) {
          updateHeaderMvBottom();
          header.classList.remove('is-visible');
          header.classList.remove('is-hidden');
          lastScrollY = currentScrollY;
          return;
        }
      }
      if (currentScrollY <= scrollThreshold || currentScrollY <= headerMvBottom) {
        header.classList.remove('is-visible');
        header.classList.remove('is-hidden');
        lastScrollY = currentScrollY;
        return;
      }
      if (currentScrollY < lastScrollY) {
        header.classList.add('is-visible');
        header.classList.remove('is-hidden');
      } else if (currentScrollY > lastScrollY) {
        header.classList.add('is-hidden');
        header.classList.remove('is-visible');
      }
      if (currentScrollY > headerMvBottom) {
        headerMvLocked = true;
      }
      lastScrollY = currentScrollY;
    };
    updateHeaderMvBottom();
    updateHeaderState();
    window.addEventListener('scroll', updateHeaderState, { passive: true });
    window.addEventListener('resize', function() {
      updateHeaderMvBottom();
      updateHeaderState();
    });
    window.addEventListener('load', function() {
      updateHeaderMvBottom();
      updateHeaderState();
    });
  }
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
          fixedWidth: '60%', // 中央を大きく確保
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
    if (document.querySelector('#facility-gallery')) {
      const facilityGallerySlider = new Splide('#facility-gallery',
        {
          type: 'loop',
          speed: 2000,
          autoplay: false,
          interval: 4000,
          rewind: true,
          arrows: true,
          perPage: 1,
          fixedWidth: '54%',
          pagination: false,
          breakpoints: {
            767: {
              perPage: 1,
              fixedWidth: '76%',
              padding: '0%',
              gap: '20px',
            }
          },
          perMove: 1,
          focus: 'center',
          padding: '0%',
          gap: '47px',
        }
      );

      facilityGallerySlider.on('move', function(newIndex, prevIndex) {
        const slides = facilityGallerySlider.Components.Elements.slides;
        if (slides && slides.length > 0) {
          slides.forEach(function(slide) {
            slide.classList.remove('is-active');
          });
          if (slides[newIndex]) {
            slides[newIndex].classList.add('is-active');
          }
        }
      });

      facilityGallerySlider.mount();
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
          autoplay: true,
          interval: 4000,
          rewind: true,
          arrows: false,
          pagination: false,
          perPage: 3,
          paddingLeft: '80px',
          gap: '40px',
          perMove: 1,
          focus: 'start',
          breakpoints: {
            767: {
              padding: { left: '0', right: '100px' },
              perPage: 1,
              perMove: 1,
              gap: '10px',
              autoplay: true,
              interval: 3000,
              arrows: true,
              rewind: false,
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

      // デバッグ用ログ
      mainCardSlider.on('mounted', () => {
        const isSP = window.innerWidth <= 767;
        const track = document.querySelector('#main-card-slider .splide__track');
        const list = document.querySelector('#main-card-slider .splide__list');
        const firstSlide = document.querySelector('#main-card-slider .splide__slide');

        console.log('=== Splide mounted ===');
        console.log('isSP:', isSP);
        console.log('windowWidth:', window.innerWidth);
        console.log('perPage:', mainCardSlider.options.perPage);
        console.log('paddingLeft:', mainCardSlider.options.paddingLeft);
        console.log('paddingRight:', mainCardSlider.options.paddingRight);
        console.log('padding:', mainCardSlider.options.padding);
        console.log('gap:', mainCardSlider.options.gap);
        console.log('type:', mainCardSlider.options.type);
        console.log('rewind:', mainCardSlider.options.rewind);
        console.log('--- DOM要素のスタイル ---');
        if (track) {
          console.log('track paddingRight:', window.getComputedStyle(track).paddingRight);
          console.log('track paddingLeft:', window.getComputedStyle(track).paddingLeft);
        }
        if (list) {
          console.log('list gap:', window.getComputedStyle(list).gap);
        }
        if (firstSlide) {
          console.log('firstSlide width:', window.getComputedStyle(firstSlide).width);
          console.log('firstSlide marginRight:', window.getComputedStyle(firstSlide).marginRight);
        }
        console.log('====================');
      });

      mainCardSlider.on('move', (newIndex, prevIndex, destIndex) => {
        console.log('Splide move:', {
          newIndex,
          prevIndex,
          destIndex,
          currentIndex: mainCardSlider.index,
          length: mainCardSlider.length
        });
      });

      mainCardSlider.on('moved', (newIndex, prevIndex, destIndex) => {
        console.log('Splide moved:', {
          newIndex,
          prevIndex,
          destIndex,
          currentIndex: mainCardSlider.index,
          length: mainCardSlider.length
        });
      });

      mainCardSlider.on('visible', (Slide) => {
        console.log('Splide visible:', {
          index: Slide.index,
          currentIndex: mainCardSlider.index
        });
      });

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

      // mount前の設定確認
      const isSP = window.innerWidth <= 767;
      console.log('=== Splide mount前 ===');
      console.log('isSP:', isSP);
      console.log('windowWidth:', window.innerWidth);
      console.log('設定値（breakpoints適用前）:', {
        perPage: mainCardSlider.options.perPage,
        paddingLeft: mainCardSlider.options.paddingLeft,
        paddingRight: mainCardSlider.options.paddingRight,
        gap: mainCardSlider.options.gap,
        type: mainCardSlider.options.type,
        rewind: mainCardSlider.options.rewind
      });

      mainCardSlider.mount();

      // ハッシュリンクでスライドに移動する処理
      const handleHashChange = () => {
        const hash = window.location.hash.replace('#', '');
        if (!hash) return;

        // スライドを検索（data属性も確認）
        const allSlides = Array.from(document.querySelectorAll('#main-card-slider .splide__slide'));
        // 実際のスライドのみを検索（クローンを除外）
        const actualSlides = allSlides.filter(slide => {
          const slideId = slide.id;
          // main-card-slider-slideXX の形式のスライドのみを対象
          return slideId && slideId.startsWith('main-card-slider-slide');
        });

        let targetSlide = null;
        let actualSlideIndex = -1;

        // 実際のスライドから検索（data-original-idで）
        targetSlide = actualSlides.find(slide => {
          const originalId = slide.getAttribute('data-original-id');
          return originalId === hash;
        });

        if (targetSlide) {
          // 実際のスライドのインデックスを取得（actualSlidesの中での位置：0-7）
          actualSlideIndex = actualSlides.indexOf(targetSlide);
        }

        if (actualSlideIndex === -1 || !targetSlide) return;

        // 画面幅に応じてインデックスを調整
        const isSP = window.innerWidth <= 767;
        let targetIndex;

        if (isSP) {
          // SPの場合（perPage: 1）：クリックしたスライドを1枚目（一番左）に配置
          targetIndex = actualSlideIndex;
        } else {
          // PCの場合（perPage: 3）：クリックしたスライドを2枚目（中央）に配置
          // その1つ前のスライドを選択する必要がある
          // ループモードなので、負のインデックスも使用可能
          targetIndex = actualSlideIndex - 1;
        }

        // Splideのgo()メソッドには調整後のインデックスを渡す
        mainCardSlider.go(targetIndex);

        // スムーズスクロールでスライダーセクションまで移動
        setTimeout(() => {
          const sliderSection = document.querySelector('.top-main-card');
          if (sliderSection) {
            const offsetTop = sliderSection.getBoundingClientRect().top + window.pageYOffset - 100;
            window.scrollTo({
              top: offsetTop,
              behavior: 'smooth'
            });
          }
        }, 300);
      };

      // Splideマウント後にIDを再設定
      mainCardSlider.on('mounted', () => {
        const slides = document.querySelectorAll('#main-card-slider .splide__slide');
        slides.forEach((slide, index) => {
          // 元のIDをdata属性から取得して再設定
          const originalId = slide.getAttribute('data-original-id') || slide.id;
          if (originalId && originalId !== `main-card-slider-slide${String(index + 1).padStart(2, '0')}`) {
            slide.id = originalId;
            slide.setAttribute('data-original-id', originalId);
          }
        });

        // ページ読み込み時にハッシュがあれば移動
        if (window.location.hash) {
          setTimeout(handleHashChange, 300);
        }
      });

      // ハッシュ変更時に実行
      window.addEventListener('hashchange', handleHashChange);

      // facility-pinのクリックイベント
      document.querySelectorAll('.facility-pin').forEach(pin => {
        pin.addEventListener('click', (e) => {
          const slug = pin.getAttribute('data-facility-slug');
          if (slug) {
            e.preventDefault();
            window.location.hash = slug;
            // 少し遅延させてから実行（Splideの準備を待つ）
            setTimeout(handleHashChange, 100);
          }
        });
      });

      // mount後の設定確認
      setTimeout(() => {
        const track = document.querySelector('#main-card-slider .splide__track');
        const list = document.querySelector('#main-card-slider .splide__list');
        const firstSlide = document.querySelector('#main-card-slider .splide__slide');

        console.log('=== Splide mount後 ===');
        console.log('設定値（breakpoints適用後）:', {
          perPage: mainCardSlider.options.perPage,
          paddingLeft: mainCardSlider.options.paddingLeft,
          paddingRight: mainCardSlider.options.paddingRight,
          padding: mainCardSlider.options.padding,
          gap: mainCardSlider.options.gap,
          type: mainCardSlider.options.type,
          rewind: mainCardSlider.options.rewind
        });
        console.log('--- DOM要素のスタイル ---');
        if (track) {
          console.log('track paddingRight:', window.getComputedStyle(track).paddingRight);
          console.log('track paddingLeft:', window.getComputedStyle(track).paddingLeft);
          console.log('track width:', window.getComputedStyle(track).width);
        }
        if (list) {
          console.log('list gap:', window.getComputedStyle(list).gap);
          console.log('list width:', window.getComputedStyle(list).width);
        }
        if (firstSlide) {
          console.log('firstSlide width:', window.getComputedStyle(firstSlide).width);
          console.log('firstSlide marginRight:', window.getComputedStyle(firstSlide).marginRight);
        }
        console.log('====================');
      }, 100);
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
              padding:'14%',
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
             let transform = 'translateY(-21%)';
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
    if (document.querySelector('#relation-parts-slider')) {
      const relationPartsSlider = new Splide('#relation-parts-slider',
        {
          type: 'loop',
          speed: 800,
          autoplay: true,
          interval: 4000,
          rewind: true,
          arrows: true,
          pagination: false,
          perPage: 1,
          perMove: 1,
        }
      );
      relationPartsSlider.mount();
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

  // モーダル制御
  jQuery(function($) {
    const $modal = $('#movie-modal');
    const $video = $('#modal-video');
    const $thumbnails = $('.movie-modal__thumbnail');

    // 開く
    $('#mv-modal').on('click', function() {
        $modal.addClass('is-open');
        $modal.animate({ opacity: 1 }, 300);
        // デフォルト動画（最初のサムネイルの動画）をセットして停止状態で表示
        const defaultSrc = $thumbnails.first().data('src');
        $video.find('source').attr('src', defaultSrc);
        $video[0].load();

        $thumbnails.removeClass('is-active');
        $thumbnails.first().addClass('is-active');
    });

    // 閉じる
    $('.movie-modal__close, .movie-modal__overlay').on('click', function() {
        $modal.animate({ opacity: 0 }, 300, function() {
             $modal.removeClass('is-open');
             $video[0].pause();
             $video[0].currentTime = 0;
        });
    });

    // 動画切り替え
    $thumbnails.on('click', function() {
        // クリックされたのがすでにアクティブな場合は何もしない
        if ($(this).hasClass('is-active')) return;

        const src = $(this).data('src');
        $thumbnails.removeClass('is-active');
        $(this).addClass('is-active');

        $video.find('source').attr('src', src);
        $video[0].load();
        $video[0].play();
    });
  });

  // フッターナビゲーションの開閉（SPのみ）
  jQuery(function ($) {
    function initFooterNavToggle() {
      // SPのみで動作するように判定
      const isSP = window.matchMedia("(max-width: 767px)").matches;
      console.log('initFooterNavToggle - isSP:', isSP);

      if (isSP) {
        $('.js-footer-nav-toggle').off('click.footerNav mouseleave.footerNav').on('click.footerNav', function() {
          const $title = $(this);
          const $list = $title.next('.footer-nav__list');
          const $nav = $title.closest('.footer-nav');

          // 現在の状態を確認
          const wasOpen = $title.hasClass('is-open');
          console.log('クリック前の状態 - is-open:', wasOpen);
          console.log('$title要素:', $title[0]);
          console.log('$list要素:', $list[0]);

          // 開閉動作
          $title.toggleClass('is-open');
          $nav.toggleClass('is-open');

          // 変更後の状態を確認
          const isNowOpen = $title.hasClass('is-open');
          console.log('クリック後の状態 - is-open:', isNowOpen);
          console.log('$titleのクラス:', $title[0].className);

          // SP時はCSS変数で制御（ホバーは不要）
          if (!isNowOpen) {
            // 閉じた時は強制的に45度に戻す
            $title[0].style.setProperty('--arrow-rotate', '45deg');
            console.log('閉じた時 - arrow-rotateを45degに設定');
          } else {
            // 開いた時は225度
            $title[0].style.setProperty('--arrow-rotate', '225deg');
            console.log('開いた時 - arrow-rotateを225degに設定');
          }

          $list.slideToggle(300, function() {
            console.log('アニメーション完了 - is-open:', $title.hasClass('is-open'));
            console.log('リストの表示状態:', $list.is(':visible'));
          });
        });

        // 初期状態を確認
        $('.js-footer-nav-toggle').each(function() {
          const $title = $(this);
          console.log('初期状態 - 要素:', $title[0], 'is-open:', $title.hasClass('is-open'));
        });
      } else {
        // PCの場合は開閉機能を無効化し、常に表示
        console.log('PC表示モード - 開閉機能を無効化');
        $('.js-footer-nav-toggle').off('click.footerNav');
        $('.footer-nav__list').show();
        $('.js-footer-nav-toggle').removeClass('is-open');
        $('.footer-nav').removeClass('is-open');
      }
    }

    // 初期化
    initFooterNavToggle();

    // リサイズ時に再初期化
    $(window).on('resize', function() {
      console.log('リサイズイベント');
      initFooterNavToggle();
    });
  });

  // top-voice__textの行数制御
  function adjustTopVoiceText() {
    const textElements = document.querySelectorAll('.top-voice__text');

    textElements.forEach(function(element) {
      // 既に処理済みの場合はスキップ
      if (element.dataset.processed === 'true') {
        return;
      }

      const originalText = element.textContent.trim();
      if (!originalText) return;

      // 元のテキストを保存
      if (!element.dataset.originalText) {
        element.dataset.originalText = originalText;
      }

      // 元のテキストを復元
      element.textContent = element.dataset.originalText;

      // 一時的な要素を作成して行数を測定
      const tempElement = element.cloneNode(true);
      tempElement.style.position = 'absolute';
      tempElement.style.visibility = 'hidden';
      tempElement.style.width = element.offsetWidth + 'px';
      tempElement.style.height = 'auto';
      tempElement.style.whiteSpace = 'normal';
      tempElement.style.wordWrap = 'break-word';
      tempElement.style.top = '-9999px';
      tempElement.textContent = element.dataset.originalText;

      document.body.appendChild(tempElement);
      const lineHeight = parseFloat(window.getComputedStyle(element).lineHeight);
      const height = tempElement.offsetHeight;
      const lineCount = Math.ceil(height / lineHeight);
      document.body.removeChild(tempElement);

      // 4行以上になる場合、3行目の最後6文字を全角スペース3つに置き換え
      if (lineCount >= 4) {
        // Range APIを使って3行目の終了位置を特定
        const range = document.createRange();
        const textNode = element.firstChild;
        if (!textNode || textNode.nodeType !== Node.TEXT_NODE) {
          element.dataset.processed = 'true';
          return;
        }

        const text = element.dataset.originalText;
        const elementRect = element.getBoundingClientRect();
        let thirdLineEnd = text.length;

        // 3行目の終了位置を探す
        for (let i = 0; i < text.length; i++) {
          range.setStart(textNode, 0);
          range.setEnd(textNode, i);
          const rect = range.getBoundingClientRect();
          const relativeTop = rect.top - elementRect.top;

          if (relativeTop >= lineHeight * 3) {
            thirdLineEnd = i;
            break;
          }
        }

        // 3行目の開始位置を探す
        let thirdLineStart = 0;
        for (let i = 0; i < text.length; i++) {
          range.setStart(textNode, 0);
          range.setEnd(textNode, i);
          const rect = range.getBoundingClientRect();
          const relativeTop = rect.top - elementRect.top;

          if (relativeTop >= lineHeight * 2) {
            thirdLineStart = i;
            break;
          }
        }

        // 3行目のテキストを取得
        const thirdLineText = text.substring(thirdLineStart, thirdLineEnd);

        // 3行目が6文字以上の場合、最後6文字を全角スペース2つ + 三点リーダー + 全角スペース1つに置き換え
        if (thirdLineText.length >= 6) {
          const modifiedThirdLine = thirdLineText.slice(0, -6) + '　　' + '・・・' + '　';
          const modifiedText = text.substring(0, thirdLineStart) + modifiedThirdLine + text.substring(thirdLineEnd);
          element.textContent = modifiedText;
        }
      }

      element.dataset.processed = 'true';
    });
  }

  // DOMContentLoaded後に実行
  if (document.querySelectorAll('.top-voice__text').length > 0) {
    // 画像の読み込み完了を待つ
    window.addEventListener('load', function() {
      setTimeout(adjustTopVoiceText, 100);
    });

    // リサイズ時にも再実行
    let resizeTimer;
    window.addEventListener('resize', function() {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(function() {
        adjustTopVoiceText();
      }, 250);
    });
  }

});

// Contact Form 7 Yubinbango Support
jQuery(function ($) {
  var $form = $('.wpcf7-form');
  if ($form.length) {
    $form.addClass('h-adr');
  }
});

// GSAP Animations
document.addEventListener('DOMContentLoaded', function() {
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    // 共通のフェードイン設定（下からふわっと）
    // HTML側で対象の要素に class="js-fade-up" を付与してください
    const fadeUpElements = document.querySelectorAll('.js-fade-up');
    fadeUpElements.forEach(el => {
      gsap.fromTo(el,
        {
          y: 30,
          autoAlpha: 0
        },
        {
          y: 0,
          autoAlpha: 1,
          duration: 1.5, // アニメーション時間を1.5秒に変更
          ease: 'power2.out',
          scrollTrigger: {
            trigger: el,
            start: 'top 80%', // 画面の下から20%の位置に来たら開始
            toggleActions: 'play none none none' // 一度だけ再生
          }
        }
      );
    });

    // feature-list__img (6枚を遅延表示)
    const featureImages = document.querySelectorAll('.feature-list__img');
    if (featureImages.length > 0) {
      // 最初の画像の親要素（リスト全体）をトリガーにすることを試みる
      const triggerElement = featureImages[0].closest('.feature-list') || featureImages[0];

      gsap.fromTo(featureImages,
        {
          y: 30,
          autoAlpha: 0
        },
        {
          y: 0,
          autoAlpha: 1,
          duration: 2,
          ease: 'power2.out',
          stagger: 0.6, // 0.2秒ずつ遅延
          scrollTrigger: {
            trigger: triggerElement,
            start: 'top 80%',
            toggleActions: 'play none none none'
          }
        }
      );
    }
  }
});
