<?php
/**
 * facility投稿のカスタムフィールド（ACFなし）
 */

add_action('add_meta_boxes', 'soukessou_add_facility_meta_boxes');
function soukessou_add_facility_meta_boxes()
{
  add_meta_box(
    'soukessou_facility_meta',
    '施設情報',
    'soukessou_render_facility_meta',
    'facility',
    'normal',
    'high'
  );
}

function soukessou_render_facility_meta($post)
{
  wp_nonce_field('soukessou_save_facility_meta', 'soukessou_facility_meta_nonce');

  $label = get_post_meta($post->ID, 'facility_label', true);
  $address = get_post_meta($post->ID, 'facility_address', true);
  $tags = get_post_meta($post->ID, 'facility_tags', true);
  $thumb_ids = array(
    1 => get_post_meta($post->ID, 'facility_thumb_1', true),
    2 => get_post_meta($post->ID, 'facility_thumb_2', true),
    3 => get_post_meta($post->ID, 'facility_thumb_3', true),
  );
  ?>
  <div style="display:grid; gap:12px;">
    <div>
      <label for="facility_label">ラベル（main-card__label）</label><br>
      <select name="facility_label" id="facility_label">
        <option value="">未設定</option>
        <option value="プライベートホール" <?php selected($label, 'プライベートホール'); ?>>プライベートホール</option>
        <option value="セレモニーホール" <?php selected($label, 'セレモニーホール'); ?>>セレモニーホール</option>
      </select>
    </div>
    <div>
      <label for="facility_address">住所（main-card__address）</label><br>
      <input type="text" id="facility_address" name="facility_address" value="<?php echo esc_attr($address); ?>" style="width:100%;">
    </div>
    <div>
      <label for="facility_tags">タグ（main-card__tag：カンマまたは改行区切り）</label><br>
      <textarea id="facility_tags" name="facility_tags" rows="3" style="width:100%;"><?php echo esc_textarea($tags); ?></textarea>
    </div>
    <?php for ($i = 1; $i <= 3; $i++): ?>
      <?php
      $thumb_id = isset($thumb_ids[$i]) ? intval($thumb_ids[$i]) : 0;
      $thumb_src = $thumb_id ? wp_get_attachment_image_url($thumb_id, 'medium') : '';
      ?>
      <div style="border:1px solid #ddd; padding:10px;">
        <label>サブ画像<?php echo $i; ?>（main-card__thumb）</label><br>
        <div style="display:flex; gap:8px; align-items:center;">
          <input type="hidden" name="facility_thumb_<?php echo $i; ?>" id="facility_thumb_<?php echo $i; ?>" value="<?php echo esc_attr($thumb_id); ?>">
          <button class="button facility-thumb-select" data-target="facility_thumb_<?php echo $i; ?>">画像を選択</button>
          <button class="button facility-thumb-clear" data-target="facility_thumb_<?php echo $i; ?>">クリア</button>
        </div>
        <div class="facility-thumb-preview" id="facility_thumb_preview_<?php echo $i; ?>" style="margin-top:8px;">
          <?php if ($thumb_src): ?>
            <img src="<?php echo esc_url($thumb_src); ?>" style="max-width:150px; height:auto;">
          <?php else: ?>
            <span style="color:#777;">未選択</span>
          <?php endif; ?>
        </div>
      </div>
    <?php endfor; ?>
    <p style="color:#555;">サムネイル（main-card__hero）は「アイキャッチ画像」を利用します。</p>
  </div>
  <?php
}

add_action('save_post_facility', 'soukessou_save_facility_meta');
function soukessou_save_facility_meta($post_id)
{
  if (!isset($_POST['soukessou_facility_meta_nonce']) || !wp_verify_nonce($_POST['soukessou_facility_meta_nonce'], 'soukessou_save_facility_meta')) {
    return;
  }
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  $label = isset($_POST['facility_label']) ? sanitize_text_field($_POST['facility_label']) : '';
  $address = isset($_POST['facility_address']) ? sanitize_text_field($_POST['facility_address']) : '';
  $tags = isset($_POST['facility_tags']) ? wp_kses_post($_POST['facility_tags']) : '';

  update_post_meta($post_id, 'facility_label', $label);
  update_post_meta($post_id, 'facility_address', $address);
  update_post_meta($post_id, 'facility_tags', $tags);

  for ($i = 1; $i <= 3; $i++) {
    $field = 'facility_thumb_' . $i;
    if (isset($_POST[$field])) {
      $id = intval($_POST[$field]);
      if ($id > 0) {
        update_post_meta($post_id, $field, $id);
      } else {
        delete_post_meta($post_id, $field);
      }
    }
  }
}

add_action('admin_enqueue_scripts', 'soukessou_facility_meta_assets');
function soukessou_facility_meta_assets($hook)
{
  $screen = get_current_screen();
  if (!$screen || $screen->post_type !== 'facility') {
    return;
  }
  wp_enqueue_media();
  $inline_js = <<<JS
  (function($){
    $(document).on('click','.facility-thumb-select',function(e){
      e.preventDefault();
      var button = $(this);
      var target = $('#' + button.data('target'));
      var preview = $('#facility_thumb_preview_' + button.data('target').split('_').pop());
      var frame = wp.media({
        title: '画像を選択',
        button: { text: '決定' },
        multiple: false
      });
      frame.on('select', function(){
        var attachment = frame.state().get('selection').first().toJSON();
        target.val(attachment.id);
        preview.html('<img src=\"' + attachment.url + '\" style=\"max-width:150px; height:auto;\" />');
      });
      frame.open();
    });
    $(document).on('click','.facility-thumb-clear',function(e){
      e.preventDefault();
      var button = $(this);
      var target = $('#' + button.data('target'));
      var preview = $('#facility_thumb_preview_' + button.data('target').split('_').pop());
      target.val('');
      preview.html('<span style=\"color:#777;\">未選択</span>');
    });
  })(jQuery);
JS;
  wp_add_inline_script('jquery', $inline_js);
}
















