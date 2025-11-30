<?php
// SCRUM-40: Create contact.php script
// SCRUM-41: Add PHP validation (Check for empty fields)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Collect and sanitize data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // --- SCRUM-41: Validation Implementation ---
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    if (empty($message)) {
        $errors[] = "Message cannot be empty.";
    }
    
    if (!empty($errors)) {
        // Display errors if validation fails
        http_response_code(400); // Bad Request
        echo "<h1>Form Submission Error</h1>";
        echo "<p>The following errors occurred. Please go back and correct them:</p>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
        echo "<p><a href='../index.php'>Go back</a></p>";
        exit();
    }
    
    // Simple redirect remains until SCRUM-42
    header("Location: ../thank-you.html");
    exit();

} else {
    header("Location: ../index.php");
    exit();
}
?>