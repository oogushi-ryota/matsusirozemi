<?php

?>

  <?php get_header(); ?>

  <main class="news">
    <section class="mv">
      <picture>
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/news/mv.jpg" alt="メンビジュアル">
      </picture>
    </section>
    <section class="news_detail">
      <div class="detailWrap">
        <div class="ttlArea">
          <span class="date cm-f-fredericka fc-blue"><?php echo get_the_date(); ?></span>
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="thumbnail">
        <picture class="img">

        <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>

          <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="サムネイル">
        </picture>

        <?php endif; ?>
        
        </div>
        
        <?php the_content(); ?>
        
      </div>
    </section>
  </main>
    
  <?php get_footer(); ?>
