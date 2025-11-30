<?php
// SCRUM-40: Created initial script to handle POST requests.
// Logic for SCRUM-41 (validation) and SCRUM-42 (success) will follow.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect data (for testing purposes)
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // Placeholder: Simple redirect (will be finalized in SCRUM-42)
    header("Location: ../thank-you.html");
    exit();
} else {
    // Prevent direct access
    header("Location: ../index.php");
    exit();
}
?>