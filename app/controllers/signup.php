<?php
require_once __DIR__ . '/../../config/database.php';

if (isset($_SESSION['logged'])) {
    header("Location: /");
    exit;
}

$errors = [];
$old = [];

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    function test($data) {
        return htmlspecialchars(trim(stripslashes($data)));
    }

    $email     = test($_POST['email'] ?? '');
    $fullname  = test($_POST['fullname'] ?? '');
    $password  = $_POST['password'] ?? '';
    $cpassword = $_POST['cpassword'] ?? '';

    // store old inputs (IMPORTANT FIX)
    $old = [
        'email' => $email,
        'fullname' => $fullname
    ];

    $name_regex = "/^[a-zA-Z\s]{3,}$/";

    // validation
    if (empty($email)) {
        $errors['email'] = "Email required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email";
    }

    if (empty($fullname)) {
        $errors['fullname'] = "Full name required";
    } elseif (!preg_match($name_regex, $fullname)) {
        $errors['fullname'] = "Invalid name";
    }

    if (empty($password)) {
        $errors['password'] = "Password required";
    } elseif (strlen($password) < 5) {
        $errors['password'] = "Weak password";
    }

    if ($password !== $cpassword) {
        $errors['cpassword'] = "Passwords do not match";
    }

    // stop here if errors exist (CRITICAL FIX)
    if (!empty($errors)) {
        // DO NOT REDIRECT
    } else {
        // check email existence
        $stmt = $mysqli->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $errors['email'] = "This email already exists";
        } else {
            // insert user
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $mysqli->prepare(
                "INSERT INTO users (name, email, password, created_at)
                 VALUES (?, ?, ?, NOW())"
            );
            $stmt->bind_param('sss', $fullname, $email, $hashedPassword);

            if ($stmt->execute()) {
                $_SESSION['success'] = "Account created successfully";
                header("Location: /signin");
                exit;
            } else {
                $errors['general'] = "Error during signup";
            }
        }
    }
}

$title = "NovaCraft Studio - Sign Up";
$view  = __DIR__ . '/../views/signup.php';
require __DIR__ . '/../templates/layout.php';
