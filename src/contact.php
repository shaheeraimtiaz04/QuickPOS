<?php
// Only allow POST requests
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: ../index.php");
    exit();
}

// Get and trim form data
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

// Simple validation (no empty fields)
if ($name === "" || $email === "" || $message === "") {

    echo "<h2>All fields are required.</h2>";
    echo "<p><a href='../index.php#contact'>Go back</a> and fill out the form.</p>";
    exit();
}

// ✅ Simulate success (no database needed)
header("Location: ../thank-you.html");
exit();
?>
