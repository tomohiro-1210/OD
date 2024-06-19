<?php get_header(); ?>
<!-- /header -->

    <!-- main -->
    <main>
      <!-- 下層FV -->
       <div class="l-kv">
        <div class="l-kv__bg l-kv__bg-contact">
          <p class="l-kv__page-name">お問い合わせ</p>
        </div>
       </div><!-- /下層FV -->
       <div class="l-contact">
        <!-- テキスト -->
        <p class="l-contact__text" data-fadeIn>ダクトに関すること、施工に関すること、採用に関することなど、どんなことでも構いません。<br>ぜひお気軽にお問い合わせくださいませ。</p>
        <!-- お問い合わせフォーム -->
         <div class="l-contact">
            <?php echo the_content(); ?>
         </div>
         <!-- <div class="l-contact__form" data-fadeIn>
            <div class="l-contact__form__inner">
                <div class="l-contact__form__item">
                    <label><span>お名前</span><span class="required">必須</span></label>
                    <input type="text">
                </div>
                <div class="l-contact__form__item">
                    <label><span>メールアドレス</span><span class="required">必須</span></label>
                    <input type="text">
                </div>
                <div class="l-contact__form__item">
                    <label><span>電話番号</span><span class="required hide">必須</span></label>
                    <input type="text">
                </div>
                <div class="l-contact__form__item start purpose">
                    <label><span>お問い合わせの目的</span><span class="required">必須</span></label>
                    <div class="l-contact__form__check">
                        <label><input type="checkbox" id="purpose">お仕事についての相談</label>
                        <label><input type="checkbox" id="purpose">採用についての相談</label>
                        <label><input type="checkbox" id="purpose">その他</label>
                    </div>
                </div>
                <div class="l-contact__form__item start">
                    <label><span>お問い合わせ内容</span><span class="required">必須</span></label>
                    <textarea name="contact"></textarea>
                </div>
            </div>
         </div>
         <button class="c-button l-contact__button">内容を送信する</button> -->
         <!-- 背景画像 -->
          <div class="l-contact__bg"></div>

       </div>
       
    </main>
    <!-- /main -->

 
    <!-- footer -->
    <?php get_footer(); ?>