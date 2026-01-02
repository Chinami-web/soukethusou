<?php
/**
 * gallery投稿のカスタムフィールド（ACFなし）
 */

add_action('add_meta_boxes', 'soukessou_add_gallery_meta_boxes');
function soukessou_add_gallery_meta_boxes()
{
  add_meta_box(
    'soukessou_gallery_meta',
    'ギャラリー画像',
    'soukessou_render_gallery_meta',
    'gallery',
    'normal',
    'high'
  );
}

function soukessou_render_gallery_meta($post)
{
  wp_nonce_field('soukessou_save_gallery_meta', 'soukessou_gallery_meta_nonce');

  $pc_id = intval(get_post_meta($post->ID, 'slide_img_pc', true));
  $sp_id = intval(get_post_meta($post->ID, 'slide_img_sp', true));
  $alt = get_post_meta($post->ID, 'slide_img_alt', true);
  $url = get_post_meta($post->ID, 'slide_img_url', true);
  $tab = get_post_meta($post->ID, 'slide_img_tab', true) == '1';

  $pc_src = $pc_id ? wp_get_attachment_image_url($pc_id, 'medium') : '';
  $sp_src = $sp_id ? wp_get_attachment_image_url($sp_id, 'medium') : '';
  ?>
  <div style="display:grid; gap:16px;">
    <?php
    $images = array(
      array('key' => 'slide_img_pc', 'label' => 'PC用画像', 'id' => $pc_id, 'src' => $pc_src),
      array('key' => 'slide_img_sp', 'label' => 'SP用画像（任意）', 'id' => $sp_id, 'src' => $sp_src),
    );
    foreach ($images as $image) :
      $key = $image['key'];
      $label = $image['label'];
      $id = $image['id'];
      $src = $image['src'];
    ?>
      <div style="border:1px solid #ddd; padding:10px;">
        <label><?php echo esc_html($label); ?></label><br>
        <div style="display:flex; gap:8px; align-items:center; margin-top:6px;">
          <input type="hidden" name="<?php echo esc_attr($key); ?>" id="<?php echo esc_attr($key); ?>" value="<?php echo esc_attr($id); ?>">
          <button class="button gallery-image-select" data-target="<?php echo esc_attr($key); ?>">画像を選択</button>
          <button class="button gallery-image-clear" data-target="<?php echo esc_attr($key); ?>">クリア</button>
        </div>
        <div class="gallery-image-preview" id="<?php echo esc_attr($key); ?>_preview" style="margin-top:8px;">
          <?php if ($src): ?>
            <img src="<?php echo esc_url($src); ?>" style="max-width:200px; height:auto;">
          <?php else: ?>
            <span style="color:#777;">未選択</span>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>

    <div>
      <label for="slide_img_alt">代替テキスト（alt属性）</label><br>
      <input type="text" id="slide_img_alt" name="slide_img_alt" value="<?php echo esc_attr($alt); ?>" style="width:100%;">
    </div>
    <div>
      <label for="slide_img_url">リンクURL（任意）</label><br>
      <input type="url" id="slide_img_url" name="slide_img_url" value="<?php echo esc_url($url); ?>" style="width:100%;">
      <label style="display:inline-flex; align-items:center; gap:6px; margin-top:6px;">
        <input type="checkbox" name="slide_img_tab" value="1" <?php checked($tab); ?>>
        新しいタブで開く
      </label>
    </div>
  </div>
  <?php
}

add_action('save_post_gallery', 'soukessou_save_gallery_meta');
function soukessou_save_gallery_meta($post_id)
{
  if (!isset($_POST['soukessou_gallery_meta_nonce']) || !wp_verify_nonce($_POST['soukessou_gallery_meta_nonce'], 'soukessou_save_gallery_meta')) {
    return;
  }
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  $pc_id = isset($_POST['slide_img_pc']) ? intval($_POST['slide_img_pc']) : 0;
  $sp_id = isset($_POST['slide_img_sp']) ? intval($_POST['slide_img_sp']) : 0;
  $alt = isset($_POST['slide_img_alt']) ? sanitize_text_field($_POST['slide_img_alt']) : '';
  $url = isset($_POST['slide_img_url']) ? esc_url_raw($_POST['slide_img_url']) : '';
  $tab = isset($_POST['slide_img_tab']) ? '1' : '0';

  if ($pc_id > 0) {
    update_post_meta($post_id, 'slide_img_pc', $pc_id);
  } else {
    delete_post_meta($post_id, 'slide_img_pc');
  }

  if ($sp_id > 0) {
    update_post_meta($post_id, 'slide_img_sp', $sp_id);
  } else {
    delete_post_meta($post_id, 'slide_img_sp');
  }

  update_post_meta($post_id, 'slide_img_alt', $alt);
  if (!empty($url)) {
    update_post_meta($post_id, 'slide_img_url', $url);
  } else {
    delete_post_meta($post_id, 'slide_img_url');
  }
  update_post_meta($post_id, 'slide_img_tab', $tab);
}

add_action('admin_enqueue_scripts', 'soukessou_gallery_meta_assets');
function soukessou_gallery_meta_assets($hook)
{
  $screen = get_current_screen();
  if (!$screen || $screen->post_type !== 'gallery') {
    return;
  }
  wp_enqueue_media();
  $inline_js = <<<JS
  (function($){
    $(document).on('click','.gallery-image-select',function(e){
      e.preventDefault();
      var button = $(this);
      var targetId = button.data('target');
      var target = $('#' + targetId);
      var preview = $('#' + targetId + '_preview');
      var frame = wp.media({
        title: '画像を選択',
        button: { text: '決定' },
        multiple: false
      });
      frame.on('select', function(){
        var attachment = frame.state().get('selection').first().toJSON();
        target.val(attachment.id);
        preview.html('<img src=\"' + attachment.url + '\" style=\"max-width:200px; height:auto;\" />');
      });
      frame.open();
    });
    $(document).on('click','.gallery-image-clear',function(e){
      e.preventDefault();
      var button = $(this);
      var targetId = button.data('target');
      var target = $('#' + targetId);
      var preview = $('#' + targetId + '_preview');
      target.val('');
      preview.html('<span style=\"color:#777;\">未選択</span>');
    });
  })(jQuery);
JS;
  wp_add_inline_script('jquery', $inline_js);
}


