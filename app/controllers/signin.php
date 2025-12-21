<?php
require_once __DIR__ . '/../../config/database.php';

if (isset($_SESSION['logged'])) {
    header('Location: /');
    exit;
}

$errors = [];
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    function test($data) {
        return htmlspecialchars(trim(stripslashes($data)));
    }
    $email = test($_POST['email'])?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email)) {
        $errors['email'] = 'Email required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid Email';
    }

    if (empty($password)) {
        $errors['password'] = 'password required';
    }

    if (empty($errors)) {

        $stmt = $mysqli->prepare("SELECT id, role, password FROM users WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['logged'] = true;
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                header('Location: /');
                exit;
            } else {
                $errors['info'] = 'wrong credentials';
            }
        } else {
            $errors['info'] = "wrong credentials";
        }
    }
}

$title = "NovaCraft Studio - Sign In";
$view = __DIR__ . '/../views/signin.php';

require __DIR__ . '/../templates/layout.php';
