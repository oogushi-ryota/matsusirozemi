<?php
/*
Template Name: WORKSページ
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
      <div data-barba="container" data-barba-namespace="works">
        <div class="works under-page cm-f-gray" id="page-top">
          <section class="mv">
            <span class="obj __01">
              <picture class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_obj01.svg" alt="">
              </picture>
            </span>
            <div class="mv__movie">
              <video class="" id="video" webkit-playsinline playsinline muted autoplay loop>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/movie/Tulip.mp4" type="video/mp4">
              </video>
            </div>
            <h2 class="page-ttl cm-f-juana regular js-textanimation">WORKS</h2>
          </section>

          <section class="cont01">
            <div class="cont-inner __01">
            <?php
            // 現在のページのカテゴリを取得
            $current_category = get_queried_object();

            // 現在のページのカテゴリが存在するか確認
            if ($current_category) {
                // 現在のページが子カテゴリ一覧ページの場合
                if ($current_category->parent != 0) {
                    // 親カテゴリを取得
                    $parent_category = get_term($current_category->parent, $current_category->taxonomy);

                    // 親カテゴリに関連付けられた子カテゴリを取得
                    $child_categories = get_terms(array(
                        'taxonomy' => $parent_category->taxonomy,
                        'hide_empty' => false,
                        'parent' => $parent_category->term_id,
                    ));

                    // 子カテゴリが存在する場合は表示
                    if (!empty($child_categories)) {
                        echo '<ul class="child-categories">';
                        foreach ($child_categories as $category) {
                            echo '<li class="child-categories__item"><a href="' . get_term_link($category) . '">#' . $category->name . '</a></li>';
                        }
                        echo '</ul>';
                    }
                } else {
                    // 現在のページのカテゴリに関連付けられた子カテゴリを取得
                    $child_categories = get_terms(array(
                        'taxonomy' => $current_category->taxonomy, // タクソノミーの名前（例：category）
                        'hide_empty' => false,
                        'parent' => $current_category->term_id, // 現在のカテゴリを親として指定
                    ));

                    // 子カテゴリが存在する場合は表示
                    if (!empty($child_categories)) {
                        echo '<ul class="child-categories">';
                        foreach ($child_categories as $category) {
                            echo '<li class="child-categories__item"><a href="' . get_term_link($category) . '">#' . $category->name . '</a></li>';
                        }
                        echo '</ul>';
                    }
                }
            }
            ?>

            <ul class="category">
              <li class="category__item">
                <a class="category__item__link" href="/works">ALL</a>
              </li>

              <?php
              $current_term = get_queried_object();
              $categories = get_terms(array(
                  'taxonomy' => 'works_category',
                  'hide_empty' => false,
                  'parent' => 0, // 親カテゴリのみを取得
              ));

              $counter = 0; // カウンターを初期化

              foreach ($categories as $category) :
                  if ($counter < 3) : // カウンターが5未満の場合のみ表示
              ?>


              <li class="category__item">
              <a class="category__item__link" href="<?php echo esc_url(get_term_link($category)); ?>">
                <?php echo esc_html($category->name); ?>
              </a>
              <?php 
                $counter++; // カウンターをインクリメント
                endif;
                endforeach;
              ?>
              </li>
            </ul>
            <div class="cm-list">

              <?php
                $term_slug = get_queried_object()->slug;

                $args = array(
                    'post_type' => 'works', // カスタム投稿タイプ名
                    'posts_per_page' => -1,  // 表示する投稿数（-1で全て）
                    'tax_query' => array(
                      array(
                          'taxonomy' => 'works_category', // カスタム投稿のタクソノミー名
                          'field' => 'slug',
                          'terms' => $term_slug, // タームのスラッグ
                      ),
                  ),
                );
                $teacher_query = new WP_Query($args);

                $counter = 1; // カウンターを初期化

                if ($teacher_query->have_posts()) :
                    while ($teacher_query->have_posts()) : $teacher_query->the_post();

                    $modal_id = 'modal' . $counter; // モーダルのIDを作成
              ?>

                <div data-target="<?php echo esc_attr($modal_id); ?>" class="cm-list__item fadein-point js_modal_open">
                  <div class="cm-list__item__ttl">
                    <span class="cm-f-shippori-mincho-b1"><?php the_field('client'); ?></span>
                  </div>
                  <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>
                    <picture class="img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></picture>
                  <?php else: /* 登録されていなかったら */ ?>
                    <!-- 代替の画像を表示する場合のコード -->
                    <picture class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_img01.jpg" alt="サムネイル画像"></picture>
                  <?php endif; ?>
                  <!-- <picture class="img">
                    <img src="<?php the_field('img'); ?>" alt="">
                  </picture> -->
                  <div class="txt-area">
                    <span class="date cm-f-juana regular"><?php the_field('year'); ?></span>
                    <div class="right-area">
                      <p class="txt cm-f-shippori-mincho-b1"><?php the_field('title'); ?></p>
                      <span class="name cm-f-jost light"><?php the_field('name'); ?></span>
                    </div>
                  </div>
                </div>

                <span id="<?php echo esc_attr($modal_id); ?>" class="modal js_modal">
                  <div class="modal__bg js_modal_close"></div>
                  <div class="modal__wrapper">
                    <div data-lenis-prevent class="modal__wrapper__scroll">
                      <h4 class="ttl cm-f-shippori-mincho-b1"><?php the_field('title'); ?></h4>
                      <div class="modal__cont">
                        <div class="txt-area">
                          <p class="txt cm-f-yugothic"><?php the_field('body'); ?></p>
                          <a href="<?php the_field('contents'); ?>" target="_blank" class="btn cm-f-juana regular">View More</a>
                        </div>
                        <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>
                          <picture class="img"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></picture>
                        <?php else: /* 登録されていなかったら */ ?>
                          <!-- 代替の画像を表示する場合のコード -->
                          <picture class="img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top_img01.jpg" alt="サムネイル画像"></picture>
                        <?php endif; ?>
                        <!-- <picture class="img">
                          <img src="<?php the_field('img'); ?>" alt="">
                        </picture> -->
                      </div>
                      <div class="close js_modal_close"></div>
                    </div>
                  </div>
                </span>

              <?php
                $counter++; // カウンターをインクリメント
                endwhile;
                wp_reset_postdata();
                else :
                  // 該当する投稿がない場合の処理
                  echo "投稿がありません";
                endif;
              ?>

              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    
    <?php get_footer(); ?>