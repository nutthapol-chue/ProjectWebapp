/* Template: Evolo - StartUp HTML Landing Page Template
   Author: Inovatik
   Created: June 2019
   Description: Custom JS file
*/




var js_base_url = function(url) {
        //var base_urls = window.location.origin;
        //var host = window.location.host;
        //var pathArray = window.location.pathname.split('/');
        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
        if (url === undefined || url === null)
            url = '';
        return baseUrl + '/' + url;
    }
    /* Preloader */
$(window).on('load', function() {
    var preloaderFadeOutTime = 500;

    function hidePreloader() {
        var preloader = $('.spinner-wrapper');
        setTimeout(function() {
            preloader.fadeOut(preloaderFadeOutTime);
        }, 500);
    }
    hidePreloader();
});


/* Navbar Scripts */
// jQuery to collapse the navbar on scroll
$(window).on('scroll load', function() {
    if ($(".navbar").offset().top > 60) {
        $(".fixed-top").addClass("top-nav-collapse");
    } else {
        $(".fixed-top").removeClass("top-nav-collapse");
    }
});

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 600, 'easeInOutExpo');
        event.preventDefault();
    });
});

// closes the responsive menu on menu item click
$(".navbar-nav li a").on("click", function(event) {
    if (!$(this).parent().hasClass('dropdown'))
        $(".navbar-collapse").collapse('hide');
});


/* Image Slider - Swiper */
var imageSlider = new Swiper('.image-slider', {
    autoplay: {
        delay: 2000,
        disableOnInteraction: false
    },
    loop: true,
    spaceBetween: 30,
    slidesPerView: 5,
    breakpoints: {
        // when window is <= 580px
        580: {
            slidesPerView: 1,
            spaceBetween: 10
        },
        // when window is <= 768px
        768: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        // when window is <= 992px
        992: {
            slidesPerView: 3,
            spaceBetween: 20
        },
        // when window is <= 1200px
        1200: {
            slidesPerView: 4,
            spaceBetween: 20
        },

    }
});


/* Card Slider - Swiper */
var cardSlider = new Swiper('.card-slider', {
    autoplay: {
        delay: 4000,
        disableOnInteraction: false
    },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    }
});


/* Video Lightbox - Magnific Popup */
$('.popup-youtube, .popup-vimeo').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
    iframe: {
        patterns: {
            youtube: {
                index: 'youtube.com/',
                id: function(url) {
                    var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                    if (!m || !m[1]) return null;
                    return m[1];
                },
                src: 'https://www.youtube.com/embed/%id%?autoplay=1'
            },
            vimeo: {
                index: 'vimeo.com/',
                id: function(url) {
                    var m = url.match(/(https?:\/\/)?(www.)?(player.)?vimeo.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/);
                    if (!m || !m[5]) return null;
                    return m[5];
                },
                src: 'https://player.vimeo.com/video/%id%?autoplay=1'
            }
        }
    }
});


/* Lightbox - Magnific Popup */
$('.popup-with-move-anim').magnificPopup({
    type: 'inline',
    fixedContentPos: false,
    /* keep it false to avoid html tag shift with margin-right: 17px */
    fixedBgPos: true,
    overflowY: 'auto',
    closeBtnInside: true,
    preloader: false,
    midClick: true,
    removalDelay: 300,
    mainClass: 'my-mfp-slide-bottom'
});


/* Move Form Fields Label When User Types */
// for input and textarea fields
$("input, textarea").keyup(function() {
    if ($(this).val() != '') {
        $(this).addClass('notEmpty');
    } else {
        $(this).removeClass('notEmpty');
    }
});


/* Register Form */
$("#registerForm").validator().on("submit", function(event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        rformError();
        rsubmitMSG(false, "กรุณากรอกข้อมูลทุกช่อง !");
    } else {
        // everything looks good!
        event.preventDefault();
        rsubmitForm();
    }
});

function rsubmitForm() {
    // initiate variables with form content
    var fname = $("#c_fname").val();
    var lname = $("#c_lname").val();
    var email = $("#c_email").val();
    var c_pass = $("#c_pass").val();
    var re_c_pass = $("#re_c_pass").val();

    $.ajax({
        type: "POST",
        url: js_base_url('register'),
        data: "c_fname=" + fname + "&c_lname=" + lname + "&c_email=" + email + "&c_pass=" + c_pass + "&re_c_pass=" + re_c_pass,
        success: function(text) {
            if (text == "success") {
                rformSuccess();
            } else {
                rformError();
                rsubmitMSG(false, text);
            }
        }
    });
}

function rformSuccess() {
    $("#registerForm")[0].reset();
    rsubmitMSG(true, "สมัครสมาชิดสำเร็จ!");
    $("input").removeClass('notEmpty'); // resets the field label after submission
}

function rformError() {
    $("#registerForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass();
    });
}

function rsubmitMSG(valid, msg) {
    if (valid) {
        var msgClasses = "h3 text-center color-green tada animated";
    } else {
        var msgClasses = "h3 text-center color-red";
    }
    $("#regisSubmit").removeClass().addClass(msgClasses).text(msg);
}


