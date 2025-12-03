<?php
// Simple contact form handler (for demo). Save this file under php/contact.php
// NOTE: For security and production you should sanitize inputs and use proper mail configuration.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if (!$name || !$email || !$message) {
        header('Location: ../index.html?status=missing');
        exit;
    }
    // For demo: save message to a local file (messages.txt)
    $line = date('Y-m-d H:i:s') . " | " . $name . " | " . $email . " | " . str_replace("\n"," ",$message) . PHP_EOL;
    file_put_contents(__DIR__ . '/messages.txt', $line, FILE_APPEND | LOCK_EX);
    // Redirect back with success
    header('Location: ../index.html?status=sent');
    exit;
} else {
    header('Location: ../index.html');
    exit;
}
?>
