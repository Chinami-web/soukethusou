<?php
get_header();

$contact_page = get_page_by_path('contact');
$contact_url = $contact_page ? get_permalink($contact_page) : home_url('/contact/');

$errors = [];
$mail_sent = false;
$data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['soukessou_contact_thanks_nonce']) && wp_verify_nonce($_POST['soukessou_contact_thanks_nonce'], 'soukessou_contact_thanks')) {
  $fields = [
    'your-request',
    'your-name-sei',
    'your-name-mei',
    'your-kana-sei',
    'your-kana-mei',
    'your-gender',
    'your-zip',
    'your-address1',
    'your-address2',
    'your-tel',
    'your-email',
    'your-message',
  ];

  foreach ($fields as $key) {
    $raw = isset($_POST[$key]) ? wp_unslash($_POST[$key]) : '';
    $data[$key] = $key === 'your-message' ? sanitize_textarea_field($raw) : sanitize_text_field($raw);
  }

  $admin_email = get_option('admin_email');
  $subject = 'お問い合わせを受け付けました';
  $body = "以下の内容でお問い合わせを受け付けました。\n\n";
  $body .= "ご要望: {$data['your-request']}\n";
  $body .= "姓名: {$data['your-name-sei']} {$data['your-name-mei']}\n";
  $body .= "フリガナ: {$data['your-kana-sei']} {$data['your-kana-mei']}\n";
  $body .= "性別: " . ($data['your-gender'] !== '' ? $data['your-gender'] : '未選択') . "\n";
  $body .= "郵便番号: {$data['your-zip']}\n";
  $body .= "ご住所: {$data['your-address1']} {$data['your-address2']}\n";
  $body .= "電話番号: {$data['your-tel']}\n";
  $body .= "メールアドレス: " . ($data['your-email'] !== '' ? $data['your-email'] : '未入力') . "\n";
  $body .= "お問合せ内容:\n" . ($data['your-message'] !== '' ? $data['your-message'] : '未入力') . "\n";

  $headers = [];
  if ($data['your-email'] !== '') {
    $headers[] = 'Reply-To: ' . $data['your-email'];
  }

  $mail_sent = wp_mail($admin_email, $subject, $body, $headers);
  if (!$mail_sent) {
    $errors[] = '送信に失敗しました。時間をおいて再度お試しください。';
  }
} else {
  $errors[] = '送信内容が見つかりません。';
}
?>

<!-- Contact -->
<main class="main">
  <section class="page-contact page-contact-confirm">
    <div class="l-inner">
      <div class="contact__inner container">
        <h1 class="contact__title page-title__main mincho">お問い合わせいただきありがとうございました。</h1>
        <?php if (!empty($errors)) : ?>
          <p class="contact__description">送信に失敗しました。お手数ですが入力画面からやり直してください。</p>
          <div class="contact__btn">
            <a href="<?php echo esc_url($contact_url); ?>" class="button">入力画面に戻る</a>
          </div>
        <?php else : ?>
          <p class="contact__description">お問い合わせ内容を送信しました。<br>お問い合わせ内容を確認後、担当者よりご連絡させていただきます。</p>
          <div class="contact__btn">
            <a href="<?php echo home_url(); ?>" class="button button-solid">TOPへ戻る</a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
