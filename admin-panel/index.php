<?php require('includes/header.php'); ?>

<main class="content">
  <h2>Welcome, Admin!</h2>
  <p class="subtext">Use the options below to manage student leads.</p>

  <div class="dashboard-cards">
    <div class="card" onclick="window.location.href='students/list.php'">
      <h3>View Students</h3>
      <p>See the list of all student leads collected.</p>
    </div>
    <div class="card" onclick="window.location.href='students/add.php'">
      <h3>Add Student</h3>
      <p>Add a new student lead to the database.</p>
    </div>
  </div>
</main>


<?php require('includes/footer.php'); ?>
