(function ($) {
    "use strict";
    /*------------------------------------------------------------------
    [Table of contents]
    -------------------------------------------------------------------*/
    /*
    0. preloader
    1. header search wrap 
    2. navigation
    3. select langauge
    4. count down
    5. how work video
    6. chart
    7. Side Offset cart menu open
    8. back to top
    9. client logo slider
    10. partciles dot on background
    11. wow init

     */

    /*==========================================================
				0. preloader close button	
	======================================================================*/
    $(window).on('load', function () {
        $('#preloader').addClass('loaded');
    });

    // preloader close
    $('.cencel-preloader').on('click', function (e) {
        e.preventDefault();
        if (!($('#preloader').hasClass('loaded'))) {
            $('#preloader').addClass('loaded');
        }
    })

    /*==========================================================
      header search wrap
      ======================================================================*/

    if ($(".search-wrap").length > 0) {
        var todg = true;
        $(".searchIcon").on("click", function (e) {
            e.preventDefault();
            if (todg) {
                $(".search-wrap").fadeIn("slow");
                todg = false;
            } else {
                $(".search-wrap").fadeOut("slow");
                todg = true;
            }
        });

        $(document).on('mouseup', function (e) {
            var container = $(".search-inner");

            if (!container.is(e.target) && container.has(e.target).length === 0) {
                $(".search-wrap").fadeOut("slow");
                todg = true;
            }

        });
    }


    /*==========================================================
     navigation
     ======================================================================*/
    if ($("#navigation1").length > 0) {
        $("#navigation1").navigation({
            effect: "fade",
            mobileBreakpoint: 992,
        });


        // menu scrolling

        if ($('.scrolls').length > 0) {
            $('.scrolls').on('click', function () {
                $('html, body').animate({
                    scrollTop: $(this.hash).offset().top - 100
                }, 1000);
                return false;
            });
        }

    }



    /*==========================================================
     modal
     ======================================================================*/


    /*==========================================================
     counter down
   ======================================================================*/

    function xsCountDown() {
        var endTIme = new Date('2018-11-07');
        var nowTime = new Date();

        var timeLeft = endTIme - nowTime;
        var days = Math.floor(timeLeft / 1000 / 60 / 60 / 24);
        var hours = Math.floor((timeLeft / 1000 / 60 / 60) - (days * 24));
        var minuts = Math.floor((timeLeft / 1000 / 60) - (days * 24 * 60) - (hours * 60));
        var second = Math.floor((timeLeft / 1000) - (days * 24 * 60 * 60) - (hours * 60 * 60) - (minuts * 60));

        if (hours < "10") {
            hours = "0" + hours
        }
        if (minuts < "10") {
            minuts = "0" + minuts
        }
        if (second < "10") {
            second = "0" + second
        }

        $("#xs_days").html(days);
        $("#xs_hours").html(hours);
        $("#xs_minuts").html(minuts);
        $("#xs_second").html(second);
    }

    setInterval(function () {
        xsCountDown();

    }, 1000);

    /*==========================================================
             how work video
    ======================================================================*/
    $('.xs-video').magnificPopup({
        type: 'iframe',

    });


    /* ======================================================================
                          Chart 
    ======================================================================*/

    if ($('#myChart').length > 0) {
        var ctx = document.getElementById("myChart").getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["Airdrop/Bounty", "Marketing and Team", "Sale Drop ICO"],
                datasets: [{
                    data: [12.92, 3.75, 83.33],
                    backgroundColor: [
                        '#ae31d9',
                        '#f18b7e',
                        '#5db7fa',
                    ],
                    borderColor: [
                        '#02014c',
                        '#02014c',
                        '#56a7f9',
                    ],
                    borderWidth: 0,
                }]
            },
            options: {
                legend: {
                    display: false,
                }
            }
        });
    }

    /* Chart 2 */

    if ($('#myChartTwo').length > 0) {
        var ctxTwo = document.getElementById("myChartTwo").getContext('2d');
        var myChartTwo = new Chart(ctxTwo, {
            type: 'doughnut',
            data: {
                labels: ["Operational Cost", "Legal Operation", "Product Development", "Marketing and Lisiting"],
                datasets: [{
                    data: [5, 5, 40, 50],
                    backgroundColor: [
                        '#c13cbd',
                        '#4a8df8',
                        '#26d7e5',
                        '#ef7b7e'
                    ],
                    borderColor: [
                        '#02014c',
                        '#02014c',
                        '#56a7f9',
                        '#ef7b7e'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                legend: {
                    display: false,
                }
            }
        });
    }
    $().timelinr();

    /*==========================================================
           Side Offset cart menu open
        ======================================================================*/
    if ($('.navSidebar-button-reg').length > 0) {
        $('.navSidebar-button-reg').on('click', function (e) {
            $('#register').html('register');
            $('#referraldiv').css('display', 'block');
            $('#login').css('display', 'none');
            $('#register').css('display', 'block');
            $('#regtext').css('display', 'block');
            e.preventDefault();
            e.stopPropagation();
            $('.info-group').addClass('isActive');
        });
    }
    if ($('.navSidebar-button-log').length > 0) {
        $('.navSidebar-button-log').on('click', function (e) {
            $('#register').html('login');
            $('#referraldiv').css('display', 'none');
            $('#register').css('display', 'none');
            $('#login').css('display', 'block');
            $('#regtext').css('display', 'none');
            e.preventDefault();
            e.stopPropagation();
            $('.info-group').addClass('isActive');
        });
    }

    if ($('#register').length > 0) {
        $('#register').on('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            $('#noemail').css('display', 'none');
            $('#takenemail').css('display', 'none');
            $('#nopass').css('display', 'none');
            $('#noref').css('display', 'none');
            let email = $('#email').val();
            let password = $('#password').val();
            let referrer = $('#referral').val();
            if (/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)) {
                $('#noemail').css('display', 'none');
            } else if (!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email)) {
                $('#noemail').css('display', 'block');
            }
            if (password == '') {
                $('#nopass').css('display', 'block');
            } else if (!password === '') {
                $('#nopass').css('display', 'none');
            }
            if (/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email) && password !== '') {
                $('#register').html('Please Wait...');
                $.post('register.php', {
                        email: email,
                        password: password,
                        referrerCode: referrer
                    },
                    function (response) {
                        if (/taken/.test(response)) {
                            $('#alert').css('display', 'block');
                            $('#register').html('register');
                            $('#alertbox').html(`<strong>${response}</strong> Please try a different one.`);
                            setTimeout(() => {
                                $('#alert').css('display', 'none');
                            }, 2000);
                        } else if (/Unable/.test(response)) {
                            $('#alert').css('display', 'block');
                            $('#register').html('register');
                            $('#alertbox').html(`<strong>${response}</strong> Please try again.`);
                            setTimeout(() => {
                                $('#alert').css('display', 'none');
                            }, 2000);
                        } else if (/code/.test(response)) {
                            $('#register').html('register');
                            $('#noref').css('display', 'block');
                        } else if (/Success/.test(response)) {
                            $('#alert').css('display', 'block');
                            $('#alertbox').html('<strong>Successfully Registered!</strong>');
                            setTimeout(() => {
                                $('#alert').css('display', 'none');
                                $('#confirm').trigger('click', email)
                                $('#register').html('register');
                                $('.info-group').removeClass('isActive');
                            }, 1000);
                        } else {
                            $('#register').html('register');
                            $('#alert').css('display', 'block');
                            $('#alertbox').html('<strong>Unable to register new user!</strong> Please try again.');
                            setTimeout(() => {
                                $('#alert').css('display', 'none');
                            }, 1000);
                        }
                    });
            }
        });
    }
    $('#confirm').click((event, email) => {
        window.open(`confirmation.php?email=${email}`);
    });
    if ($('#login').length > 0) {
        $('#login').on('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            $('#login').html('Please Wait...');
            let email = $('#email').val();
            let password = $('#password').val();
            $.ajax({
                type: 'POST',
                url: 'login.php',
                data: {
                    email: email,
                    password: password
                },
                cache: false,
                success: function (response) {
                    if (/Success/.test(response)) {
                        $('#alert').css('display', 'block');
                        $('#alertbox').html(`<strong>${response}</strong>`);
                        setTimeout(() => {
                            $('#alert').css('display', 'none');
                            $('#conlog').trigger('click', email)
                            $('#login').html('login');
                            $('.info-group').removeClass('isActive');
                        }, 1000);
                    } else if (/Incorrect/.test(response)) {
                        $('#alert').css('display', 'block');
                        $('#alertbox').html(`<strong>${response}</strong>`);
                        setTimeout(() => {
                            $('#alert').css('display', 'none');
                            $('#login').html('login');
                            $('.info-group').removeClass('isActive');
                        }, 1000);
                    } else {
                        $('#login').html('login');
                    }
                }
            });
        });
    }
    $('#conlog').click((event, email) => {
        window.open(`dashboard.php?email=${email}`);
    })
    $('#contractbtn').click(() => {
        $('#contractinput').select();
        document.execCommand('copy');
        $('#alert').css('display', 'block');
        $('#alertbox').html(`<strong>Address copied!</strong>`);
        setTimeout(() => {
            $('#alert').css('display', 'none');
        }, 2000);
    })
    if ($('.close-side-widget').length > 0) {
        $('.close-side-widget').on('click', function (e) {
            e.preventDefault();
            $('.info-group').removeClass('isActive');
        });
    }
    $('.xs-overlay').on('click', function (e) {
        $('.info-group').removeClass('isActive');
        $('.cart-group').removeClass('isActive');
    });
    $('.xs-sidebar-widget').on('click', function (e) {
        e.stopPropagation();
    });

    /*==========================================================
         back to top
======================================================================*/

    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 4000) {
            $(".BackTo").fadeIn('slow');
        } else {
            $(".BackTo").fadeOut('slow');
        }

    });

    $("body, html").on("click", ".BackTo", function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 800);
    });

    if ($(window).width() > 767) {
        $(".BackTo").css('display', 'none');
    }

    /*==========================================================
           client logo slider
  ======================================================================*/
    if ($('#client-slider').length > 0) {
        var bannerSlider = $("#client-slider");
        bannerSlider.owlCarousel({
            items: 5,
            mouseDrag: true,
            touchDrag: true,
            dots: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            smartSpeed: 800,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 2,
                },
                // breakpoint from 480 up
                480: {
                    items: 2,
                },
                // breakpoint from 768 up
                768: {
                    items: 4,
                },
                991: {
                    items: 5,
                }
            }
        });
    }
    if ($('#client-slider1').length > 0) {
        var bannerSlider1 = $("#client-slider1");
        bannerSlider1.owlCarousel({
            items: 3,
            mouseDrag: true,
            touchDrag: true,
            dots: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,
            autoplayHoverPause: true,
            smartSpeed: 800,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 2,
                },
                // breakpoint from 480 up
                480: {
                    items: 2,
                },
                // breakpoint from 768 up
                768: {
                    items: 4,
                },
                991: {
                    items: 5,
                }
            }
        });
    }

    /*==========================================================
            particles dot on background
  ======================================================================*/
    $(window).on("load", function () {
        $("#particles-js").length && particlesJS("particles-js", {
            particles: {
                number: {
                    value: 28
                },
                color: {
                    value: ["#0182cc", "#00befa", "#0182cc"]
                },
                shape: {
                    type: "circle"
                },
                opacity: {
                    value: 1,
                    random: !1,
                    anim: {
                        enable: !1
                    }
                },
                size: {
                    value: 3,
                    random: !0,
                    anim: {
                        enable: !1
                    }
                },
                line_linked: {
                    enable: !1
                },
                move: {
                    enable: !0,
                    speed: 2,
                    direction: "none",
                    random: !0,
                    straight: !1,
                    out_mode: "out"
                }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: {
                        enable: !1
                    },
                    onclick: {
                        enable: !1
                    },
                    resize: !0
                }
            },
            retina_detect: !0
        })
    });


    /*=============================================================
    		wow animation init
    =========================================================================*/
    $(function () {
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true,
            scrollContainer: null,
        });
        wow.init();
    });


    /*=============================================================
			fixed header
	=========================================================================*/
    $(window).on('scroll', function () {
        /**Fixed header**/

        if ($(window).scrollTop() > 100) {
            $('.header').addClass('fixed-header animated fadeInDown');
        } else {
            $('.header').removeClass('fixed-header animated fadeInDown');
        }

        if ($(window).width() < 991) {
            $('.header').removeClass('fixed-header animated fadeInDown');
        }

    });



})(jQuery);