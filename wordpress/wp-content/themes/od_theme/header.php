<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    
    <!-- style.css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <title>有限会社オーディー</title>
</head>
<body>
  <!-- header -->
  <header class="l-header fixed">
    <div class="l-header__inner">
      <h1 class="l-header__logo white-logo"><a href="<?php echo esc_url(get_home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-od-white.png" alt="logo"></a></h1>
      <h1 class="l-header__logo black-logo"><a href="<?php echo esc_url(get_home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-od-black.png" alt="logo"></a></h1>
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