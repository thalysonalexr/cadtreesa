$(document).ready(function() {

    function scrollPage(link, section) {

        var sectionTop = $(section).offset().top - $('header#myheader').height();

        $(link).click(function() {
            $('html, body').animate({
                scrollTop: sectionTop
            }, 500);
        });
    }

    function closeMenu() {
        if ($(window).width() < 768) {
            $('.nav-link').click(function(){
                $('.menu').slideUp();
            });
        }
    }

    var images = [
        'tree-bg1.jpg',
        'tree-bg2.jpg',
        'tree-bg3.jpg',
        'tree-bg4.jpg',
        'tree-bg5.jpg',
        'tree-bg6.jpg'
    ];

    var index = 0;
    var maxImages = images.length - 1;

    var bgExchange = setInterval(function() {
        var current = images[index];
        index = index == maxImages? 0: ++index;
        $('.banner').css('background-image', 'url('+$(location).attr('origin')+'/assets/images/'+current);
    }, 5000);


    $('.btn-menu').click(function(){
        if ($('.menu').is(':visible')){
            $('.menu').slideUp();
        } else {
            $('.menu').slideDown();
        }
    });

    $(window).resize(function() {
        closeMenu();
    });

    scrollPage('#link-tree',  '#tree');
    scrollPage('#link-about', '#about');
    scrollPage('#link-help', '#help');
    scrollPage('#link-who', '#who');
    scrollPage('#link-contact', '#contact');
    scrollPage('#link-email', '#contact');
    closeMenu();
});


