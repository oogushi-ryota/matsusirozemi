<?php
/*
Template Name: ニュース
*/
?>

  <?php get_header(); ?>

  <main class="news">
    <section class="mv">
      <picture class="img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/news/mv.jpg" alt="メンビジュアル">
      </picture>
    </section>
    <div class="cm-inner">
      <section class="topics">

        <?php
        $args = array(
            'post_type' => 'news-post',
            'posts_per_page' => 6, // すべての投稿を表示する場合は-1に設定
        );

        $count = 0; // 表示済みの記事数をカウントする変数
        $news_query = new WP_Query($args);

        ?>

        <?php if ($news_query->have_posts()) : ?>
        <ul class="list">
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <li class="list_item">
            <a href="<?php the_permalink(); ?>">
              <span class="date cm-f-fredericka fc-blue"><?php echo get_the_date(); ?></span>
              <h3 class="ttl fc-blue regular"><?php the_title(); ?></h3>
            </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?> <!-- WP_Queryのリセット -->
        </ul>

      <?php else : ?>
        <!-- 投稿がない場合のメッセージ -->
        <p class="no-posts">投稿がありません。</p>
      <?php endif; ?>

      </section>
      <div class="tabWrap">
        <h4 class="ttl fc-white regular">カテゴリ</h4>
        <?php
        // news-post に紐づくタクソノミー 'news-category' を取得
        $taxonomy = 'news-category'; // カスタムタクソノミー名
        $terms = get_terms(array(
            'taxonomy' => $taxonomy,
            'hide_empty' => false, // 投稿がなくてもすべてのタームを取得
        ));
        if (!is_wp_error($terms) && !empty($terms)) : ?>
            <ul class="category-tabList">
                <!-- 「すべて」ボタン -->
                <li class="category-tabList_item fc-brown regular fc-brown is-active" id="categorytab1" data-term-id="all">すべて</li>
                <?php foreach ($terms as $index => $term) : ?>
                    <li class="category-tabList_item fc-brown regular fc-brown" id="categorytab<?php echo $index + 2; ?>" data-term-id="<?php echo esc_attr($term->term_id); ?>">
                        <?php echo esc_html($term->name); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>


      <section class="archive">
        <?php
        $args = array(
            'post_type' => 'news-post',
            'posts_per_page' => -1, // すべての投稿を表示する場合は-1に設定
        );

        $count = 0; // 表示済みの記事数をカウントする変数
        $news_query = new WP_Query($args);

        ?>

        <?php if ($news_query->have_posts()) : ?>
        <ul class="newsList">
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <li class="newsList_item">
            <a href="<?php the_permalink(); ?>">
              <span class="date cm-f-fredericka fc-blue"><?php echo get_the_date(); ?></span>
              <h3 class="ttl regular fc-blue"><?php the_title(); ?></h3>
              <picture class="img">

              <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>

                <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="サムネイル">
              </picture>
              <?php endif; ?>
            </a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?> <!-- WP_Queryのリセット -->
        </ul>

      <?php endif; ?>

      <?php
      $args = array(
          'post_type' => 'news-post', // カスタム投稿タイプ
          'posts_per_page' => -1, // 表示する投稿数
          'tax_query' => array(
              array(
                  'taxonomy' => 'news-category', // タクソノミー名（適切な名前に変更してください）
                  'field'    => 'slug', // スラッグで指定
                  'terms'    => 'column', // タームスラッグを指定（「塾長コラム」のスラッグを確認して修正）
              ),
          ),
      );

      $news_query = new WP_Query($args);

      if ($news_query->have_posts()) : ?>
        <ul class="newsList">
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <li class="newsList_item">
            <a href="<?php the_permalink(); ?>">
              <span class="date cm-f-fredericka fc-blue"><?php echo get_the_date(); ?></span>
              <h3 class="ttl regular fc-blue"><?php the_title(); ?></h3>
              <picture class="img">

              <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>

                <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="サムネイル">
              </picture>
              <?php endif; ?>
            </a>
          </li>
        <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); // クエリをリセット ?>
        <?php endif; ?>

        <?php
        $args = array(
            'post_type' => 'news-post', // カスタム投稿タイプ
            'posts_per_page' => -1, // 表示する投稿数
            'tax_query' => array(
                array(
                    'taxonomy' => 'news-category', // タクソノミー名（適切な名前に変更してください）
                    'field'    => 'slug', // スラッグで指定
                    'terms'    => 'elementary-school-student', // タームスラッグを指定（「塾長コラム」のスラッグを確認して修正）
                ),
            ),
        );

        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) : ?>
        <ul class="newsList">
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <li class="newsList_item">
            <a href="<?php the_permalink(); ?>">
              <span class="date cm-f-fredericka fc-blue"><?php echo get_the_date(); ?></span>
              <h3 class="ttl regular fc-blue"><?php the_title(); ?></h3>
              <picture class="img">

              <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>

                <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="サムネイル">
              </picture>

              <?php endif; ?>
            </a>
          </li>
        <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); // クエリをリセット ?>
        <?php endif; ?>


        <?php
        $args = array(
            'post_type' => 'news-post', // カスタム投稿タイプ
            'posts_per_page' => -1, // 表示する投稿数
            'tax_query' => array(
                array(
                    'taxonomy' => 'news-category', // タクソノミー名（適切な名前に変更してください）
                    'field'    => 'slug', // スラッグで指定
                    'terms'    => 'junior-high-school-student', // タームスラッグを指定（「塾長コラム」のスラッグを確認して修正）
                ),
            ),
        );

        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) : ?>

        <ul class="newsList">
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <li class="newsList_item">
            <a href="<?php the_permalink(); ?>">
              <span class="date cm-f-fredericka fc-blue"><?php echo get_the_date(); ?></span>
              <h3 class="ttl regular fc-blue"><?php the_title(); ?></h3>
              <picture class="img">

              <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>

                <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="サムネイル">
              </picture>

              <?php endif; ?>
            </a>
          </li>
        <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); // クエリをリセット ?>
        <?php endif; ?>


        <?php
        $args = array(
            'post_type' => 'news-post', // カスタム投稿タイプ
            'posts_per_page' => -1, // 表示する投稿数
            'tax_query' => array(
                array(
                    'taxonomy' => 'news-category', // タクソノミー名（適切な名前に変更してください）
                    'field'    => 'slug', // スラッグで指定
                    'terms'    => 'exam-retaker', // タームスラッグを指定（「塾長コラム」のスラッグを確認して修正）
                ),
            ),
        );

        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) : ?>

        <ul class="newsList">
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <li class="newsList_item">
            <a href="<?php the_permalink(); ?>">
              <span class="date cm-f-fredericka fc-blue"><?php echo get_the_date(); ?></span>
              <h3 class="ttl regular fc-blue"><?php the_title(); ?></h3>
              <picture class="img">

              <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>

                <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="サムネイル">
              </picture>

              <?php endif; ?>
            </a>
          </li>
        <?php endwhile; ?>
        </ul>

        <?php endif; ?>


        <?php
        $args = array(
            'post_type' => 'news-post', // カスタム投稿タイプ
            'posts_per_page' => -1, // 表示する投稿数
            'tax_query' => array(
                array(
                    'taxonomy' => 'news-category', // タクソノミー名（適切な名前に変更してください）
                    'field'    => 'slug', // スラッグで指定
                    'terms'    => 'others', // タームスラッグを指定（「塾長コラム」のスラッグを確認して修正）
                ),
            ),
        );

        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) : ?>
        <ul class="newsList">
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <li class="newsList_item">
            <a href="<?php the_permalink(); ?>">
              <span class="date cm-f-fredericka fc-blue"><?php echo get_the_date(); ?></span>
              <h3 class="ttl regular fc-blue"><?php the_title(); ?></h3>
              <picture class="img">

              <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>

                <source srcset="<?php echo get_the_post_thumbnail_url(); ?>" type="image/webp">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="サムネイル">
              </picture>

              <?php endif; ?>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>

        <?php wp_reset_postdata(); // クエリをリセット ?>
        <?php endif; ?>

      </section>
    </div>
  </main>
    
  <?php get_footer(); ?>