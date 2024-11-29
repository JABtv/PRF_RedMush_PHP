<?php
$request_uri = $_SERVER['REQUEST_URI'];

if ($request_uri == '/PRF_RedMush_PHP/' || 'redmush.fr') {
    include 'app/controllers/_Accueil.php';
} else {
    include 'app/views/error/_404.php'; // Page non trouvée
}
?>