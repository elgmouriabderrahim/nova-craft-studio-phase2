<?php
$title = "NovaCraft Studio - Contact";
$view = 'views/contact.php';


$name = $email = $message = "";
$succes = false;
$name_regex = "/^[a-zA-Z\s]{3,}$/";

function test($data){
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}
if (!empty($_POST)) {
    $name = test($_POST["name"]);
    $email = test($_POST["email"]);
    $message = test($_POST["message"]);
}


require 'templates/layout.php';
