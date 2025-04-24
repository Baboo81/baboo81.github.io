<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="PortFolio de Christel Rodriguez Perez Web-developper junior">
        <meta name="keywords" content="">
        <!--Favicon links-->
        <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="./assets/favicon/site.webmanifest">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!-- CSS : Leaflet.js -->
	    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
		integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
		crossorigin="" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/<?= $resetCss ?>">
        <link rel="stylesheet" href="/css/<?= $css ?>">
        <!--Script Leaflet-->
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
        <!--Scripts, framework JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" defer></script>
        <script src="/js/main.js" defer ></script>
        <title><?= $title ?></title>
    </head>
    <body>  
        <header class="d-flex justify-content-center">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item mx-5">
                                <a class="nav-link active" aria-current="page" href="/" data-section="home">Accueil</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link" href="#" data-section="about">Qui suis-je ?</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link" href="#" data-section="skills">Projets</a>
                            </li>
                            <li class="nav-item logo-container mx-5">
                                <img src="/img/logo/Logo.svg" class="logo" alt="Logo du site">
                                <div class="wrap">
                                    <!--Heure-->
                                    <div class="heure"></div>
        
                                    <!--Minutes-->
                                    <div class="minute"></div>
        
                                    <!--Secondes-->
                                    <div class="seconde"></div>
        
                                    <!--Point/centre-->
                                    <div class="point"></div>
                                </div>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link" href="#" data-section="picto">Pictos</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link" href="#" data-section="stage">Stage</a>
                            </li>
                            <li class="nav-item mx-5">
                                <a class="nav-link" href="#" data-section="certif">Certifications</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>