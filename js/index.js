/*
	Load more content with jQuery - May 21, 2013
	(c) 2013 @ElmahdiMahmoud
*/   

$(function () {
    $("div.show2").slice(0, 2).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $("div.show2:hidden").slice(0, 2).slideDown();
        if ($("div.show2:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});

$(function () {
    $("div.show3").slice(0, 2).show();
    $("#loadMore2").on('click', function (e) {
        e.preventDefault();
        $("div.show3:hidden").slice(0, 2).slideDown();
        if ($("div.show3:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});

$(function () {
    $("div.show4").slice(0, 2).show();
    $("#loadMore3").on('click', function (e) {
        e.preventDefault();
        $("div.show4:hidden").slice(0, 2).slideDown();
        if ($("div.show4:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 1500);
    });
});

$('a[href=#top]').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 600);
    return false;
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.totop a').fadeIn();
    } else {
        $('.totop a').fadeOut();
    }
});

