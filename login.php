<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform your validation and authentication here
    // For demo purposes, let's check if the username and password are "demo" and "password"

    if ($username === "demo" && $password === "password") {
        // Successful login
        echo "Login successful! Welcome, " . $username;
    } else {
        // Invalid credentials
        echo "Invalid username or password. Please try again.";
    }
}
?>
