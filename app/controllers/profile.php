<?php
if (empty($_SESSION['logged'])) {
    header("Location: /signin");
    exit;
}
$title = "NovaCraft Studio - Profile";
$view = __DIR__ . '/../views/profile.php';

require __DIR__ . '/../templates/layout.php';
