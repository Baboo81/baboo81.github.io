<?php

use app\core\Router;
use app\controllers\PortfolioController;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ .'/../app/core/Router.php';

//Vérifie si c'est un fichier statique et le sert directement
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . '/public' . $path;

if (file_exists($file) && is_file($file)) {
    //Définit le bon type MIME avant de servir le fichier
    $mimeType = mime_content_type($file);
    header("Content-Type: $mimeType");
    readfile($file);
    exit;
}


// Initialisation du routeur
$router = new Router();

// Définition des routes
$router->add('', 'PortfolioController', 'index');       // Page principale (home)
$router->add('sections/about', 'PortfolioController', 'about', 'GET'); // Section About
$router->add('sections/projects', 'PortfolioController', 'projects'); // Section Projects
$router->add('sections/contact', 'PortfolioController', 'contact'); // Section Contact

// Récupération de l'URL
$url = trim($_SERVER['REQUEST_URI'], '/');

// Dispatch (appel du bon contrôleur et de la bonne méthode)
$router->dispatch($url);

?>
