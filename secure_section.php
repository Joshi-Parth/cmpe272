<?php
session_start();

// Check if the user is authenticated as the admin
if (isset($_SESSION["admin"]) && $_SESSION["admin"] === true) {
    // Display the secure section content
    echo "<h2>Secure Section</h2>";
    echo "<p>List of current users:</p>";
    echo "<ul>";
    echo "<li>Mary Smith</li>";
    echo "<li>John Wang</li>";
    echo "<li>Alex Bington</li>";
    // Add more users as needed
    echo "</ul>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    // Redirect to the login page if not authenticated
    header("Location: admin_login.php");
    exit();
}
?>
