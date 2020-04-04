$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('.navbar-custom').addClass('navbar-fixed');
        }
        if ($(window).scrollTop() < 100) {
            $('.navbar-custom').removeClass('navbar-fixed');
        }
    });

    // var current_lang="." + Cookies.get('lang');

    //    if (typeof Cookies.get('lang') === 'undefined'){
    //         Cookies.set('lang', 'np', { expires: 1 });
    //         var current_languae= Cookies.get('lang');
    //         $('#'+current_languae).addClass('current');
    //     } else {
    //         var current_languae= Cookies.get('lang');
    //         $('#'+current_languae).addClass('current');
    //     }
    $('.language button.current').on('click', function () {
        var lang = $(this).attr("data-lang");
        console.log(lang);
        Cookies.remove('lang');
        Cookies.set('lang', lang, {
            expires: 1
        });
        location.reload();

    });



    $('.menu_ham').on('click', function () {
        $('.menu_list_mobile').toggleClass('show');
    });

    // $("#slideshow > div:gt(0)").hide();
    // setInterval(function () {
    //     $('#slideshow > div:first')
    //         .fadeOut(2000)
    //         .next()
    //         .fadeIn(2000)
    //         .end()
    //         .appendTo('#slideshow');
    // }, 5000);

    $('.grid .product').click(function () {
        if ($('body').hasClass('overflow_hidden')) {
            $('body').removeClass('overflow_hidden');
        }
        $('body').addClass('overflow_hidden');
    })

    $('.details__close').click(function () {
        $('body').removeClass('overflow_hidden');
    });

    // $('.youtube_popup').popup({
    //     types: {
    //         youtube: function (content, callback) {
    //             content = '<iframe width="420" height="315" src="' + content + '" frameborder="0" allowfullscreen></iframe>';
    //             // Don't forget to call the callback!
    //             callback.call(this, content);
    //         }
    //     },
    //     width: 420,
    //     height: 315
    // });

    $('.card-header h5 a').click(function () {
        var className = $(this).attr("class");
        $('.collapse').removeClass('in');
        var id_class = '#' + className;
        console.log(id_class);
        $(id_class).addClass('in');
    });


});