/* Login Form */
$("#loginForm").validator().on("submit", function(event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        lformError();
        lsubmitMSG(false, "กรุณากรอกข้อมูลทุกช่อง !");
    } else {
        // everything looks good!
        event.preventDefault();
        lsubmitForm();
    }
});

function lsubmitForm() {
    // initiate variables with form content
    var email = $("#l_email").val();
    var pass = $("#l_pass").val();
    $.ajax({
        type: "POST",
        url: js_base_url('login'),
        data: "c_email=" + email + "&c_pass=" + pass,
        success: function(text) {
            if (text == "success") {
                // console.log(text)
                lformSuccess();
                setTimeout(function() {
                    window.location.reload(1);
                }, 3000);
            } else {
                // console.log(text)
                lformError();
                lsubmitMSG(false, text);
            }
        }
    });
}

function lformSuccess() {
    $("#loginForm")[0].reset();
    lsubmitMSG(true, "เข้าสู่ระบบสำเร็จ !");
    $("input").removeClass('notEmpty'); // resets the field label after submission
}

function lformError() {
    $("#loginForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass();
    });
}

function lsubmitMSG(valid, msg) {
    if (valid) {
        var msgClasses = "h3 text-center color-green tada animated";
    } else {
        var msgClasses = "h3 text-center color-red";
    }
    $("#loginSubmit").removeClass().addClass(msgClasses).text(msg);
}

/* Request Form */
$("#requestForm").validator().on("submit", function(event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        rqformError();
        rqsubmitMSG(false, "กรุณากรอกข้อมูลทุกช่อง !");
    } else {
        // everything looks good!
        event.preventDefault();
        rqsubmitForm();
    }
});

function rqsubmitForm() {
    // initiate variables with form content
    var title = $("#r_title").val();
    var name = $("#r_name").val();
    var email = $("#r_email").val();
    var phone = $("#r_phone").val();
    var datetime = $("#r_datetime").val();
    $.ajax({
        type: "POST",
        url: js_base_url('home/request'),
        data: "title=" + title + "&fullname=" + name + "&email=" + email + "&phone=" + phone + "&datetime=" + datetime,
        success: function(text) {
            if (text == "success") {
                // console.log(text)
                rqformSuccess();
            } else {
                // console.log(text)
                rqformError();
                rqsubmitMSG(false, text);
            }
        }
    });
}

function rqformSuccess() {
    $("#requestForm")[0].reset();
    rqsubmitMSG(true, "ส่งข้อมูลสำเร็จแล้วทางเราจะติดต่อกลับไป !");
    $("input").removeClass('notEmpty'); // resets the field label after submission
}

function rqformError() {
    $("#requestForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass();
    });
}

function rqsubmitMSG(valid, msg) {
    if (valid) {
        var msgClasses = "h3 text-center color-green tada animated";
    } else {
        var msgClasses = "h3 text-center color-red";
    }
    $("#rmsgSubmit").removeClass().addClass(msgClasses).text(msg);
}

/* Privacy Form */
$("#privacyForm").validator().on("submit", function(event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        pformError();
        psubmitMSG(false, "กรุณากรอกข้อมูลทุกช่อง !");
    } else {
        // everything looks good!
        event.preventDefault();
        psubmitForm();
    }
});

function psubmitForm() {
    // initiate variables with form content
    var name = $("#pname").val();
    var email = $("#pemail").val();
    var select = $("#pselect").val();
    var terms = $("#pterms").val();

    $.ajax({
        type: "POST",
        url: "php/privacyform-process.php",
        data: "name=" + name + "&email=" + email + "&select=" + select + "&terms=" + terms,
        success: function(text) {
            if (text == "success") {
                pformSuccess();
            } else {
                pformError();
                psubmitMSG(false, text);
            }
        }
    });
}

function pformSuccess() {
    $("#privacyForm")[0].reset();
    psubmitMSG(true, "Request Submitted!");
    $("input").removeClass('notEmpty'); // resets the field label after submission
}

function pformError() {
    $("#privacyForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $(this).removeClass();
    });
}

function psubmitMSG(valid, msg) {
    if (valid) {
        var msgClasses = "h3 text-center tada animated color-green";
    } else {
        var msgClasses = "h3 text-center color-red";
    }
    $("#pmsgSubmit").removeClass().addClass(msgClasses).text(msg);
}


/* Back To Top Button */
// create the back to top button
$('body').prepend('<a href="body" class="back-to-top page-scroll">Back to Top</a>');
var amountScrolled = 700;
$(window).scroll(function() {
    if ($(window).scrollTop() > amountScrolled) {
        $('a.back-to-top').fadeIn('500');
    } else {
        $('a.back-to-top').fadeOut('500');
    }
});


/* Removes Long Focus On Buttons */
$(".button, a, button").mouseup(function() {
    $(this).blur();
});
