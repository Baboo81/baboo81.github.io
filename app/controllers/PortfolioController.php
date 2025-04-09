<?php

namespace app\controllers;

use app\core\Controller;

class PortfolioController extends Controller {

    public function index() {
        //Définir le titre de la page 
        $title = "PortFolio";
        //Joindre les styles
        $resetCss = "reset.css";
        $css = "style.css";

        //Charger la vue et passer le titre, les styles
        $this->view('sections/home', compact('title', 'resetCss', 'css'));
    }

    public function about() {
         //Définir le titre de la page
         $title = "Á propos de moi";
         //Joindre les styles
         $resetCss = "reset.css";
         $css = "style.css";

        $this->view('sections/about', compact('title', 'resetCss', 'css'));
    }

    public function project() {

        $title = "Les projets";

        $this->view('sections/projects', compact('title'));
    }


}

?>