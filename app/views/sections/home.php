<?php include __DIR__ . '/../partials/header.php'; ?>

<?php

use App\data;

$hero = include __DIR__ . '/../../data/hero.php';
$about = include __DIR__ . '/../../data/about.php';
$projectsData = include __DIR__ . '/../../data/projects.php';
$projects = $projectsData['projects'];
$stage = include __DIR__ . '/../../data/stage.php';
$skills = include __DIR__ . '/../../data/skills.php';
?>

<section id="home">
    <div class="hero">
        <video autoplay loop muted playsinline class="bg-video">
            <source src="videos/background.mp4" type="video/mp4">
            Votre navigateur ne supporte pas les vidéos !
        </video>
        <div class="hero-content">
            <?php foreach ($hero as $key2 => $heroTemp): ?>
                <h1 class="homeTitle"><?php echo htmlspecialchars($heroTemp['title']); ?></h1>
                <div class="my-5">
                    <h2 class="homeSecondTitle"><?php echo htmlspecialchars($heroTemp['secondTitle1']); ?></h2>
                    <h2 class="homeSecondTitle"><?php echo htmlspecialchars($heroTemp['secondTitle2']); ?></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="about">
    <div class="">
        <div class="row aboutSection">
            <div class="about1 col-md-5 d-flex align-items-center justify-content-center">
                <img class="rounded-5" src="img/other/mySelf2.png" alt="Photo de moi-même">
            </div>
            <div class="about2 col-md-7 d-flex aligne-items-center justify-content-center">
                <article class="text-center">
                    <?php foreach ($about as $key1 => $aboutTemp): ?>
                        <h3 class="text-center fontBleuVert mt-5"><?php echo htmlspecialchars($aboutTemp['title']); ?></h3>
                        <p class="fontBleuVert mt-5"><?php echo htmlspecialchars($aboutTemp['p1']); ?></p>
                        <p class="fontBleuVert mt-3"><?php echo htmlspecialchars($aboutTemp['p2']); ?></p>
                        <div class="text-center my-5">
                            <button class="button" onclick="window.location.href='https://www.kenko-web.be'">
                                <?php echo htmlspecialchars($aboutTemp['btn']); ?>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </article>
            </div>
        </div>
    </div>
</section>

<section id="projects" class="my-5">
    <div class="container-fluid my-5">
        <div class="my-5">
            <h3 class="text-center fontBleuVert my-5">Les projets</h3>
        </div>
        <div class="row justify-content-center my-5">
            <?php foreach ($projects as $project): ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-4">
                    <div class="card w-100 h-100">
                        <img src="<?= $project['img']; ?>" class="card-img-top" alt="Image du projet <?= htmlspecialchars($project['title']); ?>">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title"><?= htmlspecialchars($project['title']); ?></h5>
                            <p class="card-text text-muted"><?= htmlspecialchars($project['txt']); ?></p>
                            <h6 class="text-center my-3">Technologies utilisées</h6>
                            <div class="mt-auto text-center">
                                <a href="<?= $project['run']; ?>" target="_blank" class="button">
                                    <?= htmlspecialchars($project['btn1']); ?>
                                </a>
                                <a href="<?= $project['code']; ?>" target="_blank" class="button">
                                    <?= htmlspecialchars($project['btn2']); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>
</section>

<section id="pictos" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 sliderContent text-center my-5">
                <h3 class="text-center fontBleuVert mb-4">Les Pictos</h3>

                <div id="carouselExampleCaptions" class="carousel slide carousel-fade custom-carousel my-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../../img/pictos/soinsDeSoie.svg" class="d-block w-100" alt="Logo représentant un joli pissenlit">
                        </div>
                        <div class="carousel-item">
                            <img src="../../img/pictos/logoAmme.gif" class="d-block w-100" alt="Logo représentant un ordinateur">
                        </div>
                        <div class="carousel-item">
                            <img src="../../img/pictos/logoBc.svg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../../img/pictos/souffleDequilibre.svg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="stage">
    <div class="">
        <div class="row stageSection">
            <?php foreach ($stage as $key4 => $stageTemp): ?>
                <div class="bloc1 col-md-6 d-flex aligne-items-center justify-content-center p-5">
                    <article class="text-center">
                        <h3 class="text-center fontBleuVert mt-5"><?php echo $stageTemp['title']; ?></h3>
                        <p class="fontBleuVert mt-5"><?php echo $stageTemp['p1']; ?></p>
                        <p class="fontBleuVert mt-3"><?php echo $stageTemp['p2']; ?></p>
                    </article>
                </div>
                <div class="bloc2 col-md-6 d-flex align-items-center justify-content-center">
                    <article class="text-center p-3">
                        <h3 class="text-center fontBleuVert mb-5"><?php echo $stageTemp['title2']; ?></h3>
                        <div class="accordion accordion-flush shadow" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <?php echo $stageTemp['link1']; ?>
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <?php echo $stageTemp['accordionTxtLink1']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <?php echo $stageTemp['link2']; ?>
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <?php echo $stageTemp['accordionTxtLink2']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <?php echo $stageTemp['link3']; ?>
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <?php echo $stageTemp['accordionTxtLink3']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="skills">
    <div class="row">
        <div class="col-12 skills-container">
            <div class="my-5">
                <h3 class="text-center fontBleuVert my-5">Les technologies utilisées</h3>
            </div>
            <div class="animationPictos-container">
                <?php foreach ($skills as $key5 => $skillsTemp): ?>
                    <div class="animationPictos-tracks">
                        <?php for ($repeat = 0; $repeat < 3; $repeat++): ?>
                            <?php for ($i = 1; $i <= 13; $i++): ?>
                                <img src="<?php echo $skillsTemp['img' . $i]; ?>" alt="Picto représentant <?php echo $skillsTemp['img' . $i]; ?>">
                            <?php endfor; ?>
                        <?php endfor; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>