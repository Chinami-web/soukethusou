<?php
// メディアアップローダーのスクリプトを読み込み
function director_load_admin_scripts($hook) {
    global $post;
    if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
        if ( 'director' === $post->post_type ) {
            wp_enqueue_media();
        }
    }
}
add_action('admin_enqueue_scripts', 'director_load_admin_scripts');

// メタボックスの追加
function director_add_meta_box() {
    add_meta_box(
        'director_meta',
        'ディレクター情報',
        'director_meta_callback',
        'director',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'director_add_meta_box');

// メタボックスの表示
function director_meta_callback($post) {
    wp_nonce_field('director_save_meta_box_data', 'director_meta_box_nonce');

    $job_title = get_post_meta($post->ID, 'director_job_title', true);
    $catchphrase = get_post_meta($post->ID, 'director_catchphrase', true);
    $text = get_post_meta($post->ID, 'director_text', true);
    $image_id = get_post_meta($post->ID, 'director_image', true);
    
    $image_url = '';
    if ($image_id) {
        $image_attributes = wp_get_attachment_image_src($image_id, 'medium');
        if ($image_attributes) {
            $image_url = $image_attributes[0];
        }
    }

    echo '<label for="director_job_title">役職 (例: 葬祭ディレクター)</label><br>';
    echo '<input type="text" id="director_job_title" name="director_job_title" value="' . esc_attr($job_title) . '" size="50" style="width: 100%; margin-bottom: 10px;"><br><br>';

    echo '<label for="director_catchphrase">キャッチコピー (例: 不安な時に“寄り添う人”でありたい)</label><br>';
    echo '<input type="text" id="director_catchphrase" name="director_catchphrase" value="' . esc_attr($catchphrase) . '" size="50" style="width: 100%; margin-bottom: 10px;"><br><br>';

    echo '<label for="director_text">紹介文</label><br>';
    echo '<textarea id="director_text" name="director_text" rows="5" cols="50" style="width: 100%; margin-bottom: 10px;">' . esc_textarea($text) . '</textarea><br><br>';

    echo '<label>人物画像</label><br>';
    echo '<div id="director_image_wrapper" style="margin-bottom: 10px;">';
    if ($image_url) {
        echo '<img src="' . esc_url($image_url) . '" style="max-width: 100%; height: auto; max-height: 200px;">';
    }
    echo '</div>';
    echo '<input type="hidden" id="director_image" name="director_image" value="' . esc_attr($image_id) . '">';
    echo '<input type="button" id="director_image_button" class="button" value="' . ($image_id ? '画像を変更' : '画像をアップロード') . '"> ';
    echo '<input type="button" id="director_image_remove" class="button" value="削除" style="' . ($image_id ? '' : 'display:none;') . '">';
    echo '<br><br>';

    // 簡易的なJSをここに記述
    ?>
    <script>
    jQuery(document).ready(function($){
        var mediaUploader;
        $('#director_image_button').click(function(e) {
            e.preventDefault();
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }
            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: '画像を選択',
                button: {
                    text: '画像を選択'
                },
                multiple: false
            });
            mediaUploader.on('select', function() {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                $('#director_image').val(attachment.id);
                $('#director_image_wrapper').html('<img src="' + attachment.url + '" style="max-width: 100%; height: auto; max-height: 200px;">');
                $('#director_image_button').val('画像を変更');
                $('#director_image_remove').show();
            });
            mediaUploader.open();
        });
        $('#director_image_remove').click(function(e) {
            e.preventDefault();
            $('#director_image').val('');
            $('#director_image_wrapper').html('');
            $('#director_image_button').val('画像をアップロード');
            $(this).hide();
        });
    });
    </script>
    <?php
}

// データの保存
function director_save_meta_box_data($post_id) {
    if (!isset($_POST['director_meta_box_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['director_meta_box_nonce'], 'director_save_meta_box_data')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['director_job_title'])) {
        update_post_meta($post_id, 'director_job_title', sanitize_text_field($_POST['director_job_title']));
    }
    if (isset($_POST['director_catchphrase'])) {
        update_post_meta($post_id, 'director_catchphrase', sanitize_text_field($_POST['director_catchphrase']));
    }
    if (isset($_POST['director_text'])) {
        update_post_meta($post_id, 'director_text', sanitize_textarea_field($_POST['director_text']));
    }
    if (isset($_POST['director_image'])) {
        update_post_meta($post_id, 'director_image', sanitize_text_field($_POST['director_image']));
    }
}
add_action('save_post', 'director_save_meta_box_data');
