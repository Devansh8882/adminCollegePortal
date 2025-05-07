<?php
session_start();
session_destroy();
header("Location: /admin-panel/index.php");
exit();
?>
