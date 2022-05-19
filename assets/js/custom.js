$(document).ready(function () {
  // On DOM Ready

  // Notification Toggle on click
  $(".dropdown-parent").click(function (e) {
    e.stopPropagation();
    $(".dropdown-content:visible")
      .not($(this).find(".dropdown-content"))
      .slideUp();
    $(this).find(".dropdown-content").slideToggle();
  });

  // Notification close  on click outside
  $(document).click(function (e) {
    if (!$(e.target).closest(".dropdown-content").length) {
      $(".dropdown-content:visible").slideUp();
    }
  });

  $(".dropdown-content").click(function (e) {
    e.stopPropagation();
  });
});
