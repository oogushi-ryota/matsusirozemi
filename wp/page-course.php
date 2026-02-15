<?php
/*
Template Name: コース・料金
*/
?>

  <?php get_header(); ?>

  <main class="course">
    <section class="tabArea">
      <picture class="img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/about/obj.svg" alt="">
      </picture>
      <div class="cm-inner">
        <h2 class="ttl fc-brown pageTtl">コース・料金</h2>
        <ul class="tabList">
          <li class="tabList_item is-active" id="tab1">
            <picture class="img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/course/elementary_txt.svg" alt="小学生コース">
            </picture>
          </li>
          <li class="tabList_item" id="tab2">
            <picture class="img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/course/junior-high-school_txt.svg" alt="中学生コース">
            </picture>
          </li>
          <li class="tabList_item" id="tab3">
            <picture class="img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/course/senior-high-school_txt.svg" alt="高校生・浪人生コース">
            </picture>
          </li>
          <li class="tabList_item" id="tab4">
            <picture class="img">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/course/tutoring_txt.svg" alt="個別指導コース">
            </picture>
          </li>
        </ul>
      </div>
    </section>
    <!-- 小学生コース -->
    <section id="tabArea1" class="courseCont">
      <div class="cm-inner">
        <div class="mv">
          <div class="txtArea">
            <h3 class="ttl fc-orange bold">
              浜松で唯一<br>
              先取り英語学習が可能
            </h3>
          </div>
        </div>
        <div class="detail">
          <picture class="img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/course/sec01_obj.svg" alt="ロゴ">
          </picture>
          <h3 class="ttl bold cm-f-tenmincho">小学生コース</h3>
          <div class="txtArea">
            <p class="txt cm-f-tenmincho fc-blue">
              小学校で学習する英語の対策や、中学1年生〜3年生で学習する英語の先取り対策を行います。<br>
              現在は「先取り中学英語」の講座を開講しており、英語を得意科目にしたい生徒さんを対象に指導しています。
            </p>
          </div>
          <div class="txtArea">
            <h4 class="ttl fc-orange cm-f-tenmincho">「中学英語」先取り対策</h4>
            <p class="txt cm-f-tenmincho fc-blue">
              中学1年生〜3年生の英語力を身につけるための指導を行います。<br>
              先取りで学ぶことで、中学校での英語の学習負担を軽くし、<br class="is-pc">英語を得意科目にすることを目指します。<br>
              生徒さんに英語を好きになってもらうだけでなく、自信をつけてもらうことを目指します。
            </p>
          </div>
        </div>
        <div class="tableWrap">
          <table>
            <thead>
              <tr>
                <th class="fc-white regular">講座</th>
                <th class="fc-white regular">月謝</th>
                <th class="fc-white regular">入塾金<span class="s-txt">（初回のみ）</span></th>
                <th class="fc-white regular">諸費用<span class="s-txt">（年間）</span></th>
                <th class="fc-white regular">スケジュール</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="course regular">先取り中学英語</td>
                <td class="regular">13,750円<span class="s-txt">(税込)</span></td>
                <td class="regular">11,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">2,750円<span class="s-txt">(税込)</span></td>
                <td class="regular">週2回 平日1時間</td>
              </tr>
            </tbody>
          </table>
        </div>

        <section class="flow">
          <h2 class="pageTtl fc-brown">ご入塾の流れ</h2>
          <ol class="list">
            <li class="list_item">
              <span class="num fc-white bold">STEP.1</span>
              <div class="txtArea">
                <h3 class="ttl fc-orange cm-f-tenmincho">お問合せ</h3>
                <p class="txt fc-blue cm-f-tenmincho">ご入塾相談日程調整を行います。お気軽にお問い合わせください。</p>
              </div>
            </li>
            <li class="list_item">
              <span class="num fc-white bold">STEP.2</span>
              <div class="txtArea">
                <h3 class="ttl fc-orange cm-f-tenmincho">ご入塾相談の実施</h3>
                <p class="txt fc-blue cm-f-tenmincho">
                  教室またはオンラインで、ご要望を伺いながら特徴、指導方針、<br class="is-pc">
                  カリキュラム、料金をご説明します。
                </p>
              </div>
            </li>
            <li class="list_item">
              <span class="num fc-white bold">STEP.3</span>
              <div class="txtArea">
                <h3 class="ttl fc-orange cm-f-tenmincho">ご⼊塾⼿続き</h3>
                <p class="txt fc-blue cm-f-tenmincho">
                  入塾申込書の記入や入会金・受講料の振込などの手続きを行います。
                </p>
              </div>
            </li>
            <li class="list_item">
              <span class="num fc-white bold">STEP.4</span>
              <div class="txtArea">
                <h3 class="ttl fc-orange cm-f-tenmincho">ご受講スタート</h3>
                <p class="txt fc-blue cm-f-tenmincho">
                  入塾手続き完了後、受講を開始してください。
                </p>
              </div>
            </li>
          </ol>
        </section>
      </div>
    </section>
    <!-- 小学生コース -->

    <!-- 中学生コース -->
    <section id="tabArea2" class="courseCont junior-high-school">
      <div class="cm-inner">
        <div class="mv">
          <div class="txtArea">
            <h3 class="ttl fc-blue bold">
              定期テストと入試に備える<br>
              万全の対策指導
            </h3>
          </div>
        </div>
        <div class="detail">
          <picture class="img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/course/sec01_obj.svg" alt="ロゴ">
          </picture>
          <h3 class="ttl bold cm-f-tenmincho">中学生コース</h3>
          <div class="txtArea">
            <p class="txt cm-f-tenmincho fc-blue">
              定期テストや高校入試、中高一貫校の内部進学対策などに対応した指導を行います。
            </p>
          </div>
          <div class="txtArea">
            <h4 class="ttl fc-orange cm-f-tenmincho">定期テスト対策</h4>
            <p class="txt cm-f-tenmincho fc-blue">
              定期テスト(中間テスト・期末テスト)の点数は、内申点に大きく影響します。<br>
              松城ゼミナールでは各学校の授業の内容を踏まえた指導を行い、定期テストで常に40点〜50点を取ることを目指します。
            </p>
          </div>
          <div class="txtArea">
            <h4 class="ttl fc-orange cm-f-tenmincho">高校入試対策</h4>
            <p class="txt cm-f-tenmincho fc-blue">
              入試本番では普段の実力をしっかりと発揮する必要がありミスをすることは許されません。<br>
              そのためには、どのような問題が出題されても落ち着いて対応できることが求められます。<br>
              そこで指導では過去問や学調などの問題を扱い、入試本番に対応できる実践力を身に付けることを目指します。
            </p>
          </div>
          <div class="txtArea">
            <h4 class="ttl fc-orange cm-f-tenmincho">中高一貫校の内部進学対策</h4>
            <p class="txt cm-f-tenmincho fc-blue">
              中高一貫校では高校受験がないため、英語の勉強も疎かになりがちです。<br>
              しかしここでしっかりと英語力の土台を身につけられるかどうかは、大学受験の出来に大きく影響を与えます。普段の定期試験で高得点を狙うこと、また当然ですが内部進学を確実にすることを目指した指導を行います。
            </p>
          </div>
          <div class="txtArea">
            <h4 class="ttl fc-orange cm-f-tenmincho">目標校</h4>
            <p class="txt cm-f-tenmincho fc-blue">
              浜松北高校 / 磐田南高校 / 浜松市立高校 / 浜松西高校 / 浜松南高校 / 浜松湖南高校 /<br class="is-pc">
              浜松湖東高校 / 浜名高校 /  浜松日体高校 / 浜松学芸高校 /<br class="is-pc">
              聖隷クリストファー高校 / 西遠女子学園高校 / 浜松聖星高校  /浜松開誠館高校 など
            </p>
          </div>
        </div>
        <div class="tableWrap">
          <table>
            <thead>
              <tr>
                <th class="fc-white regular">講座</th>
                <th class="fc-white regular">月謝</th>
                <th class="fc-white regular">入塾金<span class="s-txt">（初回のみ）</span></th>
                <th class="fc-white regular">諸費用<span class="s-txt">（年間）</span></th>
                <th class="fc-white regular">スケジュール</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="course regular">中学1年生</td>
                <td class="regular">16,500円<span class="s-txt">(税込)</span></td>
                <td class="regular">11,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">2,750円<span class="s-txt">(税込)</span></td>
                <td class="regular">週2回 各1時間</td>
              </tr>
              <tr>
                <td class="course regular">中学2年生</td>
                <td class="regular">16,500円<span class="s-txt">(税込)</span></td>
                <td class="regular">11,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">2,750円<span class="s-txt">(税込)</span></td>
                <td class="regular">週1回 2時間</td>
              </tr>
              <tr>
                <td class="course regular">中学3年生</td>
                <td class="regular">17,600円<span class="s-txt">(税込)</span></td>
                <td class="regular">11,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">2,750円<span class="s-txt">(税込)</span></td>
                <td class="regular">週1回 2時間</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- 中学生コース -->

    <!-- 高校生・浪人生コース -->
    <section id="tabArea3" class="courseCont senior-high-school">
      <div class="cm-inner">
        <div class="mv">
          <div class="txtArea">
            <h3 class="ttl fc-white bold">
              難関大学への挑戦に<br>
              絶対の自信をつける
            </h3>
          </div>
        </div>
        <div class="detail">
          <picture class="img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/course/sec01_obj.svg" alt="ロゴ">
          </picture>
          <h3 class="ttl bold cm-f-tenmincho">高校生・浪人生コース</h3>
          <div class="txtArea">
            <p class="txt cm-f-tenmincho fc-blue">
              国公立大学の 2 次試験・私立大学の独自試験の対策指導を行います。<br>
              本コースは、「英文解釈ベーシック」「スタンダード英語」「アドバンス英語」の 3 つの講座より成り立っています。<br><br>
              ・「英文解釈ベーシック」では、高校英語の学習をスタートする方や、英文法・読解の基礎をしっかり固めたい方を対象に、英文解釈・文法・長文読解の基礎力を養成します。<br>
              ・「スタンダード英語」では、共通テストや中堅〜上位大学の記述問題に対応できる応用力を養います。<br>
              ・「アドバンス英語」では、東京大学・京都大学をはじめとする旧帝大や、早慶などの最難関私立大学の英語試験に対応した高度な記述力・読解力・英作文力を鍛えます。
            </p>
          </div>
          <div class="txtArea">
            <h4 class="ttl fc-orange cm-f-tenmincho">国公立大学の2次試験対策</h4>
            <p class="txt cm-f-tenmincho fc-blue">
              国公立大学の2次試験では、長文読解や英文和訳、和文英訳、要約、自由英作文などから構成される記述式問題が出題されます。これらの問題を解けるようになるためには、英文法力や英文解釈力、論理的思考力などが特に重要です。<br>
              松城ゼミナールでは、一文一文の精読を通してこれらの能力を高めるための指導を行います。
            </p>
          </div>
          <div class="txtArea">
            <h4 class="ttl fc-orange cm-f-tenmincho">私立大学の独自試験対策</h4>
            <p class="txt cm-f-tenmincho fc-blue">
              私立大学の独自試験に対応できるようになるためには、豊富な語彙力・緻密な英文法力・速読力・高い読解力、問題を解くためのテクニックなどが特に重要です。<br>
              また、志望校ごとの出題傾向を分析し、実戦力を養成します。 
            </p>
          </div>
          <div class="txtArea">
            <h4 class="ttl fc-orange cm-f-tenmincho">目標校</h4>
            <p class="txt cm-f-tenmincho fc-blue">
              東京大学 / 京都大学 / 一橋大学 / 東京科学大学 / 大阪大学 / 東北大学 / 名古屋大学 /<br class="is-pc">
              北海道大学 / 九州大学 / 神戸大学 / 筑波大学 / 東京外国語大学 / 浜松医科大学 / 静岡大学 /<br class="is-pc">
              静岡県立大学 / その他の国公立大学(医学部含む) / 早稲田大学 / 慶應義塾大学 /<br class="is-pc">
              上智大学 / GMARCH / 関関同立 / その他の私立大学(医学部含む)
            </p>
          </div>
        </div>
        <div class="tableWrap">
          <table>
            <thead>
              <tr>
                <th class="fc-white regular">講座</th>
                <th class="fc-white regular">月謝</th>
                <th class="fc-white regular">入塾金<span class="s-txt">（初回のみ）</span></th>
                <th class="fc-white regular">諸費用<span class="s-txt">（年間）</span></th>
                <th class="fc-white regular">スケジュール</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="course regular">英文解釈ベーシック</td>
                <td class="regular">22,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">22,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">2,750円<span class="s-txt">(税込)</span></td>
                <td class="regular">週1回 平日90分</td>
              </tr>
              <tr>
                <td class="course regular">スタンダード英語</td>
                <td class="regular">22,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">22,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">2,750円<span class="s-txt">(税込)</span></td>
                <td class="regular">週1回 平日90分</td>
              </tr>
              <!-- <tr>
                <td class="course regular">難関英語</td>
                <td class="regular">22,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">22,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">2,750円<span class="s-txt">(税込)</span></td>
                <td class="regular">週1回 平日90分</td>
              </tr> -->
              <tr>
                <td class="course regular">アドバンス英語</td>
                <td class="regular">33,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">22,000円<span class="s-txt">(税込)</span></td>
                <td class="regular">2,750円<span class="s-txt">(税込)</span></td>
                <td class="regular">週1回 平日90分</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- 高校生・浪人生コース -->

    <!-- 個別指導コース -->
    <section id="tabArea4" class="courseCont tutoring">
      <div class="cm-inner">
        <div class="mv">
          <div class="txtArea">
            <h3 class="ttl fc-white bold">
              完全オーダーメイドの<br>
              寄り添う指導
            </h3>
          </div>
        </div>
        <div class="detail">
          <picture class="img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/course/sec01_obj.svg" alt="ロゴ">
          </picture>
          <h3 class="ttl bold cm-f-tenmincho">個別指導コース</h3>
          <div class="txtArea">
            <p class="txt cm-f-tenmincho fc-blue">
              個別指導コースでは生徒さま一人ひとりの学力や性格、スケジュールに合わせた<br class="is-pc">
              オーダーメイドの授業を提供させていただきます。<br>
              定期試験対策、受験対策、英検対策を承っております。<br>
              通塾だけでなくオンライン受講も可能です。
            </p>
          </div>
        </div>
        <div class="tableWrap">
          <table>
            <thead>
              <tr>
                <th class="fc-white regular">入塾金<span class="s-txt">（初回のみ）</span></th>
                <th class="fc-white regular">諸費用<span class="s-txt">（年間）</span></th>
                <th class="fc-white regular">月謝</th>
                <th class="fc-white regular">スケジュール</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="course regular">
                  小学生・中学生 11,000円<span class="s-txt">(税込)</span><br>
                  高校生・浪人生・社会人 22,000円<span class="s-txt">(税込)</span>
                </td>
                <td class="regular">2,750円<span class="s-txt">(税込)</span></td>
                <td class="course regular">
                  週1回 1時間 26,400円<span class="s-txt">(税込)</span><br>
                  週1回 1.5時間 39,600円<span class="s-txt">(税込)</span><br>
                  週1回 2時間 52,800円<span class="s-txt">(税込)</span><br>
                  <span class="note">※月の週数により変動します。</span>
                </td>
                <td class="course regular">要相談</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- 個別指導コース -->
  </main>

  <?php get_footer(); ?>