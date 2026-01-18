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
            $facility_message_person_name = get_post_meta($post_id, 'facility_message_person_name', true);
            $facility_gallery = get_post_meta($post_id, 'facility_gallery', true);
            $facility_map_image_id = get_post_meta($post_id, 'facility_map_image', true);
            $facility_address = get_post_meta($post_id, 'facility_address', true);
            $facility_tel = get_post_meta($post_id, 'facility_tel', true);
            $facility_access_text = get_post_meta($post_id, 'facility_access_text', true);
            $facility_google_map = get_post_meta($post_id, 'facility_google_map', true);
            $facility_tags_raw = get_post_meta($post_id, 'facility_tags', true);
            $facility_tags = array_filter(array_map('trim', preg_split('/[\r\n,]+/', $facility_tags_raw)));

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
                    <div class="left-title facility-main__left-title">
                        <span>式場詳細</span>
                    </div>
                    <div class="facility-main__content">
                        <?php if ($facility_main_image_url) : ?>
                            <figure class="facility-main__image">
                                <img src="<?php echo esc_url($facility_main_image_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" loading="lazy">
                            </figure>
                        <?php endif; ?>
                        <div class="facility-main__content-inner">

                            <?php the_content(); ?>

                            <!-- 部長からのメッセージ -->
                            <?php if ($facility_message_image_url || $facility_message_text) : ?>
                                <div class="facility-message">
                                    <h3 class="facility-message__title border-title">
                                        <span>部長からのメッセージ</span>
                                        <span class="main-border"></span>
                                    </h3>
                                    <div class="facility-message__container">
                                        <?php if ($facility_message_image_url) : ?>
                                            <figure class="facility-message__image">
                                                <img src="<?php echo esc_url($facility_message_image_url); ?>" alt="部長の写真" loading="lazy">
                                            </figure>
                                        <?php endif; ?>
                                        <?php if ($facility_message_text) : ?>
                                            <div class="facility-message__text-wrapper">
                                                <?php if ($facility_message_person_name) : ?>
                                                    <p class="facility-message__person-name mincho"><?php echo esc_html($facility_message_person_name); ?></p>
                                                <?php endif; ?>
                                                <p class="facility-message__text"><?php echo nl2br(esc_html($facility_message_text)); ?></p>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
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
                                            $gallery_image_alt = get_the_title($gallery_id);
                                        }
                                        if ($gallery_image_url) :
                                        ?>
                                            <div class="splide__slide">
                                                <picture>
                                                    <img src="<?php echo esc_url($gallery_image_url); ?>" alt="<?php echo esc_attr($gallery_image_alt); ?>" loading="lazy">
                                                </picture>
                                                <span class="facility-gallery__image-title mincho"><?php echo esc_html($gallery_image_alt); ?></span>
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

                <div class="facility-access__container">
                    <div class="facility-access__header">
                        <h2 class="facility-access__title mincho">東上<?php echo esc_html($facility_label); ?><?php the_title(); ?></h2>
                        <ul class="facility-access__tag-list">
                            <?php if (!empty($facility_tags)) : ?>
                                <?php foreach ($facility_tags as $facility_tag) : ?>
                                    <li class="facility-access__tag-item">
                                        <span class="facility-access__tag-item-text"><?php echo esc_html($facility_tag); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="facility-access__info">
                        <?php if ($facility_address) : ?>
                            <div class="facility-access__info-item">
                                <div class="facility-access__label">
                                    <span>住所</span>
                                </div>
                                <div class="facility-access__text"><?php echo esc_html($facility_address); ?></div>
                            </div>
                        <?php endif; ?>

                        <?php if ($facility_tel) : ?>
                            <div class="facility-access__info-item">
                                <div class="facility-access__label"><span>TEL</span></div>
                                <div class="facility-access__text facility-access__text--tel">
                                    <p><?php echo esc_html($facility_tel); ?>
                                    </p>
                                    <a href="tel:<?php echo esc_html($facility_tel); ?>" class="facility-access__text--tel-link">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/tel.png" alt="電話する">
                                        </figure>
                                        <span>
                                            電話する
                                        </span>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($facility_access_text) : ?>
                            <div class="facility-access__info-item">
                                <div class="facility-access__label">
                                    <span>アクセス</span>
                                </div>
                                <div class="facility-access__text"><?php echo nl2br(esc_html($facility_access_text)); ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if ($facility_map_image_url) : ?>
                        <figure class="facility-access__map-image">
                            <img src="<?php echo esc_url($facility_map_image_url); ?>" alt="アクセスマップ" loading="lazy">
                        </figure>
                    <?php endif; ?>
                </div>

                <?php if ($facility_google_map) : ?>
                    <div class="facility-access__google-map">
                        <?php echo $facility_google_map; ?>
                    </div>
                <?php endif; ?>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
    <?php get_template_part('parts/project/relation-parts'); ?>
</main>
<?php get_footer(); ?>
