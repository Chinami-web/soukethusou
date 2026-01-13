<?php get_header(); ?>
<?php
$post_type = get_post_type();
$post_type_data = get_post_type_object($post_type);
$post_type_label = $post_type_data->labels->name;
?>
<main class="main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $post_id = get_the_ID();
            $post_slug = get_post_field('post_name', $post_id);

            // カスタムフィールド取得
            $facility_label = get_post_meta($post_id, 'facility_label', true);
            $facility_main_image_id = get_post_meta($post_id, 'facility_main_image', true);
            $facility_message_image_id = get_post_meta($post_id, 'facility_message_image', true);
            $facility_message_text = get_post_meta($post_id, 'facility_message_text', true);
            $facility_gallery = get_post_meta($post_id, 'facility_gallery', true);
            $facility_map_image_id = get_post_meta($post_id, 'facility_map_image', true);
            $facility_address = get_post_meta($post_id, 'facility_address', true);
            $facility_tel = get_post_meta($post_id, 'facility_tel', true);
            $facility_access_text = get_post_meta($post_id, 'facility_access_text', true);
            $facility_google_map = get_post_meta($post_id, 'facility_google_map', true);

            // 画像URL取得
            $facility_main_image_url = $facility_main_image_id ? wp_get_attachment_image_url($facility_main_image_id, 'large') : '';
            $facility_message_image_url = $facility_message_image_id ? wp_get_attachment_image_url($facility_message_image_id, 'large') : '';
            $facility_map_image_url = $facility_map_image_id ? wp_get_attachment_image_url($facility_map_image_id, 'large') : '';

            // ギャラリー画像の配列を取得（カンマ区切りまたは配列）
            $gallery_ids = array();
            if ($facility_gallery) {
                if (is_array($facility_gallery)) {
                    $gallery_ids = $facility_gallery;
                } else {
                    $gallery_ids = array_filter(array_map('trim', explode(',', $facility_gallery)));
                }
            }
            ?>

            <!-- ヒーロー画像セクション -->
            <section class="facility-hero">
                <?php if (has_post_thumbnail()) : ?>
                    <figure class="facility-hero__image">
                        <?php the_post_thumbnail('large'); ?>
                    </figure>
                <?php endif; ?>
                <div class="facility-hero__content">
                    <div class="facility-hero__title-wrapper">
                        <?php if ($facility_label) : ?>
                            <p class="facility-hero__label mincho">
                                東上<?php echo esc_html($facility_label); ?>
                                <span class="main-border"></span>
                            </p>
                        <?php endif; ?>
                        <h1 class="facility-hero__title mincho"><?php the_title(); ?></h1>
                        <p class="facility-hero__slug mincho"><?php echo esc_html(strtoupper($post_slug)); ?></p>
                        <div class="facility-hero__buttons">
                            <a href="#facility-intro" class="facility-hero__button">設備紹介</a>
                            <a href="#facility-access" class="facility-hero__button">アクセス</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- メインコンテナ -->
            <section id="facility-intro" class="facility-main">
                    <div class="facility-main__content-wrapper">
                        <div class="left-title">
                            <span>式場詳細</span>
                        </div>
                        <div class="facility-main__content">
                            <?php if ($facility_main_image_url) : ?>
                                <figure class="facility-main__image">
                                    <img src="<?php echo esc_url($facility_main_image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy">
                                </figure>
                            <?php endif; ?>
                            <?php the_content(); ?>

                            <!-- 部長からのメッセージ -->
                            <?php if ($facility_message_image_url || $facility_message_text) : ?>
                                <div class="facility-message">
                                    <h2 class="facility-message__title">
                                        <span>部長からのメッセージ</span>
                                    </h2>
                                    <div class="facility-message__container">
                                        <?php if ($facility_message_image_url) : ?>
                                            <figure class="facility-message__image">
                                                <img src="<?php echo esc_url($facility_message_image_url); ?>" alt="部長からのメッセージ" loading="lazy">
                                            </figure>
                                        <?php endif; ?>
                                        <?php if ($facility_message_text) : ?>
                                            <div class="facility-message__text">
                                                <span class="facility-message__main-border main-border"></span>
                                                <p><?php echo nl2br(esc_html($facility_message_text)); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
            </section>

            <!-- ギャラリー -->
            <?php if (!empty($gallery_ids)) : ?>
                <section class="facility-gallery">
                    <div class="facility-gallery__inner">
                        <div id="facility-gallery" class="splide">
                            <div class="splide__track">
                                <div class="splide__list">
                                    <?php foreach ($gallery_ids as $gallery_id) : ?>
                                        <?php
                                        $gallery_id = intval($gallery_id);
                                        $gallery_image_url = wp_get_attachment_image_url($gallery_id, 'large');
                                        $gallery_image_alt = get_post_meta($gallery_id, '_wp_attachment_image_alt', true);
                                        if (!$gallery_image_alt) {
                                            $gallery_image_alt = get_the_title();
                                        }
                                        if ($gallery_image_url) :
                                        ?>
                                            <div class="splide__slide">
                                                <picture>
                                                    <img src="<?php echo esc_url($gallery_image_url); ?>" alt="<?php echo esc_attr($gallery_image_alt); ?>" loading="lazy">
                                                </picture>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>

            <!-- アクセスセクション -->
            <section id="facility-access" class="facility-access">
                <div class="l-inner">
                    <div class="facility-access__header">
                        <h2 class="facility-access__title"><?php the_title(); ?></h2>
                    </div>

                    <div class="facility-access__container">
                        <?php if ($facility_map_image_url) : ?>
                            <figure class="facility-access__map-image">
                                <img src="<?php echo esc_url($facility_map_image_url); ?>" alt="アクセスマップ" loading="lazy">
                            </figure>
                        <?php endif; ?>

                        <div class="facility-access__info">
                            <?php if ($facility_address) : ?>
                                <p class="facility-access__address"><?php echo esc_html($facility_address); ?></p>
                            <?php endif; ?>

                            <?php if ($facility_tel) : ?>
                                <p class="facility-access__tel">TEL: <?php echo esc_html($facility_tel); ?></p>
                            <?php endif; ?>

                            <?php if ($facility_access_text) : ?>
                                <div class="facility-access__text">
                                    <?php echo nl2br(esc_html($facility_access_text)); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php if ($facility_google_map) : ?>
                        <div class="facility-access__google-map">
                            <?php echo $facility_google_map; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>
