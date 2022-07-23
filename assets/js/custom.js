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
    $("[data-funnel-step]").removeClass("funnel_step-active");
    $(`[data-funnel-step="${nextFormStep}"]`).addClass("funnel_step-active");

    //Hide prev button on first form visible
    if (formStep + 1 == 1) {
      $(".funnel_step-prev-btn").hide();
    } else {
      $(".funnel_step-prev-btn").show();
    }
  });

  // Funnel Step Form Prevoius Functionality
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
    $("[data-funnel-step]").removeClass("funnel_step-active");
    $(`[data-funnel-step="${prevFormStep}"]`).addClass("funnel_step-active");

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
    centerMode: true,
    focusOnSelect: true,
    swipe: true,
  });

  $(".single_product-gallery").slick({
    arrows: false,
  });

  // Single Product lightgallery
  lightGallery(document.querySelector(".single_product-gallery"), {
    thumbnail: true,
    plugins: [lgZoom, lgThumbnail],
    selector: document.querySelectorAll(
      ".single_product-gallery .slick-slide:not(.slick-cloned) .single_product-gallery-item"
    ),
  });

  // special_offer-slider
  $(".special_offer-slider").slick({
    slidesToShow: 4,
  });

  // FAQ Accordion
  $(".faq_title").click(function () {
    if ($(this).parents(".faq_item").hasClass("active")) {
      $(this).siblings(".faq_content").slideUp();
      $(this).parents(".faq_item").removeClass("active");
      return false;
    }

    $(".faq_item").removeClass("active");
    $(".faq_content").slideUp();

    $(this).siblings(".faq_content").slideDown();
    $(this).parents(".faq_item").addClass("active");
  });

  // testimonial_image-slider
  $(".testimonial_image-slider").slick({
    arrows: false,
    fade: true,
    swipe: false,
  });

  //Testimonial Quote slider
  $(".testimonial_quote-slider").slick({
    asNavFor: ".testimonial_image-slider",
    dots: true,
  });

  // Funnel Priority
  $(".sortable-table tbody").sortable({
    axis: "y",
  });

  //Modal Tabs
  $(".theme_tab-btn").click(function () {
    $(this)
      .parents(".theme_tabs-wrapper")
      .find(".theme_tab-btn")
      .removeClass("active");

    $(this).addClass("active");

    $(this)
      .parents(".theme_tabs-wrapper")
      .find(".theme_tab-content")
      .fadeOut(0);

    const targetElement = $(this).attr("data-target");

    $(`${targetElement}`).fadeIn(0);
  });

  //Modal tabs radio button select/Deselect all
  $('.theme_tab-content thead input[type="checkbox"]').change(function () {
    if ($(this).is(":checked")) {
      $(this)
        .parents(".theme_tabs-wrapper")
        .find('input[type="checkbox"]')
        .not($(this))
        .prop("checked", true);
    } else {
      $(this)
        .parents(".theme_tabs-wrapper")
        .find('input[type="checkbox"]')
        .not(this)
        .prop("checked", false);
    }
  });

  //Onboarding process
  $('.onboarding-step[data-step="1"] .theme_btn').click(function (e) {
    e.preventDefault();

    $(this).parents(".onboarding-step").hide();
    $('.onboarding-step[data-step="2"]').show();
  });

  $('.onboarding-step[data-step="2"] .theme_btn').click(function () {
    $(this).parents(".onboarding-step").hide();
    $('.onboarding-step[data-step="3"]').show();
  });

  // Faq delete
  $(".faq_done-list").on("click", ".theme_btn", function () {
    $(this).parents("li").slideUp(150);

    setTimeout(() => {
      $(this).parents("li").remove();

      if (!$(".faq_done-list ul li").length) {
        $(".faq_done-list").hide();
      } else {
        $(".faq_done-list").show();
      }
    }, 150);
  });

  // FAQ Add
  $(".faq_manage-lists-items form").submit(function (e) {
    e.preventDefault();

    const faqTitle = $("#faqName").val();
    const faqDescription = $("#faqDescription").val();

    if (!faqTitle.length) return;
    if (!faqDescription.length) return;

    if (!$(".faq_done-list").is(":visible")) {
      $(".faq_done-list").show();
    }

    const li = document.createElement("li");

    const faqItem = `
      <p>
        <b>${faqTitle}</b>
        ${faqDescription}
      </p>
      <button class="theme_btn theme_btn-primary ml-auto"><i class="fas fa-trash"></i></button>
    `;

    $(".faq_done-list ul").append(li);

    $(li).hide().slideUp().append(faqItem).slideDown(150);

    $("#faqName").val("");
    $("#faqName").focus();
    $("#faqDescription").val("");
  });

  // Testimonial delete
  $(".testimonial_edit-list").on("click", ".theme_btn", function () {
    $(this).parents(".testimonial_edit-item").slideUp(150);

    setTimeout(() => {
      $(this).parents(".testimonial_edit-item").remove();

      if (!$(".testimonial_edit-list .testimonial_edit-item").length) {
        $(".testimonial_edit-list").hide();
      } else {
        $(".testimonial_edit-list").show();
      }
    }, 150);
  });

  // Determine star amouint

  // Testimonial Add
  $("#addTestimonialForm").submit(function (e) {
    e.preventDefault();

    const clientImage = $("#clientImg")[0].files;
    const clientName = $("#clientName").val();
    const clientRating = $("#clientRating").val();
    const clientMessage = $("#clientComment").val();
    const clientImageUrl = URL.createObjectURL(clientImage[0]);

    if (!clientImageUrl.length) return;
    if (!clientName.length) return;
    if (!clientRating.length) return;
    if (!clientMessage.length) return;

    if (!$(".testimonial_edit-list").is(":visible")) {
      $(".testimonial_edit-list").show();
    }

    const div = document.createElement("div");
    $(div).addClass("testimonial_edit-item");

    const testimonialItem = `

    <div class="testimonial_edit-img">
      <img src="${clientImageUrl}" alt="">
    </div>
    <div class="testimonial_edit-content">
      <h6>${clientName}</h6>
      <ul class="testimonial_rating">
        <li><i class="fas fa-star"></i></li>
        <li><i class="fas fa-star"></i></li>
        <li><i class="fas fa-star"></i></li>
        <li><i class="fas fa-star"></i></li>
        <li><i class="fas fa-star"></i></li>
      </ul>
      <p>
        ${clientMessage}
      </p>

      <button class="theme_btn theme_btn-primary float-right"><i class="fas fa-trash"></i></button>
    </div>
    `;

    $(".testimonial_edit-list").append(div);

    $(div).hide().slideUp().append(testimonialItem).slideDown(150);

    $("#clientImg").val("");
    $("#clientName").val("");
    $("#clientRating").val("");
    $("#clientComment").val("");
  });

  document.querySelectorAll(".editor_edit").forEach((item) => {
    DecoupledEditor.create(item)
      .then((editor) => {
        $(item).prev()[0].appendChild(editor.ui.view.toolbar.element);
      })
      .catch((error) => {
        console.error(error);
      });
  });

  // let currentSide;

  // $(".area_selector-item").click(function () {
  //   const targetElem = $(this).data("target");
  //   $(targetElem).show();

  //   $(".area_selector-item").hide();
  //   $(".area_selector-list").hide();
  // });

  // $(".area_head").click(function () {
  //   $(".area_wrapper").hide();

  //   if (currentSide) {
  //     currentSide.show();
  //     currentSide = undefined;
  //   } else {
  //     $(".area_wrapper").hide();
  //     $(".area_selector-list").show();
  //     $(".area_selector-item").show();
  //   }
  // });

  // $(".add_widget-btn").click(function () {
  //   currentSide = $(this).closest(".area_wrapper");

  //   $(".area_wrapper").hide();
  //   $(".widget_list-wrapper").show();
  // });

  // Thankyou page Admin

  $(function () {
    let data = {
      areaSlectorData: [
        {
          name: "Left Area",
          icon: `<svg class="mr-2" width="24" height="29" viewBox="0 0 24 29" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g clip-path="url(#clip0_2_164)">
        <path d="M12 26L4 26C1.7909 26 1.56562e-07 24.2091 3.49691e-07 22L1.74846e-06 6C1.94158e-06 3.7909 1.7909 2 4 2L12 2L12 26Z" fill="#F5F5F5"></path>
        <path d="M4 25L20 25C21.6569 25 23 23.6569 23 22L23 6C23 4.34315 21.6569 3 20 3L4 3C2.34315 3 1 4.34314 1 6L1 22C1 23.6569 2.34315 25 4 25Z" stroke="#585858" stroke-width="2" stroke-dasharray="2 2"></path>
        <path d="M11 29L11 0" stroke="#585858" stroke-width="2"></path>
      </g>
      <defs>
        <clipPath id="clip0_2_164">
          <rect width="24" height="29" fill="white" transform="translate(24 29) rotate(-180)"></rect>
        </clipPath>
      </defs>
    </svg>`,
    target:"#leftAreaControl"
        },
        {
          name: "Right Area",
          icon: `<svg class="mr-2" width="24" height="29" viewBox="0 0 24 29" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 3H20C22.2091 3 24 4.79086 24 7V23C24 25.2091 22.2091 27 20 27H12V3Z" fill="#F5F5F5"></path>
        <rect x="1" y="4" width="22" height="22" rx="3" stroke="#585858" stroke-width="2" stroke-dasharray="2 2"></rect>
        <line x1="13" x2="13" y2="29" stroke="#585858" stroke-width="2"></line>
      </svg>`,
      target:"#rightAreaControl"
        },
        {
          name: "Popups",
          icon: `<svg class="mr-2" width="24" height="29" viewBox="0 0 24 29" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 3H20C22.2091 3 24 4.79086 24 7V23C24 25.2091 22.2091 27 20 27H12V3Z" fill="#F5F5F5"></path>
        <path d="M20 4H4C2.34315 4 1 5.34315 1 7V23C1 24.6569 2.34315 26 4 26H20C21.6569 26 23 24.6569 23 23V7C23 5.34315 21.6569 4 20 4Z" stroke="#585858" stroke-width="2" stroke-dasharray="2 2"></path>
        <path d="M18.3636 7H9.63636C8.73262 7 8 7.73262 8 8.63636V17.3636C8 18.2674 8.73262 19 9.63636 19H18.3636C19.2674 19 20 18.2674 20 17.3636V8.63636C20 7.73262 19.2674 7 18.3636 7Z" stroke="#585858" stroke-width="2"></path>
      </svg>`,
      target:"#popupArea"
        },
      ],

      currentArea: null,
     
    };

    //Modal
    let modal = {};

    // Controller
    let controller = {
      init: function () {
        view.init();
      },
    };

    //View
    let view = {
      init: function () {
        // Grab Elements
        this.$areaSelectorListElem = $(".area_selector-list");

        // Delegate Event on areaLists
        this.$areaSelectorListElem.on(
          "click",
          ".area_selector-item",
          function () {
            const targetElem = $(this).data('target');
            data.currentArea = targetElem;
            
            $(this).parents(".area_selector-list").hide();
            $(`${targetElem}`).show();
            
          }
        );

        // Exit Area
        $(".exitAreaControl").click(function () {
          $('#leftAreaControl').hide();
          $('#rightAreaControl').hide();
          $('#popupArea').hide();
         
          $(".area_selector-list").show();
        });

        //Add Widget
        $(".addWidgetBtn").click(function () {
          $("#widgetList").show();
          $('#leftAreaControl').hide();
          $('#rightAreaControl').hide();
          $('#popupArea').hide();
          $(".areaControl").hide();
        });

        // Exit Widget List
        $("#exitWidgetList").click(function () {
          $("#widgetList").hide();
          // data.currentArea.show();
          $(`${data.currentArea}`).show();
        });

        // Widget List Click
        $("#availableWidgetsList").on(
          "click",
          ".area_add-widgets",
          function () {
            const widgetTarget = $(this).data("target");

            $("#widgetList").hide();
            $(widgetTarget).show();
          }
        );

        // Exit Widget
        $('.exitWidget').click(function(){
          $('.widget_item').hide();
          $("#widgetList").show();
        })

        // Initialize ck Editor
        document.querySelectorAll(".editor_edit").forEach((item) => {
          DecoupledEditor.create(item)
            .then((editor) => {
              $(item).prev()[0].appendChild(editor.ui.view.toolbar.element);
            })
            .catch((error) => {
              console.error(error);
            });
        });

        

        $('#dragUploadFile').on('drop', function(event) {
          var fileName = URL.createObjectURL(event.target.files[0]);
          var preview = document.getElementById("preview");
          var previewImg = document.createElement("img");
          previewImg.setAttribute("src", fileName);
          preview.innerHTML = "";
          preview.appendChild(previewImg);
      })

      $('#dragUploadFile').on('drag', function() {
        document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
      })

      $('#dragUploadFile').on('ondrop', function() {
        document.getElementById('uploadFile').parentNode.className = 'dragBox';
    }
)

      

    
        //Render View
        this.render();
      },

      render: function () {
        this.$areaSelectorListElem.html("");

        data.areaSlectorData.forEach((item) => {
          this.$areaSelectorListElem
            .append(` <li class="area_selector-item"  data-currentarea="${item.name}" data-target="${item.target}">
            ${item.icon}
            ${item.name}
          </li>`);
        });
      },
    };

    controller.init();
  });
});
