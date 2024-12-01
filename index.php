<?php
$request_uri = $_SERVER['REQUEST_URI'];

// Normaliser l'URI pour le switch
switch ($request_uri) {
    case  '/PRF_RedMush_PHP/':
    case '/':
        include 'app/controllers/_Accueil.php';
        break;

    case '/Inscription':
        case '/PRF_RedMush_PHP/Inscription/':
        include 'app/controllers/_Inscription.php';
        break;

    default:
        include 'app/views/error/_404.php'; // Page non trouvée
        break;
}
?>