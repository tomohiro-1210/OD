// headerのハンバーガーメニュー
$(".l-header__hamburger").click(function () {
    $(this).toggleClass('open');
    $(".l-header-sp-menu").toggleClass('open');
    $(".l-header-sp-menu").toggleClass('hide');

});

// フェードインのアニメーション
$(function() {
    // ウィンドウが読み込まれた時にコンテンツをスライドインする
    $('.l-fv__top').addClass('show');
    $('.l-fv__middle').addClass('show');
    $('.l-fv__bottom').addClass('show');
    $('.l-fv__right').addClass('show');
});


//   fvのスライダー
$(function () {
    // PC版
    $('.l-fv__right').slick({
        fade: true,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: false,
    });
    
    // SP版
    $('.l-fv__sp__imgs').slick({
        fade: true,
        autoplay: true,
        autoplaySpeed: 1500,
        dots: false,
        arrows: false,
    });
  });