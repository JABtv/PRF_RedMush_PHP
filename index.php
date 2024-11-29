<?php
$request_uri = $_SERVER['REQUEST_URI'];
$host = $_SERVER['HTTP_HOST'];

// Normaliser l'URI pour le switch
switch ($request_uri) {
    case '/PRF_RedMush_PHP/':
    case $host:
        include 'app/controllers/_Accueil.php';
        break;

    case '/PRF_RedMush_PHP/Inscription':
    case $host . '/Inscription':
        include 'app/controllers/_Inscription.php';
        break;

    default:
        include 'app/views/error/_404.php'; // Page non trouvée
        break;
}
?>