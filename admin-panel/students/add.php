
<?php require('../includes/header.php'); ?>
<main class="content">
  <h2>Add New Student</h2>
  <form id="student-form" class="student-form">
    <label>
      Full Name:
      <input type="text" name="name" required />
    </label>
    <label>
      Email:
      <input type="email" name="email" required />
    </label>
    <label>
      Course:
      <input type="text" name="course" required />
    </label>
    <label>
      Phone:
      <input type="tel" name="phone" required />
    </label>
    <button type="submit">Submit</button>
  </form>
</main>

<script>
  $(document).ready(function () {
    $('#student-form').on('submit', function (e) {
      e.preventDefault();
      alert('Form submitted! (Connect to MongoDB here)');
    });
  });
</script>
<?php require('../includes/footer.php'); ?>