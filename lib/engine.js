/*
2010-2013, im@andreystarkov.ru
*/

$(window).load(function () {

    $('.news-block').corner();
    $("#footer-shadow").css({
        "width": $("body").width(),
        "position": "absolute",
        "top": $(document).height() - 100
    });

    $('#iview-timer').tooltip({
        title: 'Приостановить слайдшоу',
        html: 'Приостановить слайдшоу',
        placement: 'bottom'
    });

    $('.socials').tooltip({
        title: 'Поделиться'
    });

    $(".right-btns").hover(function () {
        $(this).animate({
            boxShadow: '0 0 15px rgba(255,255,255,0.7)'
        }, 600);

    }, function () {
        $(this).animate({
            boxShadow: '0 0 0 rgba(0,0,0,0)'
        }, 500);

    });

    $(".news-list-item").hover(function () {
        $(this).animate({
            boxShadow: '0px 3px 15px rgba(0,0,0,0.3)',
            backgroundColor: '#f0f0f0',
            bottom: '5px'
        }, 300);

    }, function () {
        $(this).animate({
            boxShadow: '0 0 0 rgba(0,0,0,0)',
            backgroundColor: 'transparent',
            bottom: '0px'
        }, 300);

    });
});


$(document).ready(function () {

    $('.tt').tooltip({
        placement: 'left'
    });

    $('#iview').iView({
        pauseTime: 7000,
        directionNav: false,
        controlNav: true,

        timerX: 940,
        controlNavHoverOpacity: 0,
        timer: '360Bar',
        // Timer style: "Pie", "360Bar" or "Bar"
        timerY: 20
    });


    var pre;

    $('.eng').css('opacity', 0.6).hover(function () {

        pre = $(this).attr("src");
        $(this).fadeTo("100", "1")
        $(this).attr("src", $(this).attr("src-hl"));

    }, function () {
        $(this).fadeTo("200", "0.6")
        $(this).attr("src", pre);
    });
});