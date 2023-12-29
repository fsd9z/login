<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform your validation and authentication here
    // For demo purposes, let's check if the username and password are "demo" and "password"

    if ($username === "demo" && $password === "password") {
        header("Location: loginsucess.html"); // Redirect to success page
        exit(); // Stop further execution
    } else {
        header("Location: invalid.php"); // Redirect to invalid page
        exit(); // Stop further execution
    }
}
?>
