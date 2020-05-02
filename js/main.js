$(document).ready(function () {
  /* phone mask */
  $('[type="tel"]').mask("+38 (099) 999-99-99");

  /* select settings */
  $(".dropdown__link").on("click", function () {
    var value = $(this).attr("data-value");
    $(".dropdown__btn").text(value);
    if (value == "Рус") {
      $(".dropdown__btn").removeClass("dropdown_en").addClass("dropdown_rus");
    } else {
      $(".dropdown__btn").removeClass("dropdown_rus").addClass("dropdown_en");
    }
    $(".dropdown__content").hide();
  });

  $(".dropdown").hover(function () {
    $(".dropdown__content").show();
    $(".dropdown__btn").toggleClass("dropdown_open");
  });
  $(".dropdown").mouseleave(function () {
    $(".dropdown__content").hide();
  });

  // main-menu horizontal submenu
  $("#main-menu li:first-child").on("click", function (e) {
    e.preventDefault;
    $(".menu-button").toggleClass("menu-button_active");
    $(this).toggleClass("main-menu__li_active");
    $(".main-menu-nested").toggleClass("main-menu-nested_active");
  });

  // slick slider
  $(".reviews-items").slick({
    // autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow: 3,
    slidesToScroll: 2,
    arrows: true,
    dots: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
