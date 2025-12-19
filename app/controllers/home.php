<?php
if (empty($_SESSION['logged'])) {
    header("Location: /signin");
    exit;
}
$title = "NovaCraft Studio - Accueil";
$view = __DIR__ . '/../views/home.php';
    
require __DIR__ . '/../templates/layout.php';