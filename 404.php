<?php get_header(); ?>
<main class="main">
  <div class="error-404">
    <div class="error-404__inner container">
      <h1 class="error-404__title">お探しのページは見つかりませんでした。</h1>
      <div class="error-404__btn">
        <a class="button" href="<?php echo esc_url(home_url($page)); ?>">TOPページへ</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
