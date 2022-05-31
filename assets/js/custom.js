$(document).ready(function () {
  // On DOM Ready

  // Notification Toggle on click
  $(".dropdown-parent").click(function (e) {
    e.stopPropagation();
    $(".dropdown-content:visible")
      .not($(this).find(".dropdown-content"))
      .slideUp();
    $(this).find(".dropdown-content").slideToggle(150);
  });

  // Notification close  on click outside
  $(document).click(function (e) {
    if (!$(e.target).closest(".dropdown-content").length) {
      $(".dropdown-content:visible").slideUp(150);
    }
  });

  $(".dropdown-content").click(function (e) {
    e.stopPropagation();
  });

  // Funnel Step Form Next Functionality
  $(".funnel_step-next-btn").click(function () {
    const activeForm = $("[data-step]:visible");
    const formStep = activeForm.attr("data-step");
    const nextFormStep = +formStep + 1;
    const totalSteps = $("[data-step]").length;

    //Replace next button with finish button
    if (nextFormStep == totalSteps) {
      $(".funnel_step-next-btn").hide();
      $(".finish-btn").show();
    } else {
      $(".funnel_step-next-btn").show();
      $(".finish-btn").hide();
    }

    //Change to next form
    activeForm.hide();
    $(`[data-step=${nextFormStep}]`).show();

    //Hide prev button on first form visible
    if (formStep + 1 == 1) {
      $(".funnel_step-prev-btn").hide();
    } else {
      $(".funnel_step-prev-btn").show();
    }
  });

  // Funnel Step Form Next Functionality
  $(".funnel_step-prev-btn").click(function () {
    const activeForm = $("[data-step]:visible");
    const formStep = activeForm.attr("data-step");
    const prevFormStep = +formStep - 1;
    const totalSteps = $("[data-step]").length;

    //Replace next button with finish button
    if (prevFormStep < totalSteps) {
      $(".funnel_step-next-btn").show();
      $(".finish-btn").hide();
    } else {
      $(".funnel_step-next-btn").hide();
      $(".finish-btn").show();
    }

    //Change to next form
    activeForm.hide();
    $(`[data-step=${prevFormStep}]`).show();

    // debugger

    //Hide prev button on first form visible
    if (prevFormStep == 1) {
      $(".funnel_step-prev-btn").hide();
    } else {
      $(".funnel_step-prev-btn").show();
    }
  });

  // Single producr slider

  $(".single-product_slider").slick({
    variableWidth: true,
    infinite: true,
    swipeToSlide: true,
    arrows: true,
    prevArrow:
      "<button type='button' class='slick_custom-arrows slick-prev'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick_custom-arrows slick-next'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
    asNavFor: ".single_product-gallery",
    centerMode:true,
    focusOnSelect: true,
    swipe:true
  });

  $(".single_product-gallery").slick({
    arrows: false,
  });

  // Single Product lightgallery
  lightGallery(document.querySelector(".single_product-gallery"), {
    thumbnail: true,
    plugins: [lgZoom, lgThumbnail],
    selector:document.querySelectorAll('.single_product-gallery .slick-slide:not(.slick-cloned) .single_product-gallery-item')
  });


  // special_offer-slider

  $('.special_offer-slider').slick({
    slidesToShow:4
  });
});
