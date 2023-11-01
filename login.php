<?php
session_start();

// Set the admin's username and password (you can change these)
$adminUsername = "admin";
$adminPassword = "password123"; // Change this to a secure password

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the entered credentials match the admin's credentials
    if ($username === $adminUsername && $password === $adminPassword) {
        // Authentication successful
        $_SESSION["admin"] = true;
        header("Location: secure_section.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password.";
    }
}
?>
