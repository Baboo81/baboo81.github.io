<?php include __DIR__ . '/../partials/header.php'; ?>

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
                <article>
                    <h3 class="text-center fontBleuVert mt-5">Qui suis-je</h3>
                    <p>Hello, moi c'est Christel, développeuse web, je suis passionnée par l'informatique depuis mes 12 ans.</p>
                </article>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>