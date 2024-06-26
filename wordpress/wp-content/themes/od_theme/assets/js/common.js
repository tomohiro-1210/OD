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
    var fvOffsetTop = fv.offset().top; // .l-fvの上端位置
    var fvHeight = fv.outerHeight(); // .l-fvの高さ

    console.log(fvOffsetTop);

    $(window).on('scroll', function() {
        var scrollTop = $(this).scrollTop();

        // 下層ページのロゴ切り替え
        if (scrollTop > kvOffsetTop) {
            whiteLogo.addClass('hide');
            blackLogo.addClass('show');
        } else {
            whiteLogo.removeClass('hide');
            blackLogo.removeClass('show');
        }

        // TOPページのロゴ切り替え
        if (scrollTop >= fvOffsetTop && scrollTop < (fvOffsetTop + fvHeight)) {
            whiteLogo.removeClass('hide');
            blackLogo.removeClass('show');
        } else {
            whiteLogo.addClass('hide');
            blackLogo.addClass('show');
        }
    });
});

//   scrolldown
document.getElementById('scrolldown__arrow').addEventListener('click', function() {
    var element = document.querySelector('.animated-element');
    element.classList.toggle('move-up');
});