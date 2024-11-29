<?php
$request_uri = $_SERVER['REQUEST_URI'];

switch ($request_uri ) {
    case '/PRF_RedMush_PHP/':
    case 'redmush.fr':
        include 'app/controllers/_Accueil.php';
        break;
        default:
            include 'app/controllers/_404.php';
            break;
}
?>