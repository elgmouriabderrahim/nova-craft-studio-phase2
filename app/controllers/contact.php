<?php
require_once __DIR__ . '/../../config/database.php';

if (empty($_SESSION['user_id'])) {
    header("Location: /signin");
    exit;
}

$title = "NovaCraft Studio - Contact";
$view = __DIR__ . '/../views/contact.php';

$name = $email = $message = "";
$success = false;
$errors = [];

$name_regex = "/^[a-zA-Z\s]{3,}$/";

function test($data) {
    return htmlspecialchars(trim(stripslashes($data)));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = test($_POST['name'] ?? '');
    $email = test($_POST['email'] ?? '');
    $message = test($_POST['message'] ?? '');

    if (empty($name)) {
        $errors['name'] = "Please enter your name";
    } elseif (!preg_match($name_regex, $name)) {
        $errors['name'] = "Please enter a valid name";
    }

    if (empty($email)) {
        $errors['email'] = "Please enter your email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Please enter a valid email";
    }

    if (empty($message)) {
        $errors['message'] = "Please enter a message";
    } elseif (strlen($message) < 5) {
        $errors['message'] = "Message must have at least 5 characters";
    }

    if (empty($errors)) {
        $stmt = $mysqli->prepare(
            "INSERT INTO contacts (user_id, name, email, message, created_at)
             VALUES (?, ?, ?, ?, NOW())"
        );
        $stmt->bind_param(
            "isss",
            $_SESSION['user_id'],
            $name,
            $email,
            $message
        );

        if ($stmt->execute()) {
            $success = true;
            $name = $email = $message = "";
        } else {
            $errors['general'] = "Something went wrong, try again.";
        }
    }
}

require __DIR__ . '/../templates/layout.php';
