const bp = 768;
var winW;
var pc;
var sp;

winW = window.innerWidth;
pc = winW >= bp;
sp = winW < bp;

$(function() {

    var $root = $('html, body');

    $('a[href^="#"]').click(function() {
        var href = $.attr(this, 'href');
        $root.animate({
            scrollTop: $(href).offset().top
        }, 600, function () {
            window.location.hash = href;
        });

        return false;
    });


    $('header').removeClass("appear");
    $('.sd[data-s-cc27262c-98be-46a0-8258-63608496a4a9]').removeClass("appear");
    $('.sd[data-s-ab28e7da-39f4-4517-869b-c704025c74ec]').removeClass("appear");
    $('.sd[data-s-9fc0cedf-0606-4ef6-bcbb-c625e4536442]').removeClass("appear");
    $('.sd[data-s-9c5e4abf-2bf0-4c98-811f-857aa4a87651]').removeClass("appear");

    if(sp) {
        $('.sd[data-s-8d14541d-7ba0-43d5-b035-8d910602f9c1]').removeClass("appear");
        $('.sd[data-s-36b66597-e405-4f47-9830-58c025925d25]').removeClass("appear");
        $('.sd[data-s-b8fd6dae-436b-44b2-a7cd-685595f6d176]').removeClass("appear");
    }

    $(window).scroll(function (){
        slideAnime();
    });


    function slideAnime(){
        $('.sd.appear').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll >= elemPos - windowHeight){
                if($(this).hasClass("appear")===true) {
                    $(this).removeClass("appear");
                }
            }
        });

    }

    $('.wpcf7-submit').click(function () {

        let error = false;

        $('.wpcf7-validates-as-required').each(function(index) {
            if($(this).val() == ''){
                error = true;
            }
        });

        if(!error) {
            if(!$('.privacy_check').prop('checked')) {
                $('.wpcf7-not-valid-tip.check').show();
                return false;
            }else {
                return;
            }
        }
    });

    $('.menu_open, .design-canvas__modal a').click(function(){
       $('.design-canvas__modal').toggleClass('isNone');
    });

    // 送信完了時にモーダルを表示する(*3)
    document.addEventListener('wpcf7mailsent', function(e) {
        console.log('お問い合わせ送信完了');
        $("#wpcf7-modal").addClass('active');
    });

    $("#wpcf7-modal").click(function(){
        $("#wpcf7-modal").toggleClass('active');
    });

});
