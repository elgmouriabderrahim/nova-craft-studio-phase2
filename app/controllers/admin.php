<?php
require_once __DIR__ . '/../../config/database.php';

if (empty($_SESSION['user_id'])) {
    header('Location: /signin');
    exit;
}

if ($_SESSION['role'] !== 'admin') {
    require  __DIR__ . '/404.php';
    exit;
}


$stmt = $mysqli->prepare("
    SELECT id, name, email, message, created_at 
    FROM contacts 
    ORDER BY created_at DESC
");
$stmt->execute();
$messages = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

$title = "Admin - Messages de contact";
$view = __DIR__ . '/../views/admin.php';

require __DIR__ . '/../templates/layout.php';
