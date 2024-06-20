<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/hgi0fdm.css">

    <!-- slickのCSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ファビコン -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/common/favicon.ico">

    <!-- style.css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <title>有限会社オーディー</title>
</head>
<body>
    <!-- header -->
    <header class="l-header fixed">
      <div class="l-header__inner">
        <h1 class="l-header__logo"><a href="<?php echo esc_url(get_home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-od-black.png" alt="logo"></a></h1>
        <nav class="l-header__nav">
          <ul class="l-header__menu">
            <li class="l-header__list"><a href="<?php echo esc_url(get_home_url()); ?>/company">会社概要</a></li>
            <li class="l-header__list"><a href="<?php echo esc_url(get_home_url()); ?>/works">事業内容</a></li>
            <li class="l-header__list"><a href="<?php echo esc_url(get_home_url()); ?>/recruit">採用情報</a></li>
            <li class="l-header__list"><a href="<?php echo esc_url(get_home_url()); ?>/contact">お問い合わせ</a></li>
            <li class="l-header__list"><a href="<?php echo esc_url(get_home_url()); ?>/news">最新情報</a></li>
          </ul>
        </nav>
        <div class="l-header__hamburger">
          <div class="l-header__hamburger__inner">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </header>
    <div class="l-header-sp-menu">
      <ul class="l-header-sp-menu__menu">
        <li class="l-header-sp-menu__list"><a href="<?php echo esc_url(get_home_url()); ?>/company">会社概要</a></li>
        <li class="l-header-sp-menu__list"><a href="<?php echo esc_url(get_home_url()); ?>/works">事業内容</a></li>
        <li class="l-header-sp-menu__list"><a href="<?php echo esc_url(get_home_url()); ?>/recruit">採用情報</a></li>
        <li class="l-header-sp-menu__list"><a href="<?php echo esc_url(get_home_url()); ?>/contact">お問い合わせ</a></li>
        <li class="l-header-sp-menu__list"><a href="<?php echo esc_url(get_home_url()); ?>/news">最新情報</a></li>
        <li class="l-header-sp-menu__list"><a href="<?php echo esc_url(get_home_url()); ?>/privacy">プライバシーポリシー</a></li>
        <li class="l-header-sp-menu__list"><a href="<?php echo esc_url(get_home_url()); ?>/specified">特定商取引法</a></li>
      </ul>
    </div>
    <!-- /header -->

    <!-- main -->
    <main>
      <!-- TOPFV -->
       <div class="l-fv">
        <!-- pc版FV -->
         <div class="pc-on">
            <div class="l-fv__inner">
              <div class="l-fv__left">
                <div class="l-fv__top"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-fv-left-pc-01.png" alt="top-fv-left-pc-01"></div>
                <div class="l-fv__middle"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-fv-left-pc-02.png" alt="top-fv-left-pc-02"></div>
                <div class="l-fv__bottom" data-fade-in><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-fv-left-pc-03.png" alt="top-fv-left-pc-03"></div>
              </div>
              <div class="l-fv__right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-fv-right-pc01.png" alt="top-fv-right-pc01">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-fv-right-pc02.png" alt="top-fv-right-pc01">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-fv-right-pc03.png" alt="top-fv-right-pc01">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-fv-right-pc04.png" alt="top-fv-right-pc01">
              </div>
            </div>
         </div>
        <!-- SP版FV -->
         <div class="sp-on">
          <div class="l-fv__sp">
            <div class="l-fv__sp__imgs">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-fv-sp-01.png" alt="top-fv-sp-01" class="l-fv__sp__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-fv-sp-02.png" alt="top-fv-sp-02" class="l-fv__sp__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-fv-sp-03.png" alt="top-fv-sp-03" class="l-fv__sp__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-fv-sp-04.png" alt="top-fv-sp-04" class="l-fv__sp__img">
            </div>
          </div>
         </div>
       </div>
      <!-- /TOPFV -->

      <!-- 技術で空気を繋ぐ -->
       <section class="l-top-about">
        <div class="l-top-about__bg"></div>
        <h2 class="c-top-title l-top-about__title" data-fadeIn>
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-title-01.png" alt="title" class="c-top-title__en"> -->
          <span class="c-top-title__en">About Us</span>
          <span class="c-top-title__ja">技術で空気を繋ぐ</span>
        </h2>
        <p class="l-top-about__catch" data-fadeIn>ダクトのパイオニアとして<br>
          従事してきた我々の使命</p>
        <p class="l-top-about__text" data-fadeIn>有限会社オーディーは平成13年に創業し長きにわたってダクトを通じ、<br>
          日本の空気を技術で守ってまいりました。<br>
          経験に基づく豊富な知識と技術で安全で高品質な施工はもちろん、<br>
          お客様のご希望に沿った最適なダクト工法のご提案と設置を行なっています。<br>
          技術の踏襲のみならず、最新技術の知識の構築により<br>
          未来へ繋ぐダクトを目指しダクトで空気を変える、未来へ繋ぐ。<br>
          このスローガンを掲げ、お客様のご要望に全力でお応えしていきます。</p>
        <a href="<?php echo esc_url(get_home_url()); ?>/company" class="c-button top-button">会社概要をもっと見る</a>
       </section>
      <!-- /技術で空気を繋ぐ -->

      <!-- 最新情報 -->
       <section class="l-top-news">
        <div class="l-top-news__flex">
          <!-- タイトルなど -->
          <div class="l-top-news__left">
            <h2 class="c-top-title l-top-news__title" data-fadeIn>
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-title-02.png" alt="title" class="c-top-title__en"> -->
              <span class="c-top-title__en">News</span>
              <span class="c-top-title__ja">最新情報</span>
            </h2>
            <div class="pc-on">
              <a href="" class="c-button top-button">最新情報一覧へ</a>
            </div>
          </div>
          <!-- 最新情報一覧 -->
           <div class="l-top-news__right">
            <div class="l-top-news__list" data-fadeIn>
              <!-- ニュース -->
              <a href="#" class="l-top-news__item">
                <p class="l-top-news__date">2024.04.01</p>
                <p class="l-top-news__text">最新情報タイトルが入ります</p>
              </a><!-- ニュース -->
              <!-- ニュース -->
              <a href="#" class="l-top-news__item">
                <p class="l-top-news__date">2024.04.01</p>
                <p class="l-top-news__text">最新情報タイトルが入ります</p>
              </a><!-- ニュース -->
              <!-- ニュース -->
              <a href="#" class="l-top-news__item">
                <p class="l-top-news__date">2024.04.01</p>
                <p class="l-top-news__text">最新情報タイトルが入ります</p>
              </a><!-- ニュース -->
            </div>
            <div class="sp-on">
              <a href="<?php echo esc_url(get_home_url()); ?>/news" class="c-button top-button">最新情報一覧へ</a>
            </div>
           </div>
        </div>
       </section>
      <!-- /最新情報 -->

      <!-- 事業内容 -->
       <section class="l-top-business">
        <h2 class="c-top-title l-top-business__title" data-fadeIn>
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-title-03.png" alt="title" class="c-top-title__en"> -->
          <span class="c-top-title__en">Business</span>
          <span class="c-top-title__ja">事業内容</span>
        </h2>
        <!-- 事業案内 -->
        <div class="l-top-business__flex">
          <!-- タイトルなど -->
          <div class="l-top-business__left" data-fadeIn>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-business-01.png" alt="ダクト">
          </div>
          <!-- 事業案内 -->
           <div class="l-top-business__right" data-fadeIn>
            <p class="l-top-business__information">事業案内</p>
            <p class="l-top-business__text">当社では、主なダクトとしてシェアのある排気・換気ダクト、空調ダクト、厨房排気ダクト、排煙ダクトの全てのダクトの施工を行なっております。<br>
              建築物に合わせた最適なダクトの施工をご提案いたします。</p>
           </div>
        </div>
        <!-- ダクト一覧 -->
        <div class="l-top-business__inner">
          <!-- コンテンツ -->
          <div class="l-top-business__content" data-fadeIn>
            <!-- 画像 -->
            <div class="l-top-business__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-business-02.png" alt=""></div>
            <!-- コンテンツ -->
            <div class="l-top-business__desc">
              <p class="l-top-business__name">排気・換気ダクト</p>      
            </div>
          </div><!-- /コンテンツ -->
          
          <!-- コンテンツ -->
          <div class="l-top-business__content" data-fadeIn>
            <!-- 画像 -->
            <div class="l-top-business__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-business-03.png" alt=""></div>
            <!-- コンテンツ -->
            <div class="l-top-business__desc">
              <p class="l-top-business__name">空調ダクト<br><span class="l-top-business__name__little">ビル空調ダクト</span></p>
            </div>
          </div><!-- /コンテンツ -->
          
          <!-- コンテンツ -->
          <div class="l-top-business__content" data-fadeIn>
            <!-- 画像 -->
            <div class="l-top-business__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-business-04.png" alt=""></div>
            <!-- コンテンツ -->
            <div class="l-top-business__desc">
              <p class="l-top-business__name">厨房排気ダクト</p>
            </div>
          </div><!-- /コンテンツ -->
          
          <!-- コンテンツ -->
          <div class="l-top-business__content" data-fadeIn>
            <!-- 画像 -->
            <div class="l-top-business__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-business-05.png" alt=""></div>
            <!-- コンテンツ -->
            <div class="l-top-business__desc">
              <p class="l-top-business__name">排煙ダクト</p>
            </div>
          </div><!-- /コンテンツ -->
  
        </div>
        
        <a href="<?php echo esc_url(get_home_url()); ?>/works" class="c-button top-button">事業内容をもっと見る</a>
       </section>
      <!-- /事業内容 -->

      <!-- 採用情報 -->
       <section class="l-top-recruit">
        <h2 class="c-top-title l-top-recruit__title" data-fadeIn>
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-title-04.png" alt="title" class="c-top-title__en"> -->
          <span class="c-top-title__en">Recruit</span>
          <span class="c-top-title__ja">採用情報</span>
        </h2>
        <!-- 採用情報 -->
        <div class="l-top-recruit__flex">
          <div class="l-top-recruit__left" data-fadeIn>
            <p class="l-top-recruit__text">有限会社オーディーでは我々とともに働いてくれる方を随時募集しています。空調設備に興味のある方、資格経験を活かしたい方を経験者、未経験者問わず募集しております。<br>
              「職人の世界は厳しい」そんなイメージをなくしたい、その思いで創業以来アットホームで風通しの良い職場環境を目指してきました。<br>
              まず一度、ご来社ください。きっと楽しい職場であることが伝わるはずです。
              </p>
          </div>
           <div class="l-top-recruit__right" data-fadeIn>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/img-recruit.png" alt="採用情報">
           </div>
        </div>
        
        <a href="<?php echo esc_url(get_home_url()); ?>/recruit" class="c-button top-button">採用情報をもっと見る</a>
       </section>
      <!-- /採用情報 -->

      <!-- 社員インタビュー -->
       <section class="l-top-interview">
        <h2 class="c-top-title l-top-interview__title" data-fadeIn>
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-title-05.png" alt="title" class="c-top-title__en"> -->
          <span class="c-top-title__en">Interview</span>
          <span class="c-top-title__ja">社員インタビュー</span>
        </h2>
        
        <!-- 集合写真 -->
        <div class="l-top-interview__assembe pc-on" data-fadeIn>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-interview-01.png" alt="集合写真">
        </div>

        <!-- それぞれのインタビュー -->
        <div class="l-top-interview__contents">
          <!-- コンテンツ -->
          <div class="l-top-interview__content" data-fadeIn>
            <!-- 画像 -->
            <div class="l-top-interview__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-interview-02.png" alt="社員"></div>
            <!-- コンテンツ -->
            <div class="l-top-interview__desc">
              <p class="l-top-interview__post">主任</p>
              <p class="l-top-interview__name">吉田優(40代)</p>      
              <p class="l-top-interview__text">15年前より有限会社オーディーでダクトの施工、現場管理を行なっています。<br>
                前職ではダクトとは関係のない職種で親方と2人きりの職場でしたが有限会社オーディーに入職後は風通しが良く技術の習得の際にも疑問を疑問のまま残さずにいれる様、質問しやすい空気作りを心がけています。<br>
                オーディーの一員として僕たちの会社の風通しの良さやアットホームさをこれからも受け継いでいきます。社員同士の仲もよい会社です。ぜひ僕たちと一緒に楽しく働いてくれる方をお持ちしています。<br>
                <span class="year">(※2024年時の勤務年数)</span></p>      
            </div>
          </div><!-- /コンテンツ -->
          
          <!-- コンテンツ -->
          <div class="l-top-interview__content" data-fadeIn>
            <!-- 画像 -->
            <div class="l-top-interview__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-interview-03.png" alt="社員"></div>
            <!-- コンテンツ -->
            <div class="l-top-interview__desc">
              <p class="l-top-interview__post">取締役</p>
              <p class="l-top-interview__name">落合卓也(30代)</p>      
              <p class="l-top-interview__text">長年ダクトと共に生きてきた祖父、父の元で生まれた僕にとって幼少期から共に過ごしてきたと言っても過言ではないほど僕の人生にとってダクトは大切な一部です。ダクトでこれからも技術を守り、繋げていく仲間を募集しています。職人というと厳しいイメージがあるかもしれませんが、安全面に関しては質の高い技術と共に従業員全員の安全を守るため細心の注意を払い施工しプライベートや現場の雰囲気は間違いなく業界で一番！<br>
                アットホームで楽しく働いていただける自信があります。皆さんのご応募楽しみにお待ちしています。
                </p>   
            </div>
          </div><!-- /コンテンツ -->
          
          <!-- コンテンツ -->
          <div class="l-top-interview__content" data-fadeIn>
            <!-- 画像 -->
            <div class="l-top-interview__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-interview-04.png" alt="社員"></div>
            <!-- コンテンツ -->
            <div class="l-top-interview__desc">
              <p class="l-top-interview__post">職長</p>
              <p class="l-top-interview__name">田口茂夫(50代)</p>      
              <p class="l-top-interview__text">ダクトの世界に入ったきっかけはものづくりが好きで自分の技術で生活を支えたい、そんな思いでした。有限会社オーディーでは、施工前の打ち合わせの際にお客様のご要望を伺い、最適なダクトの設計、施工のご提案を丁寧に行なっているためご要望に最適な施工のご提案と施工後、良い状態で長くお使いいただいている姿を見ると職人としてとてもやりがいを感じます。<br>
                未経験の方も募集していますのでぜひ、僕達と一緒に楽しくダクトの魅力を繋いでいけるよう全力でサポートします！</p>   
            </div>
          </div><!-- /コンテンツ -->

        </div>
        <!-- エントリーボタン -->
        <a href="<?php echo esc_url(get_home_url()); ?>/contact" class="c-button entry-button">応募・エントリーに進む</a>
       </section>
      <!-- /社員インタビュー -->

      <!-- お問い合わせ -->
       <section class="l-top-contact">
        <div class="l-top-contact__flex">
          <!-- タイトルなど -->
          <div class="l-top-contact__left">
            <h2 class="c-top-title l-top-contact__title" data-fadeIn>
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/top-title-06.png" alt="title" class="c-top-title__en"> -->
              <span class="c-top-title__en">Contact</span>
              <span class="c-top-title__ja">お問い合わせ</span>
            </h2>
            <p class="l-top-contact__text" data-fadeIn>ダクトのこと、施工のことなどのご相談は、お気軽にお問い合わせください。採用に関してのお問い合わせもお待ちしております。</p>
          </div>
          <!-- お問い合わせボタン -->
           <div class="l-top-contact__right">
            <a href="<?php echo esc_url(get_home_url()); ?>/contact" class="c-button top-button">お問い合わせはこちら</a>
           </div>
        </div>
       </section>
      <!-- /お問い合わせ -->


    </main>
    <!-- /main -->

    <!-- footer -->
    <?php get_footer(); ?>