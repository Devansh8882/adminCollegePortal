$(document).ready(function () {
  // Toggle password visibility
  $("#showPassword").change(function () {
    const passwordField = $("#password");
    if ($(this).is(":checked")) {
      passwordField.attr("type", "text");
    } else {
      passwordField.attr("type", "password");
    }
  });

  // Form submission
  $("#loginForm").submit(function (e) {
    e.preventDefault();

    // Simulate loading (replace with actual AJAX)
    $('button[type="submit"]').html(
      '<i class="fas fa-spinner fa-spin"></i> Authenticating...'
    );

    setTimeout(() => {
      // Redirect to admin panel on "success"
      window.location.href = "admin/dashboard.php";
    }, 1500);
  });
});
