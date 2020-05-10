$(document).ready(function ($) {
  /* phone mask */
  $('[type="tel"]').mask("+38 (099) 999-99-99");

  /* range slider */
  $(".order-by-year__range").ionRangeSlider({
    min: 2000,
    max: 2019,
    from: 2005,
    hide_min_max: true,
  });

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

  /*  price select */

  $(".price-select").select2({
    minimumResultsForSearch: Infinity,
  });

  const select = document.getElementById("select2-price-select-id-container")
    .parentNode;

  select.addEventListener("blur", () => selectEvent());
  select.addEventListener("click", () => selectEvent());

  selectEvent = () => {
    if (event.type == "click") {
      if (select.classList.contains("select2-selection--single_change")) {
        select.classList.remove("select2-selection--single_change");
      } else {
        select.classList.add("select2-selection--single_change");
      }
    }
    if (event.type == "blur") {
      select.classList.remove("select2-selection--single_change");
    }
  };

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
        breakpoint: 1275,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
          arrows: false,
        },
      },
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          arrows: false,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
        },
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        },
      },
    ],
  });

  /* car lighting */
  function toggleLighting($item, $switch, $floor) {
    $item.toggleClass("cars-item_lighting-bg");
    $switch.toggleClass("cars-item__switch_on");
    $floor.toggleClass("cars-item__floor_yellow");
  }

  $(".cars-item").on("click", function (event) {
    var clickedElement = $(event.target);
    var $item = clickedElement.closest(".cars-item");
    var $switch = $item.find(".cars-item__switch");
    var $floor = $item.find(".cars-item__floor");

    toggleLighting($item, $switch, $floor);

    if ($(".cars-item__floor").hasClass("cars-item__floor_yellow")) {
      $(".cars-item__floor").removeClass("cars-item__floor_yellow");
      $(".cars-item__switch").removeClass("cars-item__switch_on");
      $(".cars-item").removeClass("cars-item_lighting-bg");
      // write value in hidden input
      var val = $item.find(".cars-item__descr>strong").text();
      $(".order-by-year__hidden-input").val(val);

      toggleLighting($item, $switch, $floor);
    } else {
      $(".order-by-year__hidden-input").val("");
    }
  });

  /* rate slides toggle */
  $(".rate-item__slide-show").on("click", function () {
    $(this)
      .find(".rate-item__check-block")
      .toggleClass("rate-item__check-block_open");
    $(this).parent().parent().toggleClass("rate-item_item-height");
    $(this).parent().find(".rate-item__panel").slideToggle(1500);
  });
});
