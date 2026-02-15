<footer class="footer">
    <div class="cm-contact">
      <div class="cm-inner">
        <h2 class="ttl fc-brown bold">お問合せ</h2>
        <div class="tel">
          <picture class="icon">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_tel.svg" alt="アイコン">
          </picture>
          <span class="num fc-brown">
            <a href="tel:0535434999" class="fc-brown">053-543-4999</a>
            （10:00 ~ 21:00）
          </span>
        </div>
        <div class="btnArea">
          <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=320wgznu" class="btn line fc-white regular" target="_blank">公式LINEでお問合せ</a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn form fc-white regular">ご入塾相談フォーム</a>
        </div>
      </div>
    </div>
    <div class="siteMap">
      <div class="cm-inner">
        <ul class="list">
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="fc-white">トップページ</a>
          </li>
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="fc-white">塾・講師紹介</a>
          </li>
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/course')); ?>" class="fc-white">コース・紹介</a>
          </li>
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="fc-white">お問合せ</a>
          </li>
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="fc-brown">
              <picture class="img __1">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/nav_txt_1.svg" alt="松ゼミNEWS">
              </picture>
            </a>
          </li>
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/hamamatsu-desc')); ?>" class="fc-brown">
              <picture class="img __2">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/nav_txt_2.svg" alt="居心地の良い有料自習室 浜松デスク">
              </picture>
            </a>
          </li>
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/faq')); ?>" class="fc-white">よくあるご質問</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="logoArea">
      <picture class="img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/footer_logo.svg" alt="松城ゼミナール">
      </picture>
    </div>
  </footer>

  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/jquery-3.6.3.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/swiper-bundle.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.3/swiper-bundle.min.js"></script> -->
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/js/main.js?240718"></script>
</body>

<?php wp_footer(); ?>

</html>