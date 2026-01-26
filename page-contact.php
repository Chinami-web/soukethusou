<?php
get_header();

$confirm_page = get_page_by_path('contact-confirm');
$confirm_url = $confirm_page ? get_permalink($confirm_page) : home_url('/contact-confirm/');
?>
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
        <h1 class="page-mv__title-text">お問合わせ</h1>
      </div>
    </div>
  </section>
  <div class="page-contact">
    <div class="l-inner">
      <div class="page-contact__title-wrapper page-title__wrapper">
        <h2 class="page-contact__title-main page-title__main mincho">各種お問合わせにつきましては、下記フォームより承っておりますので、お気軽にご相談ください。</h2>
        <p class="page-contact__title-text-sub page-title__text-sub">この度は、東上セレモのホームページへアクセスいただき、誠にありがとうございます。<br>
          ホームページよりお問合わせいただくと「お葬式スムーズノート」をプレゼントいたします。</p>
      </div>
      <div class="page-contact__description">
        【営業メールを送信される方へ】<br>こちらはお客様専用フォームです。弊社への営業メールは必ずこちらの <a href="#"> 営業専用フォーム（リンクはこちら）</a>からご提案ください。営業メールをこのフォームから送信されますと、弊社のお客様への返信、確認に時間のロスが発生いたしますためご協力をお願いいたします。
      </div>
      <section class="contact">
        <div class="contact__wrap">
          <div class="contact__inner container">
            <?php if (!empty($_GET['error'])) : ?>
              <p class="contact__error">入力内容に不足があります。必須項目をご確認ください。</p>
            <?php endif; ?>
            <form class="h-adr" method="post" action="<?php echo esc_url($confirm_url); ?>">
              <?php wp_nonce_field('soukessou_contact_confirm', 'soukessou_contact_nonce'); ?>
              <span class="p-country-name" style="display:none;">Japan</span>

              <div class="contact__list">
                <div class="contact__item">
                  <div class="contact__label">ご要望<span class="contact__required">必須</span></div>
                  <div class="contact__input">
                    <select name="your-request" required>
                      <option value="">ご要望を選択してください</option>
                      <option value="ご葬儀の資料請求">ご葬儀の資料請求</option>
                      <option value="ご葬儀の見積り依頼">ご葬儀の見積り依頼</option>
                      <option value="ご葬儀の事前相談">ご葬儀の事前相談</option>
                      <option value="施設見学希望">施設見学希望</option>
                      <option value="互助会の資料請求・お問い合わせ">互助会の資料請求・お問い合わせ</option>
                      <option value="その他">その他</option>
                    </select>
                  </div>
                </div>

                <div class="contact__item">
                  <div class="contact__label">姓名<span class="contact__required">必須</span></div>
                  <div class="contact__input contact__input-group">
                    <input type="text" name="your-name-sei" placeholder="姓をご入力ください。" required>
                    <input type="text" name="your-name-mei" placeholder="名をご入力ください。" required>
                  </div>
                </div>

                <div class="contact__item">
                  <div class="contact__label">フリガナ<span class="contact__required">必須</span></div>
                  <div class="contact__input contact__input-group">
                    <input type="text" name="your-kana-sei" placeholder="姓のフリガナをご入力ください。" required>
                    <input type="text" name="your-kana-mei" placeholder="名のフリガナをご入力ください。" required>
                  </div>
                </div>

                <div class="contact__item">
                  <div class="contact__label">性別</div>
                  <div class="contact__input">
                    <select name="your-gender">
                      <option value="">性別を選択してください。</option>
                      <option value="男性">男性</option>
                      <option value="女性">女性</option>
                    </select>
                  </div>
                </div>

                <div class="contact__item">
                  <div class="contact__label">郵便番号<span class="contact__required">必須</span></div>
                  <div class="contact__input">
                    <input type="text" name="your-zip" class="p-postal-code" placeholder="郵便番号" required>
                  </div>
                </div>

                <div class="contact__item">
                  <div class="contact__label">ご住所1<span class="contact__required">必須</span></div>
                  <div class="contact__input">
                    <input type="text" name="your-address1" class="p-region p-locality p-street-address" placeholder="ご住所" required>
                  </div>
                </div>

                <div class="contact__item">
                  <div class="contact__label">ご住所2<span class="contact__required">必須</span></div>
                  <div class="contact__input">
                    <input type="text" name="your-address2" class="p-extended-address" placeholder="詳細の住所" required>
                  </div>
                </div>

                <div class="contact__item">
                  <div class="contact__label">電話番号<span class="contact__required">必須</span></div>
                  <div class="contact__input">
                    <input type="tel" name="your-tel" placeholder="電話番号" required>
                  </div>
                </div>

                <div class="contact__item">
                  <div class="contact__label">メールアドレス</div>
                  <div class="contact__input">
                    <input type="email" name="your-email" placeholder="メールアドレス">
                  </div>
                </div>

                <div class="contact__item">
                  <div class="contact__label">お問合せ内容</div>
                  <div class="contact__input">
                    <textarea name="your-message" placeholder="お問合せ内容"></textarea>
                  </div>
                </div>
              </div>

              <div class="contact__submit">
                <input type="submit" value="同意して内容を確認する">
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</main>

<?php get_footer(); ?>
