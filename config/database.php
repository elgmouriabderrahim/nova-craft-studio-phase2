<?php

$mysqli = new mysqli(
    hostname: 'localhost',
    username: 'root',
    password: $_ENV['DB_PASS'],
    database: 'novacraft'
);

if ($mysqli->connect_error) {
    die('erreur de connexion a la base de donnees : ' . $mysqli->connect_error);
}
