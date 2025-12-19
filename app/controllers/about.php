<?php
if (empty($_SESSION['logged'])) {
    header("Location: /signin");
    exit;
}
$title = "NovaCraft Studio - About Us";
$view = __DIR__ . '/../views/about.php';

require __DIR__ . '/../templates/layout.php';
