<?php include __DIR__ . '/../partials/header.php'; ?>

<?php
    use App\data;

    $about = include __DIR__ . '/../../data/about.php';
?>

<section id="home">
    <div class="hero">
        <video autoplay loop muted playsinline class="bg-video">
            <source src="videos/background.mp4" type="video/mp4">
            Votre navigateur ne supporte pas les vidéos !  
        </video>
        <div class="hero-content">
            <h1 class="homeTitle">WEB DEVELOPER</h1>
            <div class="my-5">
                <h2 class="homeSecondTitle">Christel</h2>
                <h2 class="homeSecondTitle">Rodriguez Perez</h2>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="">
        <div class="row aboutSection">
            <div class="about1 col-md-5 d-flex align-items-center justify-content-center">
                <img class="rounded-cercle" src="img/other/mySelf2.png" alt="Photo de moi-même">
            </div>
            <div class="about2 col-md-7 d-flex aligne-items-center justify-content-center">
                <article class="text-center">
                    <?php foreach ($about as $key1 => $aboutTemp): ?>
                        <h3 class="text-center fontBleuVert mt-5"><?php echo $aboutTemp['title']; ?></h3>
                            <p class="fontBleuVert mt-5"><?php echo $aboutTemp['p1']; ?></p>
                            <p class="fontBleuVert mt-3"><?php echo $aboutTemp['p2']; ?></p>
                        <div class="text-center my-5">
                            <button class="button"><?php echo $aboutTemp['btn']; ?></button>
                        </div>
                    <?php endforeach; ?>
                </article>
            </div>
        </div>
    </div>
</section>

<section id="projects">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center fontBleuVert mt-5">Les projets</h3>
            <div class="d-flex align-items-center justify-content-center">
                <!-- Cards -->   
                <div class="card" style="width: 20rem;">
                    <img src="img/projects/Kenko.png" class="card-img-top" alt="Image représentant la page d'accueil du site Kenko">
                    <div class="card-body">
                        <h5 class="card-title">Kenko</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <img src="img/projects/SoinsDeSoie.png" class="card-img-top" alt="Image représentant la page d'accueil du site SoinsDeSoie">
                    <div class="card-body">
                        <h5 class="card-title">Kenko</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <img src="img/projects/Souffle.png" class="card-img-top" alt="Image représentant la page d'accueil du site Souffle d'équilibre">
                    <div class="card-body">
                        <h5 class="card-title">Kenko</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- END Cards -->  
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>