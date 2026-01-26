<!-- カード -->
<li class="post-card">
  <a href="<?php the_permalink(); ?>" class="post-card__link">
    <?php
    if (has_post_thumbnail()) {
      $thumbID = get_post_thumbnail_id($post->ID);
      $thumbAlt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);
      $image_url = get_the_post_thumbnail_url($post->ID, 'large');
    } else {
      $image_url = get_template_directory_uri() . '/assets/images/common/template.png';
      $thumbAlt = "";
    }
    ?>
    <div class="post-card__body">
      <figure class="post-card__img">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $thumbAlt; ?>" loading="lazy">
      </figure>
      <div class="post-card__title">
        <?php the_title(); ?>
      </div>
    </div>
  </a>
</li>













