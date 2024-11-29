<?php
$request_uri = $_SERVER['REQUEST_URI'];
echo "Requested URI: " . htmlspecialchars($request_uri); // Affiche l'URI demandée

// Normaliser l'URI pour le switch
switch ($request_uri) {

    case '/PRF_RedMush_PHP/':
    case 'redmush.fr/':
        include 'app/controllers/_Accueil.php';
        break;

    case '/PRF_RedMush_PHP/Inscription':
    case 'redmush.fr/Inscription':
        include 'app/controllers/_Inscription.php';
        break;

    default:
        include 'app/views/error/_404.php'; // Page non trouvée
        break;
}
?>