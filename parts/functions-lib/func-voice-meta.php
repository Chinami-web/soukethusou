<?php
/**
 * voice投稿のカスタムフィールド（ACFなし）
 */

add_action('add_meta_boxes', 'soukessou_add_voice_meta_boxes');
function soukessou_add_voice_meta_boxes()
{
  add_meta_box(
    'soukessou_voice_meta',
    'お客様の声情報',
    'soukessou_render_voice_meta',
    'voice',
    'normal',
    'high'
  );
}

function soukessou_render_voice_meta($post)
{
  wp_nonce_field('soukessou_save_voice_meta', 'soukessou_voice_meta_nonce');

  $address = get_post_meta($post->ID, 'voice_address', true);
  $customer_name = get_post_meta($post->ID, 'voice_customer_name', true);
  ?>
  <div style="display:grid; gap:12px;">
    <div>
      <label for="voice_address">住所</label><br>
      <input type="text" id="voice_address" name="voice_address" value="<?php echo esc_attr($address); ?>" style="width:100%;">
    </div>
    <div>
      <label for="voice_customer_name">名前</label><br>
      <input type="text" id="voice_customer_name" name="voice_customer_name" value="<?php echo esc_attr($customer_name); ?>" style="width:100%;">
    </div>
  </div>
  <?php
}

add_action('save_post_voice', 'soukessou_save_voice_meta');
function soukessou_save_voice_meta($post_id)
{
  if (!isset($_POST['soukessou_voice_meta_nonce']) || !wp_verify_nonce($_POST['soukessou_voice_meta_nonce'], 'soukessou_save_voice_meta')) {
    return;
  }
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  $address = isset($_POST['voice_address']) ? sanitize_text_field($_POST['voice_address']) : '';
  $customer_name = isset($_POST['voice_customer_name']) ? sanitize_text_field($_POST['voice_customer_name']) : '';

  update_post_meta($post_id, 'voice_address', $address);
  update_post_meta($post_id, 'voice_customer_name', $customer_name);
}








