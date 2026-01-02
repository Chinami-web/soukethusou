<?php $the_query = new WP_Query($args); ?>
<?php if ($the_query->have_posts()) : ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <?php get_template_part('parts/post/post-card'); ?>
  <?php endwhile; ?>
<?php else : ?>
  <li class="post-list__not-found">該当の記事はありません。</li>
<?php endif; ?>
<?php wp_reset_postdata(); ?>













