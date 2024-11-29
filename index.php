<?php
$request_uri = $_SERVER['REQUEST_URI'];

switch ($request_uri ) {
    case '/PRF_RedMush_PHP/':
    case 'redmush.fr':
        include 'app/controllers/_Accueil.php';
        break;
    case '/PRF_RedMush_PHP/app/controllers/_Inscription.php':
    case 'redmush.fr/inscription':
        include 'app/controllers/_Inscription.php';
        default:
            include 'app/controllers/_404.php';
            break;
}
?>