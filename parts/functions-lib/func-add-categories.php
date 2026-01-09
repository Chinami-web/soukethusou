<?php
/*
 * カテゴリー「お知らせ」「コラム」を自動作成
 */
function soukessou_create_default_categories() {
    $categories = array('お知らせ', 'コラム');

    foreach ($categories as $cat_name) {
        if (!term_exists($cat_name, 'category')) {
            wp_insert_term(
                $cat_name,
                'category',
                array(
                    'slug' => sanitize_title($cat_name),
                )
            );
        }
    }
}
add_action('after_setup_theme', 'soukessou_create_default_categories');

?>

