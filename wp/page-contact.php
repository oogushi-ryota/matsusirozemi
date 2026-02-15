<?php
/*
Template Name: ご相談フォーム
*/
?>
  <?php get_header(); ?>

  <main class="form">
    <picture class="img">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/about/obj.svg" alt="">
    </picture>
    <div class="cm-inner">
      <div class="formWrap">
        <h2 class="pageTtl fc-brown">ご入塾相談フォーム</h2>

        <a href="<?php echo esc_url(home_url('/faq')); ?>" class="btn">
          <span class="fc-white">よくあるご質問</span>
        </a>

        <?php echo do_shortcode('[mwform_formkey key="31"]'); ?>

        <!-- <div class="formCont">
          <div class="formCont_blk">
            <h3 class="formCont_name bold fc-brown">お名前</h3>
            <div class="inputArea">
              <input placeholder="田中 太郎" size="80" class="fc-brown" aria-invalid="false" value="" type="text" name="お名前">
            </div>
          </div>
    
          <div class="formCont_blk">
            <h3 class="formCont_name bold fc-brown">フリガナ</h3>
            <div class="inputArea">
              <input placeholder="タナカ タロウ" size="80" class="fc-brown" aria-invalid="false" value="" type="text" name="フリガナ">
            </div>
          </div>
    
          <div class="formCont_blk">
            <h3 class="formCont_name bold fc-brown">メールアドレス</h3>
            <div class="inputArea">
              <input placeholder="example@example.com" size="80" class="fc-brown" aria-invalid="false" value="" type="text" name="メールアドレス">
            </div>
          </div>
    
          <div class="formCont_blk">
            <h3 class="formCont_name bold fc-brown">お電話番号</h3>
            <div class="inputArea">
              <input placeholder="09012345678" size="80" class="fc-brown" aria-invalid="false" value="" type="text" name="お電話番号">
            </div>
          </div>
    
          <div class="formCont_blk">
            <h3 class="formCont_name bold fc-brown">学年</h3>
            <div class="inputArea">
              <select class="wpcf7-form-control wpcf7-select form__default" aria-invalid="false" name="学年">
                <option value="">—以下から選択してください—</option>
                <option value="選択肢1">選択肢1</option>
                <option value="選択肢2">選択肢2</option>
                <option value="選択肢3">選択肢3</option>
              </select>
            </div>
          </div>
    
          <div class="formCont_blk">
            <h3 class="formCont_name bold fc-brown">ご所属・ご卒業の学校名</h3>
            <div class="inputArea">
                <input placeholder="" size="40" class="fc-brown" aria-invalid="false" value="" type="text" name="ご所属・ご卒業の学校名">
            </div>
          </div>
    
          <div class="formCont_blk">
            <h3 class="formCont_name bold fc-brown">志望校</h3>
            <div class="inputArea">
              <input placeholder="志望校" size="40" class="fc-brown" aria-invalid="false" value="" type="text" name="志望校">
            </div>
          </div>
  
          <div class="formCont_blk">
            <h3 class="formCont_name bold fc-brown">ご相談内容</h3>
            <div class="txtArea">
              <textarea placeholder="ご相談内容" name="ご相談内容" class="fc-brown" id="" rows="10"></textarea>
            </div>
          </div>
  
          <a href="" class="btn">
            <span class="fc-white">送信する</span>
          </a>
        </div> -->
      </div>
    </div>
  </main>
    
  <?php get_footer(); ?>