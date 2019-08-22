jQuery(document).ready(function ($) {
    $('#nav-about').click(function () {
        $('.nav-link').removeClass('active');
        $('#nav-about').addClass('active');
    })
    $('#nav-contact').click(function () {
        $('.nav-link').removeClass('active');
        $('#nav-contact').addClass('active');
    })

    $(window).resize(function () {
        if ($(window).width() < 768) {
            $('.project-list .back').removeClass('d-none');
            $('.project-list .bg-color').removeClass('d-none');
        } else {
            $('.project-list .back').addClass('d-none');
            $('.project-list .bg-color').addClass('d-none');

            $('.project-list .inner-content').mouseenter(function () {
                $(this).children('.back').removeClass('d-none');
                $(this).children('.bg-color').removeClass('d-none');
            })
            $('.project-list .inner-content').mouseleave(function () {
                $(this).children('.back').addClass('d-none');
                $(this).children('.bg-color').addClass('d-none');
            })
        }
    })

    if ($(window).width() < 768) {
        $('.project-list .back').removeClass('d-none');
        $('.project-list .bg-color').removeClass('d-none');
    } else {
        $('.project-list .inner-content').mouseenter(function () {
            $(this).children('.back').removeClass('d-none');
            $(this).children('.bg-color').removeClass('d-none');
        })
        $('.project-list .inner-content').mouseleave(function () {
            $(this).children('.back').addClass('d-none');
            $(this).children('.bg-color').addClass('d-none');
        })
    }

    // Wrap every letter in a span
    $('.ml11 .letters').each(function () {
        $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
    });

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml11 .line',
            scaleY: [0, 1],
            opacity: [0.5, 1],
            easing: "easeOutExpo",
            duration: 700
        })
        .add({
            targets: '.ml11 .line',
            translateX: [0, $(".ml11 .letters").width()],
            easing: "easeOutExpo",
            duration: 700,
            delay: 100
        }).add({
            targets: '.ml11 .letter',
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=775',
            delay: function (el, i) {
                return 34 * (i + 1)
            }
        }).add({
            targets: '.ml11',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 5000
        });

    lightbox.option({
        'alwaysShowNavOnTouchDevices': true,
        'resizeDuration': 200,
        'positionFromTop': 20,
        'wrapAround': true,
    })

    $(".row-style .row:nth-child(even)").css("flex-direction", "row-reverse");


    $('.navbar-nav>li>a').hover(function () {
        $(this).toggleClass("animated swing");
    });
    $('.navbar-nav .dropdown-item').hover(function () {
        $(this).toggleClass("animated pulse");
    });


});
