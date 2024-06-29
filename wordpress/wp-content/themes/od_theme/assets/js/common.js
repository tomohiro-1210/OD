// headerのハンバーガーメニュー
$(".l-header__hamburger__inner").click(function () {
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
    var kv = $('.l-kv'); //下層PのFV
    var kvOffsetTop = kv.outerHeight();

    var worksTOP = $('.p-works__top');
    var worksOffsetTop = worksTOP.outerHeight();

    // KVと事業案内の高さを足す
    var worksHeight = kvOffsetTop + worksOffsetTop + 160;

    $(window).on('scroll', function() {
        var kvscrollTop = $(this).scrollTop();
    
        // 下層ページのロゴ切り替え
        if (kvscrollTop > kvOffsetTop ) {
            whiteLogo.addClass('hide');
            blackLogo.addClass('show');

            // スクロールがKVと事業案内の高さを超えた時に発動
            if(kvscrollTop >= worksHeight){
                whiteLogo.removeClass('hide');
                blackLogo.removeClass('show');
            }
        } else {
            whiteLogo.removeClass('hide');
            blackLogo.removeClass('show');
        }
    });
});