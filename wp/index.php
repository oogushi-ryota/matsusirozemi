<?php
/*
Template Name: トップページ
*/
?>

  <?php get_header(); ?>

  <main class="top">
    <section class="mv">
      <div class="swiper-container">
        <ul class=" list swiper-wrapper">
          <li class="list_item swiper-slide">
            <picture class="img">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/top/mv_slide01_sp.png" media="(max-width: 767px)">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/mv_slide01.png" alt="英語を本気で">
            </picture>
          </li>
          <li class="list_item swiper-slide">
            <picture class="img">
              <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/top/mv_slide02_sp.png" media="(max-width: 767px)">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/mv_slide02.png" alt="画像">
            </picture>
          </li>
          <li class="list_item swiper-slide">
            <a href="https://motoshiro-academy.jp/" target="_blank">
              <picture class="img">
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/img/top/mv_slide03_sp.jpg" media="(max-width: 767px)">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/mv_slide03.jpg" alt="画像">
              </picture>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <section class="sec01">
      <div class="ttlArea __01">
        <h3 class="ttl fc-white">
          受験英語のプロが教える<br>
          受験英語に特化した指導
        </h3>
        <p class="txt fc-brown regular">
          無駄のない勉強法で<br>
          最速レベルアップ！
        </p>
      </div>
      <div class="ttlArea __02">
        <h3 class="ttl fc-orange">
          浜松で唯一<br>
          先取り英語学習が可能
        </h3>
        <p class="txt fc-brown regular">
          ベースからライバルを<br>
          追い抜ける
        </p>
      </div>
      <div class="ttlArea __03">
        <h3 class="ttl fc-white">
          少人数制授業と<br>
          個別指導が選べる
        </h3>
        <p class="txt fc-white regular">
          個々の性格に合った授業で<br>
          伸びしろ最大限
        </p>
      </div>
      <div class="ttlArea __04">
        <h3 class="ttl fc-orange">
          入塾テストなし
        </h3>
        <p class="txt fc-brown regular">
          事前のヒアリングで学力と<br>
          モチベーションを見極めます
        </p>
      </div>
      <div class="ttlArea __05">
        <h3 class="ttl fc-white">
          河合塾元講師が指導
        </h3>
        <p class="txt fc-brown regular">
          大手の塾仕込みの<br>
          質の高い指導！
        </p>
      </div>
    </section>

    <section class="sec02">
      <h2 class="ttl fc-blue">こんなお悩み&<br class="is-sp">志ありませんか？</h2>
      <ul class="list">
        <li class="list_item fc-blue regular">・塾や予備校に通っているけれど英語の成績が伸びない</li>
        <li class="list_item fc-blue regular">・英語の成績を武器にして志望校に合格したい</li>
        <li class="list_item fc-blue regular">・小学生のうちから受験に向けた英語の対策をしていきたい</li>
        <li class="list_item fc-blue regular">・得意な英語をもっと得意にしたい</li>
        <li class="list_item fc-blue regular">・苦手な英語を楽しく克服したい</li>
        <li class="list_item fc-blue regular">・不登校中の英語の勉強をやりなおしたい</li>
      </ul>
      <picture class="img is-sp">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/sec02_txt.svg" alt="すべて松城ゼミナールが解決">
      </picture>
    </section>

    <section class="sec03">
      <div class="cm-inner">
        <ul class="list">
          <li class="list_item __01">
          <a href="<?php echo esc_url(home_url('/course#tab1')); ?>">
              <p class="txt cm-f-tenmincho fc-blue">
                通常の授業やテスト対策に向けたコースと、ライバルたちに<br class="is-pc">
                差をつけられる中学英語先取りコースが選べます。
              </p>
            </a>
          </li>
          <li class="list_item __02">
          <a href="<?php echo esc_url(home_url('/course#tab2')); ?>">
              <p class="txt cm-f-tenmincho fc-blue">
                通常の授業や定期テスト対策にくわえて、高校入試対策、<br class="is-pc">
                中高一貫校の内部進学対策などに対応した指導を行います。
              </p>
            </a>
          </li>
          <li class="list_item __03">
            <a href="<?php echo esc_url(home_url('/course#tab3')); ?>">
              <p class="txt cm-f-tenmincho fc-blue">
                国公立大学・私立大学の試験対策を行います。志望大学<br class="is-pc">
                に合わせた4つのプログラムに分かれています。
              </p>
            </a>
          </li>
          <li class="list_item __04">
            <a href="<?php echo esc_url(home_url('/course#tab4')); ?>">
              <p class="txt cm-f-tenmincho fc-blue">
                完全１対１の授業で、生徒それぞれのペースに合わせた指導が<br class="is-pc">
                できます。オンライン授業も可能です。
              </p>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <section class="sec04">
      <div class="txtBlk __01">
        <h2 class="ttl fc-brown bold">濱井 正吾(９浪はまい)さん</h2>
        <p class="txt fc-orange bold">
          佐和先生の指導で<br>
          東京大学大学院教育学研究科<br>
          一次試験合格！
        </p>
      </div>
      <div class="txtBlk __02">
        <h2 class="ttl fc-blue bold">９浪はまいさんから<br class="is-sp">応援メッセージ</h2>
        <p class="txt fc-blue regular">
          私が東京大学大学院教育学研究科の受験を志したとき、<br class="is-pc">
          学部で勉強した経験がないことを<br class="is-pc">
          一から学ばなければならなかったので不安でいっぱいでした。<br class="is-pc">
          しかし、佐和先生に丁寧に指導をいただいたおかげで、<br class="is-pc">
          わずか半年で一次試験である筆記試験で合格点が取れました。<br class="is-pc">
          英語力を向上させたい方は、<br class="is-pc">
          松城ゼミナールで佐和先生の指導を受けることを強くお勧めします!
        </p>
      </div>
    </section>

    <!-- <section class="achievements">
      <div class="cm-inner">
        <h2 class="ttl fc-orange">過去の実績</h2>
        <div class="txtArea">
          <div class="txtBlk">
            <h3 class="contTtl">【高校受験】</h3>
            <p class="txt">浜松北高校、浜松市立高校、浜松西高校、浜松学芸高校、渋谷教育学園幕張高校、女子学院高校、日比谷高校、本郷高校、川越高校、浦和女子高校、その他、全国の各高校。</p>
          </div>
          <div class="txtBlk">
            <h3 class="contTtl">【大学受験】</h3>
            <p class="txt">東京大学(文Ⅲ、理Ⅰ)、京都大学(法・教育・工)、一橋大学(法・社会)、東京工業大学(理・工)、北海道大学(法・文・医)、東北大学(経済・文)、名古屋大学(法・教育・文・理)、大阪大学(法・経済・外国語)、千葉大学(法経済・医)、信州大学(医)、早稲田大学(政経・法・文・文化構想・社会科学・商・教育・人間科学・スポーツ科学・国際教養・基幹理工・創造理工・先進理工)、慶應義塾大学(法・経済・商・文・総合政策・環境情報)、その他、神戸大学・筑波大学・静岡大学などの各国公立大学、GMARCH、関関同立などの各私立大学、順天堂大学、浜松医科大学、帝京大学などの各大学医学部、北里大学などの各大学薬学部、その他多数。</p>
          </div>
          <div class="txtBlk">
            <h3 class="contTtl">【大学編入】</h3>
            <p class="txt">北海道大学(法学部、教育学部)、筑波大学(社会・国際学群・社会学類、政治学、政治学、社会学)、千葉大学(文学部)、名古屋大学(法学部、文学部、教育学部)、大阪大学(法学部、人間科学部)、広島大学(法学部)、香川大学(法学部)、奈良女子大学(生活環境学部)、東京大学(工学部)、東京工業大学、豊橋科学技術大学、聖路加国際大学(看護学部)、金沢大学(医薬保健学域)、富山大学(医学部)、大分大学(医学部)、長崎大学(医学部)、鹿児島大学(医学部)、その他多数。</p>
          </div>
          <div class="txtBlk">
            <h3 class="contTtl">【大学院受験】</h3>
            <p class="txt">東京大学(総合文化研究科、教育学研究科)、京都大学(法学研究科、公共政策大学院)、一橋大学(法学研究科、社会学研究科、イノベーションマネジメント博士後期課程)、東京工業大学(イノベーション化学系博士後期課程)、北海道大学(国際広報メディア・観光学院)、東北大学(公共政策大学院)、筑波大学(人文社会ビジネス科学博士後期課程)、名古屋大学(教育学研究科、国際開発研究科)、大阪大学(人間科学研究科)、神戸大学(法学研究科)、九州大学(法学研究院)、早稲田大学(政治学研究科、法学研究科、経済学研究科、経営管理研究科、社会科学研究科、スポーツ科学研究科)、慶應義塾大学(法学研究科、社会学研究科、経営管理研究科、文学研究科)、その他多数。</p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="sec05">
      <div class="cm-inner">
        <hgroup class="ttlWrap">
          <picture class="img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_logo01.svg" alt="">
          </picture>
          <h2 class="ttl fc-brown bold">有料自習室のご案内</h2>
        </hgroup>
        <div class="sec05_wrap">
          <div class="flexWrap">
            <div class="left">
              <hgroup>
                <h3 class="subTtl cm-f-tenmincho fc-orange">家で勉強、はかどらない？それなら</h3>
                <picture class="img">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/sec05_txt.svg" alt="浜松デスク">
                </picture>
              </hgroup>
              <p class="txt fc-brown regular">
                高校生・大学生・浪人生の方のための有料自習室です。<br>
                受験勉強や資格の勉強やちょっとした作業などにご利用いた<br class="is-pc">
                だけます。内装は北欧スウェーデンのインテリアショップIKEA<br class="is-pc">
                の商品で統一し、モダンで落ち着いた空間となっております。
              </p>
              <p class="txt fc-brown regular">
                浜松で唯一、時間利用が可能な自習室で、例えば浜松の図書館が閉まってしまう18時以降、21時までの3時間だけの利用でもOK。料金も350円/1時間〜、セルフカフェ付きでとってもリーズナブル。
              </p>
              <ul class="list">
                <li class="list_item">
                  <picture class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/icon_cafe.svg" alt="Self Cafe">
                  </picture>
                </li>
                <li class="list_item">
                  <picture class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/icon_wifi.svg" alt="Wi-fi">
                  </picture>
                </li>
                <li class="list_item">
                  <picture class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/icon_consent.svg" alt="コンセント">
                  </picture>
                </li>
                <li class="list_item">
                  <picture class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/icon_ng.svg" alt="キーボードNG">
                  </picture>
                </li>
                <li class="list_item">
                  <picture class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/icon_battery.svg" alt="充電器貸し出し">
                  </picture>
                </li>
                <li class="list_item">
                  <picture class="img">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/icon_stationery.svg" alt="文房具貸し出し">
                  </picture>
                </li>
              </ul>
            </div>
            <div class="right">
              <picture class="img">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/sec05_img.jpg" alt="画像">
              </picture>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="sec06">
      <div class="cm-inner">
        <hgroup class="ttlWrap">
          <picture class="img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon_logo02.svg" alt="">
          </picture>
          <picture class="ttlImg">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/top/sec06_txt.svg" alt="松ゼミNEWS">
          </picture>
        </hgroup>
        <div class="sec06_wrap">

        <?php
        $args = array(
            'post_type' => 'news-post',
            'posts_per_page' => 3, // すべての投稿を表示する場合は-1に設定
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

        </div>
      </div>
    </section>

    <section class="sec07">
      <div class="cm-inner">
        <div class="sec07_cont">
          <div class="flexWrap">
            <div class="left">
              <h2 class="ttl fc-brown bold">アクセス</h2>
              <address class="address">
                <sapn class="txt regular fc-brown">
                  〒430-0947<br>
                  静岡県浜松市中央区松城町208-6<br>
                  西井ビル2階
                </sapn>
                <sapn class="txt regular fc-brown">
                  JR浜松駅より徒歩約20分<br>
                  R浜松駅からバスで約5分<br>
                  1・2・15・16番乗り場から市役所経由の<br>
                  遠鉄バスで「市役所南」下車徒歩2分
                </sapn>
              </address>
            </div>
            <div class="right">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.778204103264!2d137.72090351161583!3d34.71077378255866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601ade8a6c4790eb%3A0xea46c12da226b147!2z44CSNDMwLTA5NDcg6Z2Z5bKh55yM5rWc5p2-5biC5Lit5aSu5Yy65p2-5Z-O55S677yS77yQ77yY4oiS77yWIOilv-S6leODk-ODqyAy6ZqO!5e0!3m2!1sja!2sjp!4v1729161851295!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
    
  <?php get_footer(); ?>