
<?php require('../includes/header.php'); ?>
<main class="content">
  <h2>Student List</h2>
  <table class="student-table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Course</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="student-list">
      <tr>
        <td>John Doe</td>
        <td>john@example.com</td>
        <td>BCA</td>
        <td>9876543210</td>
        <td><button class="delete-btn">Delete</button></td>
      </tr>
    </tbody>
  </table>
</main>

<script>
  $(document).ready(function () {
    $('.delete-btn').click(function () {
      $(this).closest('tr').fadeOut();
    });
  });
</script>
<?php require('../includes/footer.php'); ?>