$(document).ready(function () {
    var he = $('body').height();
    $('#menu').css('height', he + 'px');

    $('.descubre').click(function () {
        $('.contentvideo').fadeIn(10);
        $("html,body").animate({ scrollTop: $(".contentvideo").offset().top }, 1000);
    });
    $('.arranca').click(function () {
        $('.tiempo').fadeIn(10);
        $('.contentnew').fadeIn(10);
        $("html,body").animate({ scrollTop: $(".contentnew").offset().top }, 2000);
    });

    var url = window.location.href;   // Returns base URL (https://example.com)
    if (url.indexOf("#videoscaps") > -1) {
        $('.li1men').addClass("bordlimen");
    }
    if (url.indexOf("comparte-tu-historia") > -1) {
        $('.li2men').addClass("bordlimen");
    }
    if (url.indexOf("galeria-de-historias") > -1) {
        $('.li3men').addClass("bordlimen");
    }

});
