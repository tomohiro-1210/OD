// headerのハンバーガーメニュー
$(".l-header__hamburger").click(function () {
    $(this).toggleClass('open');
    $(".l-header-sp-menu").toggleClass('open');
    $(".l-header-sp-menu").toggleClass('hide');
    $(".l-header-menu-logo").toggleClass('open');
    $(".l-header-display-logo").toggleClass('hide');

});

// フェードインのアニメーション
$(function() {
    // ウィンドウが読み込まれた時にコンテンツをスライドインする
    $('.l-fv__top').addClass('show');
    $('.l-fv__middle').addClass('show');
    $('.l-fv__bottom').addClass('show');
    $('.l-fv__right').addClass('show');
});

// スクロールしたときのフェードイン
$(window).on("scroll", function() {
    //フェードイン
    $('[data-fadeIn]').each(function(index, el) {
        if( $(window).scrollTop() > ( $(el).offset().top - $(window).height()) ){
            $(el).addClass('show');
        }
    });
    $('[data-leftIn]').each(function(index, el) {
        if( $(window).scrollTop() > ( $(el).offset().top - $(window).height()) ){
            $(el).addClass('show');
        }
    });
    $('[data-rightIn]').each(function(index, el) {
        if( $(window).scrollTop() > ( $(el).offset().top - $(window).height()) ){
            $(el).addClass('show');
        }
    });
});


//   fvのスライダー
$(function () {
    // PC版
    $('.l-fv__right').slick({
        fade: true,
        autoplay: true,
        autoplaySpeed: 2500,
        speed: 1000,
        dots: false,
        arrows: false,
    });
    
    // SP版
    $('.l-fv__sp__imgs').slick({
        fade: true,
        autoplay: true,
        autoplaySpeed: 2500,
        dots: false,
        arrows: false,
    });
  });

// ロゴの切り替え
$(document).ready(function() {
    const whiteLogo = $('.white-logo');
    const blackLogo = $('.black-logo');
    var kv = $('.l-kv'); // 対象の要素
    var fv = $('.l-fv'); // 対象の要素
    var kvOffsetTop = kv.outerHeight();
    var fvOffsetTop = fv.outerHeight();

    $(window).on('scroll', function() {
        var scrollTop = $(this).scrollTop();

        if (scrollTop > kvOffsetTop || scrollTop > fvOffsetTop) {
            whiteLogo.addClass('hide');
            blackLogo.addClass('show');
        } else {
            whiteLogo.removeClass('hide');
            blackLogo.removeClass('show');
        }
    });
});

//テキストのカウントアップ+バーの設定
var bar = new ProgressBar.Line(percent, {//id名を指定
    strokeWidth: 0,//進捗ゲージの太さ
    duration: 1000,//時間指定(1000＝1秒)
    trailWidth: 0,//線の太さ
    text: {//テキストの形状を直接指定 
      style: {//天地中央に配置
        color:'#f9f9f9',
      },
      autoStyleContainer: false //自動付与のスタイルを切る
    },
    step: function(state, bar) {
      bar.setText(Math.round(bar.value() * 100) + ' %'); //テキストの数値
    }
  });
  //アニメーションスタート
  bar.animate(0.5, function () {//バーを描画する割合を指定します 1.0 なら100%まで描画します
    $("#loading").delay(500).fadeOut(500);//アニメーションが終わったら#splashエリアをフェードアウト
  }); 

//   scrolldown
document.getElementById('scrolldown__arrow').addEventListener('click', function() {
    var element = document.querySelector('.animated-element');
    element.classList.toggle('move-up');
});