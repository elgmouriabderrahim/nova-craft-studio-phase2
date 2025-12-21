<?php
if (empty($_SESSION['logged'])) {
    header("Location: /signin");
    exit;
}
require_once __DIR__ . '/../../config/database.php';
$stmt = $mysqli->prepare("SELECT name, email, created_at, role FROM users WHERE id = ?");
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

$title = "NovaCraft Studio - Profile";
$view = __DIR__ . '/../views/profile.php';
require __DIR__ . '/../templates/layout.php';
