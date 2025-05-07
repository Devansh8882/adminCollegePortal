// ---------- FILE: js/common.js ----------

$(document).ready(function () {
  // Dropdown menu slide toggle
  $(".dropdown").hover(
    function () {
      $(this).find(".dropdown-menu").stop(true, true).slideDown(200);
    },
    function () {
      $(this).find(".dropdown-menu").stop(true, true).slideUp(200);
    }
  );

  // Confirm before deleting (reusable logic)
  $(".delete-btn").on("click", function () {
    if (confirm("Are you sure you want to delete this entry?")) {
      $(this).closest("tr").fadeOut(); // You can trigger AJAX here instead
    }
  });

  // Form success flash message
  $(".flash-message").delay(3000).fadeOut(400);
});
