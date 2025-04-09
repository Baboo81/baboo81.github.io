<?php 

namespace app\core;  // Ajout du namespace

class Controller {
    // Méthode pour charger une vue 
    public function view($view, $data = []) {
        // Extraire les données pour les rendre disponibles dans la vue
        extract($data);//Rend les variables accessibles dans la vue
        
        

        // Inclure le fichier de vue si il existe
        $viewPath = __DIR__ . '/../views/' . $view . '.php';

        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            die("Vue non trouvée : " . $viewPath);
        }
    }
}

?>
