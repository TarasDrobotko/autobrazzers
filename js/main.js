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
  function getDropdownElem() {
    var clickedElement = $(event.target);
    var $dropdown = clickedElement.closest(".dropdown");
    return $dropdown;
  }

  $(".dropdown").on("click", function () {
    var $dropdown = getDropdownElem();
    var $dropDownContent = $dropdown.find(".dropdown__content");
    var $dropDownBtn = $dropdown.find(".dropdown__btn");
    $dropDownBtn.toggleClass("dropdown_open");
    $dropDownContent.toggle();

    $(".dropdown__link").on("click", function () {
      var value = $(this).attr("data-value");
      $(".dropdown__btn").text(value);
      if (value == "Рус") {
        $(".dropdown__btn").removeClass("dropdown_en").addClass("dropdown_rus");
      } else {
        $(".dropdown__btn").removeClass("dropdown_rus").addClass("dropdown_en");
      }
    });

    $(document).click(function (event) {
      $target = $(event.target);
      if (
        !$target.closest(".dropdown").length &&
        $dropDownContent.is(":visible")
      ) {
        $dropDownContent.hide();
        $dropDownBtn.toggleClass("dropdown_open");
      }
    });
  });

  /*  calculator selects */
  $(".columns-left-item__select").select2({
    minimumResultsForSearch: Infinity,
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

  // slick slider for reviews block
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

  /*  calculator block items toggle  */
  function toggleCarType($switch, $label) {
    $switch.toggleClass("car-type-item_switch-on");
    $label.toggleClass("car-type-item_lab-yellow");
  }

  function toggleCarTypeMain(clickElem, toggleCarType) {
    var $item = clickElem.closest(".car-type-item");
    var $label = $item.find(".car-type-item__label");
    var $switch = $item.find(".car-type-item__switch");
    var $radio = $item.find(".car-type-item_radio");
    $(".car-type-item_radio").prop("checked", false);
    $radio.prop("checked", !$radio.prop("checked"));

    toggleCarType($switch, $label);

    if ($(".car-type-item__label").hasClass("car-type-item_lab-yellow")) {
      $(".car-type-item__label").removeClass("car-type-item_lab-yellow");
      $(".car-type-item__switch").removeClass("car-type-item_switch-on");

      toggleCarType($switch, $label);
    }
    if (!$label.hasClass("car-type-item_lab-yellow")) {
      $radio.prop("checked", false);
    }
  }

  $(".car-type-item").on("click", function (event) {
    var clickElem;
    var clickElem = $(event.target);
    toggleCarTypeMain(clickElem, toggleCarType);

    if ($(event.target).is("label")) {
      var clickElem = $(event.target);
      toggleCarTypeMain(clickElem, toggleCarType);
    }
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

  // slick slider for benefits block
  $(".benefits-items").slick({
    // autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    dots: true,
    responsive: [
      {
        breakpoint: 1275,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          arrows: false,
        },
      },
      {
        breakpoint: 1160,
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

  /* rate slides toggle */
  $(".rate-item__slide-show").on("click", function () {
    $(this)
      .find(".rate-item__check-block")
      .toggleClass("rate-item__check-block_open");
    $(this).parent().parent().toggleClass("rate-item_item-height");
    $(this).parent().find(".rate-item__panel").slideToggle(1500);
  });

  // When the user clicks on the button, scroll to the top of the document
  $(".main-menu__menu-button").on("click", function () {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  });

  /* active calculator block fields */
  $(".columns-left-item").on("click", function (event) {
    $(".columns-left-item").removeClass("columns-left-item_active");
    $(".columns-left-item").removeClass("columns-left-item_select-arrow");
    var clickElem = $(event.target);
    $item = clickElem.closest(".columns-left-item");
    $item.toggleClass("columns-left-item_active");
    $dropdown = $(".select2-container--open");
    if (!$dropdown.is(":visible")) {
      $item.removeClass("columns-left-item_select-arrow");
    } else {
      $item.addClass("columns-left-item_select-arrow");
    }

    var $eventSelect = $item.find(".columns-left-item__select");

    $eventSelect.on("select2:close", function (e) {
      $item.removeClass("columns-left-item_select-arrow");
    });
  });
});
