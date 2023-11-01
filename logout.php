<?php
session_start();
// Destroy the session to log out the admin
session_destroy();
header("Location: admin_login.php");
exit();
?>
