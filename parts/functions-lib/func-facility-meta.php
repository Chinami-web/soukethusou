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

  // 詳細ページ用のカスタムフィールド
  $main_image_id = get_post_meta($post->ID, 'facility_main_image', true);
  $message_image_id = get_post_meta($post->ID, 'facility_message_image', true);
  $message_text = get_post_meta($post->ID, 'facility_message_text', true);
  $message_person_name = get_post_meta($post->ID, 'facility_message_person_name', true);
  $gallery_ids = get_post_meta($post->ID, 'facility_gallery', true);
  $map_image_id = get_post_meta($post->ID, 'facility_map_image', true);
  $tel = get_post_meta($post->ID, 'facility_tel', true);
  $access_text = get_post_meta($post->ID, 'facility_access_text', true);
  $google_map = get_post_meta($post->ID, 'facility_google_map', true);

  $main_image_src = $main_image_id ? wp_get_attachment_image_url($main_image_id, 'medium') : '';
  $message_image_src = $message_image_id ? wp_get_attachment_image_url($message_image_id, 'medium') : '';
  $map_image_src = $map_image_id ? wp_get_attachment_image_url($map_image_id, 'medium') : '';

  // ギャラリー画像IDの配列を処理
  $gallery_ids_array = array();
  if ($gallery_ids) {
    if (is_array($gallery_ids)) {
      $gallery_ids_array = $gallery_ids;
    } else {
      $gallery_ids_array = array_filter(array_map('trim', explode(',', $gallery_ids)));
    }
  }
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

    <hr style="margin:20px 0; border:none; border-top:2px solid #ddd;">
    <h3 style="margin:0 0 12px 0; font-size:16px;">詳細ページ用フィールド</h3>

    <div style="border:1px solid #ddd; padding:10px;">
      <label>メイン画像（facility_main_image）</label><br>
      <div style="display:flex; gap:8px; align-items:center;">
        <input type="hidden" name="facility_main_image" id="facility_main_image" value="<?php echo esc_attr($main_image_id); ?>">
        <button class="button facility-image-select" data-target="facility_main_image">画像を選択</button>
        <button class="button facility-image-clear" data-target="facility_main_image">クリア</button>
      </div>
      <div class="facility-image-preview" id="facility_main_image_preview" style="margin-top:8px;">
        <?php if ($main_image_src): ?>
          <img src="<?php echo esc_url($main_image_src); ?>" style="max-width:150px; height:auto;">
        <?php else: ?>
          <span style="color:#777;">未選択</span>
        <?php endif; ?>
      </div>
    </div>

    <div style="border:1px solid #ddd; padding:10px;">
      <label>部長からのメッセージ - 人物画像（facility_message_image）</label><br>
      <div style="display:flex; gap:8px; align-items:center;">
        <input type="hidden" name="facility_message_image" id="facility_message_image" value="<?php echo esc_attr($message_image_id); ?>">
        <button class="button facility-image-select" data-target="facility_message_image">画像を選択</button>
        <button class="button facility-image-clear" data-target="facility_message_image">クリア</button>
      </div>
      <div class="facility-image-preview" id="facility_message_image_preview" style="margin-top:8px;">
        <?php if ($message_image_src): ?>
          <img src="<?php echo esc_url($message_image_src); ?>" style="max-width:150px; height:auto;">
        <?php else: ?>
          <span style="color:#777;">未選択</span>
        <?php endif; ?>
      </div>
    </div>

    <div>
      <label for="facility_message_person_name">部長からのメッセージ - 人物名（facility_message_person_name）</label><br>
      <input type="text" id="facility_message_person_name" name="facility_message_person_name" value="<?php echo esc_attr($message_person_name); ?>" style="width:100%;">
    </div>

    <div>
      <label for="facility_message_text">部長からのメッセージ - テキスト（facility_message_text）</label><br>
      <textarea id="facility_message_text" name="facility_message_text" rows="5" style="width:100%;"><?php echo esc_textarea($message_text); ?></textarea>
    </div>

    <div style="border:1px solid #ddd; padding:10px;">
      <label>ギャラリー画像（facility_gallery：複数選択可、カンマ区切りで保存）</label><br>
      <div style="display:flex; gap:8px; align-items:center;">
        <input type="hidden" name="facility_gallery" id="facility_gallery" value="<?php echo esc_attr(is_array($gallery_ids_array) ? implode(',', $gallery_ids_array) : $gallery_ids); ?>">
        <button class="button facility-gallery-select" data-target="facility_gallery">画像を選択</button>
        <button class="button facility-gallery-clear" data-target="facility_gallery">クリア</button>
      </div>
      <div class="facility-gallery-preview" id="facility_gallery_preview" style="margin-top:8px; display:flex; flex-wrap:wrap; gap:8px;">
        <?php if (!empty($gallery_ids_array)): ?>
          <?php foreach ($gallery_ids_array as $gid): ?>
            <?php
            $gid = intval($gid);
            $gallery_src = $gid ? wp_get_attachment_image_url($gid, 'medium') : '';
            if ($gallery_src):
            ?>
              <div style="position:relative;">
                <img src="<?php echo esc_url($gallery_src); ?>" style="max-width:100px; height:auto;">
                <span class="facility-gallery-remove" data-id="<?php echo esc_attr($gid); ?>" style="position:absolute; top:-5px; right:-5px; background:#f00; color:#fff; width:20px; height:20px; border-radius:50%; display:flex; align-items:center; justify-content:center; cursor:pointer;">×</span>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        <?php else: ?>
          <span style="color:#777;">未選択</span>
        <?php endif; ?>
      </div>
    </div>

    <div style="border:1px solid #ddd; padding:10px;">
      <label>地図画像（facility_map_image）</label><br>
      <div style="display:flex; gap:8px; align-items:center;">
        <input type="hidden" name="facility_map_image" id="facility_map_image" value="<?php echo esc_attr($map_image_id); ?>">
        <button class="button facility-image-select" data-target="facility_map_image">画像を選択</button>
        <button class="button facility-image-clear" data-target="facility_map_image">クリア</button>
      </div>
      <div class="facility-image-preview" id="facility_map_image_preview" style="margin-top:8px;">
        <?php if ($map_image_src): ?>
          <img src="<?php echo esc_url($map_image_src); ?>" style="max-width:150px; height:auto;">
        <?php else: ?>
          <span style="color:#777;">未選択</span>
        <?php endif; ?>
      </div>
    </div>

    <div>
      <label for="facility_tel">TEL（facility_tel）</label><br>
      <input type="text" id="facility_tel" name="facility_tel" value="<?php echo esc_attr($tel); ?>" style="width:100%;">
    </div>

    <div>
      <label for="facility_access_text">アクセスの文章（facility_access_text）</label><br>
      <textarea id="facility_access_text" name="facility_access_text" rows="5" style="width:100%;"><?php echo esc_textarea($access_text); ?></textarea>
    </div>

    <div>
      <label for="facility_google_map">Googleマップ iframeコード（facility_google_map）</label><br>
      <textarea id="facility_google_map" name="facility_google_map" rows="5" style="width:100%; font-family:monospace; font-size:12px;"><?php echo esc_textarea($google_map); ?></textarea>
      <p style="color:#777; font-size:12px; margin:5px 0 0 0;">Googleマップの埋め込みコード（iframeタグ）をそのまま貼り付けてください。</p>
    </div>
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

  // 詳細ページ用のカスタムフィールドを保存
  $main_image = isset($_POST['facility_main_image']) ? intval($_POST['facility_main_image']) : 0;
  $message_image = isset($_POST['facility_message_image']) ? intval($_POST['facility_message_image']) : 0;
  $message_text = isset($_POST['facility_message_text']) ? wp_kses_post($_POST['facility_message_text']) : '';
  $message_person_name = isset($_POST['facility_message_person_name']) ? sanitize_text_field($_POST['facility_message_person_name']) : '';
  $gallery = isset($_POST['facility_gallery']) ? sanitize_text_field($_POST['facility_gallery']) : '';
  $map_image = isset($_POST['facility_map_image']) ? intval($_POST['facility_map_image']) : 0;
  $tel = isset($_POST['facility_tel']) ? sanitize_text_field($_POST['facility_tel']) : '';
  $access_text = isset($_POST['facility_access_text']) ? wp_kses_post($_POST['facility_access_text']) : '';
  $allowed_map_html = array(
    'iframe' => array(
      'src' => true,
      'width' => true,
      'height' => true,
      'style' => true,
      'frameborder' => true,
      'allowfullscreen' => true,
      'loading' => true,
      'referrerpolicy' => true,
      'aria-hidden' => true,
      'tabindex' => true,
    ),
  );
  $google_map = isset($_POST['facility_google_map']) ? wp_kses($_POST['facility_google_map'], $allowed_map_html) : '';

  if ($main_image > 0) {
    update_post_meta($post_id, 'facility_main_image', $main_image);
  } else {
    delete_post_meta($post_id, 'facility_main_image');
  }

  if ($message_image > 0) {
    update_post_meta($post_id, 'facility_message_image', $message_image);
  } else {
    delete_post_meta($post_id, 'facility_message_image');
  }

  update_post_meta($post_id, 'facility_message_text', $message_text);
  update_post_meta($post_id, 'facility_message_person_name', $message_person_name);

  if ($gallery) {
    update_post_meta($post_id, 'facility_gallery', $gallery);
  } else {
    delete_post_meta($post_id, 'facility_gallery');
  }

  if ($map_image > 0) {
    update_post_meta($post_id, 'facility_map_image', $map_image);
  } else {
    delete_post_meta($post_id, 'facility_map_image');
  }

  update_post_meta($post_id, 'facility_tel', $tel);
  update_post_meta($post_id, 'facility_access_text', $access_text);
  update_post_meta($post_id, 'facility_google_map', $google_map);

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

    // 詳細ページ用の画像選択
    $(document).on('click','.facility-image-select',function(e){
      e.preventDefault();
      var button = $(this);
      var target = $('#' + button.data('target'));
      var preview = $('#' + button.data('target') + '_preview');
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
    $(document).on('click','.facility-image-clear',function(e){
      e.preventDefault();
      var button = $(this);
      var target = $('#' + button.data('target'));
      var preview = $('#' + button.data('target') + '_preview');
      target.val('');
      preview.html('<span style=\"color:#777;\">未選択</span>');
    });

    // ギャラリー画像選択（複数選択可）
    $(document).on('click','.facility-gallery-select',function(e){
      e.preventDefault();
      var button = $(this);
      var target = $('#' + button.data('target'));
      var preview = $('#' + button.data('target') + '_preview');
      var currentIds = target.val() ? target.val().split(',') : [];
      var frame = wp.media({
        title: '画像を選択（複数選択可）',
        button: { text: '決定' },
        multiple: true
      });
      frame.on('select', function(){
        var selected = frame.state().get('selection');
        var ids = [];
        var html = '';
        selected.each(function(attachment){
          var att = attachment.toJSON();
          ids.push(att.id);
          html += '<div style=\"position:relative;\"><img src=\"' + att.url + '\" style=\"max-width:100px; height:auto;\"><span class=\"facility-gallery-remove\" data-id=\"' + att.id + '\" style=\"position:absolute; top:-5px; right:-5px; background:#f00; color:#fff; width:20px; height:20px; border-radius:50%; display:flex; align-items:center; justify-content:center; cursor:pointer;\">×</span></div>';
        });
        if (ids.length > 0) {
          var allIds = currentIds.concat(ids);
          allIds = allIds.filter(function(id){ return id && id !== ''; });
          target.val(allIds.join(','));
          if (preview.find('span').length && preview.find('span').first().text() === '未選択') {
            preview.html(html);
          } else {
            preview.append(html);
          }
        }
      });
      frame.open();
    });
    $(document).on('click','.facility-gallery-clear',function(e){
      e.preventDefault();
      var button = $(this);
      var target = $('#' + button.data('target'));
      var preview = $('#' + button.data('target') + '_preview');
      target.val('');
      preview.html('<span style=\"color:#777;\">未選択</span>');
    });
    $(document).on('click','.facility-gallery-remove',function(e){
      e.preventDefault();
      var removeBtn = $(this);
      var removeId = removeBtn.data('id');
      var target = $('#facility_gallery');
      var preview = $('#facility_gallery_preview');
      var currentIds = target.val() ? target.val().split(',') : [];
      currentIds = currentIds.filter(function(id){ return id != removeId; });
      target.val(currentIds.join(','));
      removeBtn.closest('div').remove();
      if (preview.children().length === 0) {
        preview.html('<span style=\"color:#777;\">未選択</span>');
      }
    });
  })(jQuery);
JS;
  wp_add_inline_script('jquery', $inline_js);
}

























