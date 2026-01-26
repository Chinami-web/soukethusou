<?php get_header(); ?>
<section class="post-mv">
    <div class="post-mv__inner">
        <div class="post-mv__title">
            <h1 class="post-mv__title heisei"><?php single_cat_title(); ?>
                <span class="main-border"></span>
            </h1>
        </div>
    </div>
</section>

<div class="page-post__container">
    <div class="l-inner">

        <div class="page-post__title-wrapper">
            <h2 class="page-post__title mincho">日々の活動や、終活・葬儀のヒントをお届けします。</h2>
        </div>
        <ul class="page-post-news__list">
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                    <li class="page-post-news__item">
                        <a href="<?php the_permalink(); ?>" class="page-post-news__link">
                            <div class="page-post-news__icon-wrapper">
                                <span class="page-post-news__icon"></span>
                            </div>
                            <time class="page-post-news__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">[<?php echo get_the_date('Y.m.d'); ?>]</time>
                            <h3 class="page-post-news__title"><?php the_title(); ?></h3>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php else: ?>
                <li class="post-list__not-found">該当の記事はありません。</li>
            <?php endif; ?>
        </ul>
        <?php get_template_part('parts/common/pager'); ?>
    </div>
</div>

<?php get_footer(); ?>
