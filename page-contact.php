<?php get_header(); ?>
<main class="main">
  <section class="page-mv">
    <div class="page-mv__inner">
      <div class="page-mv__image">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact/fv.jpg" media="(min-width:768px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/fvSP.jpg" alt="ページヘッダー画像">
          </picture>
      </div>
      <div class="page-mv__title mincho">
        <h1 class="page-mv__title-text">お問合せ</h1>
      </div>
    </div>
  </section>
  <div class="page-contact">
    <div class="l-inner">
      <div class="page-contact__title-wrapper page-title__wrapper">
        <h2 class="page-contact__title-main page-title__main mincho">各種お問合せにつきましては、下記フォームより承っておりますので、お気軽にご相談ください。</h2>
        <p class="page-contact__title-text-sub page-title__text-sub">この度は、東上セレモのホームページへアクセスいただき、誠にありがとうございます。<br>
          ホームページよりお問合せいただくと「お葬式スムーズノート」をプレゼントいたします。</p>
      </div>
      <div class="page-contact__description">
        【営業メールを送信される方へ】<br>こちらはお客様専用フォームです。弊社への営業メールは必ずこちらの <a href="#"> 営業専用フォーム（リンクはこちら）</a>からご提案ください。営業メールをこのフォームから送信されますと、弊社のお客様への返信、確認に時間のロスが発生いたしますためご協力をお願いいたします。
      </div>
      <section class="contact">
        <div class="contact__wrap">
          <div class="contact__inner container">
            <?php echo do_shortcode('[contact-form-7 id="4b743e9" title="お問い合わせ" html_class="h-adr"]'); ?>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>
