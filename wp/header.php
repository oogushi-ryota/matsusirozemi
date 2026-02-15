<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:type" content="website">
  <meta property="og:locale" content="ja-JP">
  <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/assets/img/top/mv_slide01.png">
  <meta name="twitter:card" content="summary">
  <meta name="description" content="">
  <meta property="og:title" name="author" content=""/>
  <meta property="og:description" name="description" content=""/>

  <title></title>

  <link rel="icon" href="">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css?250122">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/swiper-bundle.min.css">

  <!-- Googleフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <!-- Googleフォント -->

  <!-- Adobeフォント -->
  <script>
    (function(d) {
      var config = {
        kitId: 'xrv4wdh',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <!-- Adobeフォント -->
</head>

<body>

  <?php wp_head(); ?>
  <header class="header">
    <div class="header_inner">
      <div class="topCont">
        <h1>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <picture class="logo">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" alt="小中高浪人生のための英語専門教師 松城ゼミナール">
            </picture>
          </a>
        </h1>
        <div class="ctaArea">
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
            <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=320wgznu" class="btn line fc-white" target="_blank">公式LINEでお問合せ</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn form fc-white">ご入塾相談フォーム</a>
          </div>
        </div>
      </div>
      <nav class="nav">
        <div class="sp-nav is-sp">
          <div class="ctaArea">
            <div class="tel">
              <picture class="icon">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_tel.svg" alt="アイコン">
              </picture>
              <span class="num fc-brown">053-543-4999<br class="is-sp">(10:00 ~ 21:00)</span>
            </div>
            <div class="btnArea">
              <a href="https://liff.line.me/1645278921-kWRPP32q/?accountId=320wgznu" class="btn line fc-white" target="_blank">公式LINEでお問合せ</a>
              <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn form fc-white">ご入塾相談フォーム</a>
            </div>
          </div>
        </div>
        <ul class="list">
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="fc-brown">トップページ</a>
          </li>
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="fc-brown">塾・講師紹介</a>
          </li>
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/course')); ?>" class="fc-brown">コース・料金</a>
          </li>
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="fc-brown">お問合わせ</a>
          </li>
          <li class="list_item">
            <a href="<?php echo esc_url(home_url('/news')); ?>" class="fc-brown">
              <picture class="img __1">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/nav_txt_1.svg" alt="松ゼミNEWS">
              </picture>
            </a>
          </li>
          <!-- <li class="list_item">
            <a href="<?php echo esc_url(home_url('/hamamatsu-desc')); ?>" class="fc-brown">
              <picture class="img __2">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/nav_txt_2.svg" alt="居心地の良い有料自習室 浜松デスク">
              </picture>
            </a>
          </li> -->
        </ul>
      </nav>
    </div>
    <div class="nav-btn">
      <span class="nav-line"></span>
      <span class="nav-line"></span>
      <span class="nav-line"></span>
    </div>
  </header>