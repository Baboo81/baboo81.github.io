<?php include __DIR__ . '/../partials/header.php'; ?>

<?php
    use App\data;

    $hero = include __DIR__ . '/../../data/hero.php';
    $about = include __DIR__ . '/../../data/about.php';
    $projects = include __DIR__ . '/../../data/projects.php';
?>

<section id="home">
    <div class="hero">
        <video autoplay loop muted playsinline class="bg-video">
            <source src="videos/background.mp4" type="video/mp4">
            Votre navigateur ne supporte pas les vidéos !  
        </video>
        <div class="hero-content">
            <?php foreach ($hero as $key2 => $heroTemp): ?>
                <h1 class="homeTitle"><?php echo $heroTemp['title']; ?></h1>
                <div class="my-5">
                    <h2 class="homeSecondTitle"><?php echo $heroTemp['secondTitle1']; ?></h2>
                    <h2 class="homeSecondTitle"><?php echo $heroTemp['secondTitle2']; ?></h2>
                </div>
            <?php endforeach; ?>
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
            <div class="my-5">
                <h3 class="text-center fontBleuVert my-5">Les projets</h3>
            </div>
            <div class="d-flex align-items-center justify-content-center">
                <!-- Cards -->  
                <?php foreach ($projects as $key3 => $projectsTemp): ?>  
                <div class="card d-flex flex-column h-100" style="width: 30rem;">
                    <img src="<?php echo $projectsTemp['card1Img']; ?>" class="card-img-top" alt="Image représentant la page d'accueil du site Kenko">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $projectsTemp['card1Title']; ?></h5>
                        <p class="card-text text-muted"><?php echo $projectsTemp['card1Txt']; ?></p>
                        <h6 class="text-center my-3">Technologies utilisées</h6>
                        <div class="text-center mt-auto">
                            <button class="button"><?php echo $projectsTemp['card1Btn1']; ?></button>
                            <button class="button"><?php echo $projectsTemp['card1Btn2']; ?></button>
                        </div>
                    </div>
                </div>
                <div class="card d-flex flex-column h-100 mx-5" style="width: 30rem;">
                    <img src="<?php echo $projectsTemp['card2Img']; ?>" class="card-img-top" alt="Image représentant la page d'accueil du site SoinsDeSoie">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $projectsTemp['card2Title']; ?></h5>
                        <p class="card-text text-muted"><?php echo $projectsTemp['card2Txt']; ?></p>
                        <h6 class="text-center my-3">Technologies utilisées</h6>
                        <div class="mt-auto text-center">
                            <button class="button"><?php echo $projectsTemp['card2Btn1']; ?></button>
                            <button class="button"><?php echo $projectsTemp['card2Btn2']; ?></button>
                        </div>
                    </div>
                </div>
                <div class="card d-flex flex-column h-100" style="width: 30rem;">
                <img src="<?php echo $projectsTemp['card3Img']; ?>" class="card-img-top" alt="Image représentant la page d'accueil du site SoinsDeSoie">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $projectsTemp['card3Title']; ?></h5>
                        <p class="card-text text-muted"><?php echo $projectsTemp['card3Txt']; ?></p>
                        <h6 class="text-center my-3">Technologies utilisées</h6>
                        <div class="mt-auto text-center">
                            <button class="button"><?php echo $projectsTemp['card3Btn1']; ?></button>
                            <button class="button"><?php echo $projectsTemp['card3Btn2']; ?></button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- END Cards -->  
            </div>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-12">
            <div class="d-flex align-items-center justify-content-center">
                <!-- Cards -->  
                <?php foreach ($projects as $key3 => $projectsTemp): ?>  
                <div class="card d-flex flex-column h-100" style="width: 30rem;">
                    <img src="<?php echo $projectsTemp['card4Img']; ?>" class="card-img-top" alt="Image représentant la page d'accueil du site Kenko">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $projectsTemp['card4Title']; ?></h5>
                        <p class="card-text text-muted"><?php echo $projectsTemp['card4Txt']; ?></p>
                        <h6 class="text-center my-3">Technologies utilisées</h6>
                        <div class="text-center mt-auto">
                            <button class="button"><?php echo $projectsTemp['card4Btn1']; ?></button>
                            <button class="button"><?php echo $projectsTemp['card4Btn2']; ?></button>
                        </div>
                    </div>
                </div>
                <div class="card d-flex flex-column h-100 mx-5" style="width: 30rem;">
                    <img src="<?php echo $projectsTemp['card2Img']; ?>" class="card-img-top" alt="Image représentant la page d'accueil du site SoinsDeSoie">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $projectsTemp['card5Title']; ?></h5>
                        <p class="card-text text-muted"><?php echo $projectsTemp['card5Txt']; ?></p>
                        <h6 class="text-center my-3">Technologies utilisées</h6>
                        <div class="mt-auto text-center">
                            <button class="button"><?php echo $projectsTemp['card5Btn1']; ?></button>
                            <button class="button"><?php echo $projectsTemp['card5Btn2']; ?></button>
                        </div>
                    </div>
                </div>
                <div class="card d-flex flex-column h-100" style="width: 30rem;">
                <img src="<?php echo $projectsTemp['card3Img']; ?>" class="card-img-top" alt="Image représentant la page d'accueil du site SoinsDeSoie">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $projectsTemp['card3Title']; ?></h5>
                        <p class="card-text text-muted"><?php echo $projectsTemp['card3Txt']; ?></p>
                        <h6 class="text-center my-3">Technologies utilisées</h6>
                        <div class="mt-auto text-center">
                            <button class="button"><?php echo $projectsTemp['card3Btn1']; ?></button>
                            <button class="button"><?php echo $projectsTemp['card3Btn2']; ?></button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <!-- END Cards -->  
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>