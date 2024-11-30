<?php
$request_uri = $_SERVER['REQUEST_URI'];

// Normaliser l'URI pour le switch
switch ($request_uri) {
    case "/PRF_RedMush_PHP/":
    case "www.redmush.fr/":
        include "app/controllers/_Accueil.php";
        break;

    case "/Inscription":
    case "redmush.fr/Inscription":
        include "app/controllers/_Inscription.php";
        break;

    default:
        include "app/views/error/_404.php"; // Page non trouvée
        break;
}
?>