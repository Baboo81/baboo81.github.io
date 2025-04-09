<?php

namespace app\core;

class Router {
    private $routes = [];

    // La méthode "add" ajoute les routes avec le contrôleur, l'action et la méthode HTTP
    public function add($path, $controller, $action, $method = 'GET') {
        $this->routes[$path] = ['controller' => $controller, 'action' => $action, 'method' => $method];
    }

    // La méthode "dispatch" charge le bon contrôleur et la bonne action
    public function dispatch($url) {
        $url = trim($url, '/'); // Nettoyer l'URL

        if (array_key_exists($url, $this->routes)) {
            $controllerName = $this->routes[$url]['controller'];
            $actionName = $this->routes[$url]['action'];  // Maintenant on récupère l'action

            $controllerClass = "app\\controllers\\$controllerName";
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                if (method_exists($controller, $actionName)) {  // Exécuter l'action spécifique
                    return $controller->$actionName();
                }
            }
        }

        // Page non trouvée
        http_response_code(404);
        echo "404 - Page non trouvée";
        exit;
    }
}


?>
