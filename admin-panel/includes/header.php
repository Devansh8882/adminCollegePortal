
<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="../css/common.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header class="admin-header">
  <div class="logo-section">
    <img src="../../images/logo.png" alt="College Logo" class="logo">
    <span class="college-name">ABC College</span>
  </div>
  <nav class="admin-nav">
    <ul>
      <li class="dropdown">
        <a href="#">Students ▾</a>
        <ul class="dropdown-menu">
          <li><a href="/admin-panel/students/list.php">List</a></li>
          <li><a href="/admin-panel/students/add.php">Add</a></li>
        </ul>
      </li>
      <li><a href="/admin-panel/logout.php" class="logout-btn">Logout</a></li>
    </ul>
  </nav>
</header>
<!-- 
<script>
  $(document).ready(function () {
    $('.dropdown').hover(
      function () {
        $(this).find('.dropdown-menu').stop(true, true).slideDown(200);
      },
      function () {
        $(this).find('.dropdown-menu').stop(true, true).slideUp(200);
      }
    );
  });
</script> -->
<script src="../js/common.js"></script>
