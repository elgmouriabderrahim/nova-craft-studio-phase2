<?php
require_once "env.php";
$mysqli = new mysqli(
    hostname: $_ENV['DB_HOST'],
    password: $_ENV['DB_PASS'],
    username: $_ENV['DB_USER'],
    database: $_ENV['DB_NAME']
);

if ($mysqli->connect_error) {
    die('erreur de connexion a la base de donnees : ' . $mysqli->connect_error);
}
return $mysqli;