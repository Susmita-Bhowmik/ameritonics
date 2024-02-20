$(document).ready(function () {

    $(".pull_mob_nav").click(function () {
        $(".nav_list").slideToggle("slow");
    });
    $(window).resize(function () {
        if ($(this).width() > 586) {
            $(".nav_list").removeAttr("style")
        }
    });

    $(".banner_main_slider").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 586,
                settings: {
                    arrows: false
                },
            },
        ],
    });

    $(".welcome_slider").slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
        rows: 2,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2,
                    adaptiveHeight: true,
                    rows: false,
                },
            },
        ],
    });

    $(".shopnow_slider_main").slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    adaptiveHeight: true,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    adaptiveHeight: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2,
                    adaptiveHeight: true,
                },
            },
        ],
    });
    $(".slick-prev").click(function () {
        $(".people_also_main_slider").slick("slickPrev");
    });

    $(".slick-next").click(function () {
        $(".people_also_main_slider").slick("slickNext");
    });
    $(".slick-prev").addClass("slick-disabled");
    $(".people_also_main_slider").on("afterChange", function () {
        if ($(".slick-prev").hasClass("slick-disabled")) {
            $(".slick-prev").addClass("slick-disabled");
        } else {
            $(".slick-prev").removeClass("slick-disabled");
        }
        if ($(".slick-next").hasClass("slick-disabled")) {
            $(".slick-next").addClass("slick-disabled");
        } else {
            $(".slick-next").removeClass("slick-disabled");
        }
    });

    $(".abc_slider_main").slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
    });

    $(".people_also_main_slider").slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    adaptiveHeight: true,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2,
                    adaptiveHeight: true,
                },
            },
        ],
    });
    $(".slick-prev").click(function () {
        $(".shopnow_slider_main").slick("slickPrev");
    });

    $(".slick-next").click(function () {
        $(".shopnow_slider_main").slick("slickNext");
    });
    $(".slick-prev").addClass("slick-disabled");
    $(".shopnow_slider_main").on("afterChange", function () {
        if ($(".slick-prev").hasClass("slick-disabled")) {
            $(".slick-prev").addClass("slick-disabled");
        } else {
            $(".slick-prev").removeClass("slick-disabled");
        }
        if ($(".slick-next").hasClass("slick-disabled")) {
            $(".slick-next").addClass("slick-disabled");
        } else {
            $(".slick-next").removeClass("slick-disabled");
        }
    });

    $(".product_dtl_main_slider").slick({
        slidesToShow: 1,
        slidesToScroll: 2,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: false,
        asNavFor: '.product_dtl_bottom_slider',
    });

    $(".product_dtl_bottom_slider").slick({
        slidesToShow: 3,
        slidesToScroll: 2,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        arrows: true,
        asNavFor: '.product_dtl_main_slider',
        focusOnSelect: true,
    });

});

const listingDown = document.querySelectorAll(".listing_catagori_side .product_heading h6");
const listingClass = document.querySelectorAll(".listing_catagori_side .drop_down_item .each_wapper");

Array.from(listingDown).forEach((list, index) => {
    list.addEventListener("click", (event) => {
        event.stopPropagation();
        listingClass.forEach(item => item.classList.remove("active"));
        listingClass[index].classList.toggle("active");
    });
});

document.addEventListener("click", () => {
    listingClass.forEach(item => item.classList.remove("active"));
});


document.addEventListener("DOMContentLoaded", function () {
    var togglePasswords = document.querySelectorAll(".icon_eye");

    togglePasswords.forEach(function (togglePassword) {
        var passwordField = togglePassword.previousElementSibling;

        togglePassword.addEventListener("click", function () {
            togglePasswordVisibility(passwordField, togglePassword);
        });
    });
});

function togglePasswordVisibility(passwordField, togglePassword) {
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
    togglePassword.classList.toggle("active");
}