<?php
/*
Template Name: THANKSページ
*/
?>
  <?php get_header(); ?>

  <main class="">

    <div class="mask">
      <picture class="mask-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
      </picture>
    </div>
      
    <div data-barba="wrapper">
      <div data-barba="container" data-barba-namespace="thanks">
        <div class="thanks under-page cm-f-gray">
          <section class="cont01">
            <div class="cont-inner __01">
              <div class="thanksArea">
                <p>お問い合わせありがとうございます。<br>
                    確認次第担当者よりご連絡差し上げます。</p>
                <a href="/" class="btn">TOPへ戻る</a>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>

    <?php get_footer(); ?>