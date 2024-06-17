// headerのハンバーガーメニュー
$(".l-header__hamburger").click(function () {
    $(this).toggleClass('open');
    $(".l-header-sp-menu").toggleClass('open');
});

// フェードインのアニメーション
$(window).on("scroll", function() {
    //フェードイン
    $('[data-fadeIn]').each(function(index, el) {
        if( $(window).scrollTop() > ( $(el).offset().top - 100 ) ){
            $(el).addClass('is-over');
        }
    });
    $('[data-leftIn]').each(function(index, el) {
        if( $(window).scrollTop() > ( $(el).offset().top - 100 ) ){
            $(el).addClass('is-over');
        }
    });
    $('[data-rightIn]').each(function(index, el) {
        if( $(window).scrollTop() > ( $(el).offset().top - 100 ) ){
            $(el).addClass('is-over');
        }
    });
  });
