<?php get_template_part('parts/p-top-sns'); ?>

<footer class="footer">
    <div class="footer__inner">
      <div class="footer__wrap">
        <div class="footer__left">
          <div class="footer__logo">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo-right.png" alt="省略">
            </a>
          </div>
          <address class="footer__address">
          東上セレモ<br>
          〒353-0004　埼玉県志木市本町6-4-5<br>
          TEL:048-472-6136<br>
          国際標準化機構ISO9001認証取得
          </address>
          <a class="footer__policy" href="#">privacy policy</a>
        </div>
        <div class="footer__right">
          <nav class="footer__nav">
            <ul class="footer__nav-items">
              <li class="footer__nav-item">
                <a href="#">私たちについて</a>
              </li>
              <li class="footer__nav-item">
                <a href="#">事業内容</a>
              </li>
              <li class="footer__nav-item">
                <a href="#">施工実績</a>
              </li>
              <li class="footer__nav-item">
                <a href="#">お知らせ</a>
              </li>
              <li class="footer__nav-item">
                <a href="#">採用情報</a>
              </li>
              <li class="footer__nav-item">
                <a href="#">お問い合わせ</a>
              </li>
            </ul>
          </nav>
          <div class="footer__sns">
            <a class="footer__sns-icon" href="#" target="_blank" rel="noopener">
              <img src="./images/common/instagram.svg" alt="省略">
            </a>
            <a class="footer__sns-icon" href="#" target="_blank" rel="noopener">
              <img src="./images/common/twitter.svg" alt="省略">
            </a>
            <a class="footer__sns-icon" href="#" target="_blank" rel="noopener">
              <img src="./images/common/line.svg" alt="省略">
            </a>
          </div>
        </div>
      </div>
      <small class="footer__copyright">&copy;2023 <span>home consulting</span> Co.,Ltd</small>
    </div>
  </footer>

<?php wp_footer(); ?>
</div>

</body>
</html>
