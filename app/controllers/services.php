<?php
if (empty($_SESSION['logged'])) {
    header("Location: /signin");
    exit;
}
$title = "NovaCraft Studio - Services";
$view = __DIR__ . '/../views/services.php';

require __DIR__ . '/../templates/layout.php';
