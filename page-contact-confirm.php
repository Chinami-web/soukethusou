<?php
get_header();

$contact_page = get_page_by_path('contact');
$contact_url = $contact_page ? get_permalink($contact_page) : home_url('/contact/');

$thanks_page = get_page_by_path('contact-thanks');
$thanks_url = $thanks_page ? get_permalink($thanks_page) : home_url('/contact-thanks/');

$errors = [];
$data = [];

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  $errors[] = '入力内容が見つかりません。';
} elseif (empty($_POST['soukessou_contact_nonce']) || !wp_verify_nonce($_POST['soukessou_contact_nonce'], 'soukessou_contact_confirm')) {
  $errors[] = 'セキュリティチェックに失敗しました。';
} else {
  $fields = [
    'your-request' => ['label' => 'ご要望', 'required' => true],
    'your-name-sei' => ['label' => '姓', 'required' => true],
    'your-name-mei' => ['label' => '名', 'required' => true],
    'your-kana-sei' => ['label' => 'フリガナ（姓）', 'required' => true],
    'your-kana-mei' => ['label' => 'フリガナ（名）', 'required' => true],
    'your-gender' => ['label' => '性別', 'required' => false],
    'your-zip' => ['label' => '郵便番号', 'required' => true],
    'your-address1' => ['label' => 'ご住所1', 'required' => true],
    'your-address2' => ['label' => 'ご住所2', 'required' => true],
    'your-tel' => ['label' => '電話番号', 'required' => true],
    'your-email' => ['label' => 'メールアドレス', 'required' => false],
    'your-message' => ['label' => 'お問合せ内容', 'required' => false],
  ];

  foreach ($fields as $key => $field) {
    $raw = isset($_POST[$key]) ? wp_unslash($_POST[$key]) : '';
    $value = $key === 'your-message' ? sanitize_textarea_field($raw) : sanitize_text_field($raw);
    if ($field['required'] && $value === '') {
      $errors[] = $field['label'] . 'は必須項目です。';
    }
    $data[$key] = $value;
  }
}
?>

<!-- Contact -->
<main class="main">
  <section class="page-contact page-contact-confirm">
    <div class="l-inner">
      <div class="contact__inner container">
        <h1 class="page-title__main mincho">お問い合わせ確認</h1>
        <?php if (!empty($errors)) : ?>
          <p class="page-title__text-sub">入力内容に不足があります。お手数ですが最初からやり直してください。</p>
          <div class="contact__btn">
            <a href="<?php echo esc_url($contact_url); ?>" class="button">入力画面に戻る</a>
          </div>
        <?php else : ?>
          <div class="contact__list">
            <div class="contact__item">
              <div class="contact__label">ご要望</div>
              <div class="contact__input"><?php echo esc_html($data['your-request']); ?></div>
            </div>
            <div class="contact__item">
              <div class="contact__label">姓名</div>
              <div class="contact__input"><?php echo esc_html($data['your-name-sei'] . ' ' . $data['your-name-mei']); ?></div>
            </div>
            <div class="contact__item">
              <div class="contact__label">フリガナ</div>
              <div class="contact__input"><?php echo esc_html($data['your-kana-sei'] . ' ' . $data['your-kana-mei']); ?></div>
            </div>
            <div class="contact__item">
              <div class="contact__label">性別</div>
              <div class="contact__input"><?php echo esc_html($data['your-gender'] !== '' ? $data['your-gender'] : '未選択'); ?></div>
            </div>
            <div class="contact__item">
              <div class="contact__label">郵便番号</div>
              <div class="contact__input"><?php echo esc_html($data['your-zip']); ?></div>
            </div>
            <div class="contact__item">
              <div class="contact__label">ご住所</div>
              <div class="contact__input"><?php echo esc_html($data['your-address1'] . ' ' . $data['your-address2']); ?></div>
            </div>
            <div class="contact__item">
              <div class="contact__label">電話番号</div>
              <div class="contact__input"><?php echo esc_html($data['your-tel']); ?></div>
            </div>
            <div class="contact__item">
              <div class="contact__label">メールアドレス</div>
              <div class="contact__input"><?php echo esc_html($data['your-email'] !== '' ? $data['your-email'] : '未入力'); ?></div>
            </div>
            <div class="contact__item">
              <div class="contact__label">お問合せ内容</div>
              <div class="contact__input"><?php echo nl2br(esc_html($data['your-message'] !== '' ? $data['your-message'] : '未入力')); ?></div>
            </div>
          </div>

          <form method="post" action="<?php echo esc_url($thanks_url); ?>">
            <?php wp_nonce_field('soukessou_contact_thanks', 'soukessou_contact_thanks_nonce'); ?>
            <?php foreach ($data as $key => $value) : ?>
              <input type="hidden" name="<?php echo esc_attr($key); ?>" value="<?php echo esc_attr($value); ?>">
            <?php endforeach; ?>
            <div class="contact__submit">
              <input type="submit" value="この内容で送信する">
            </div>
          </form>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
