"use strict";

//Horloge:
function clock () {
    //Récupération de : l'heure, des minutes, des secondes:
    const date = new Date();
    const hours = ((date.getHours() + 11) % 12 + 1);
    const minutes = date.getMinutes();
    const secondes = date.getSeconds();
    //Corréler les valeurs avec les degrés de l'horloge:
    const hour = hours * 30;
    const minute = minutes * 6;
    const seconde = secondes * 6;
    //Affichage des valeurs par rapport aux aiguilles de l'horloge:
    document.querySelector('.heure').style.transform = `rotate(${hour}deg)`;
    document.querySelector('.minute').style.transform = `rotate(${minute}deg)`;
    document.querySelector('.seconde').style.transform = `rotate(${seconde}deg)`;
}
    //On utilise setInterval afin d'actualiser l'horloge toutes les secondes:
    setInterval(clock, 1000);


// Liste des sections correspondant aux pages
let sections = ["home", "about", "skills", "picto", "stage", "certif"];

// Fonction pour charger dynamiquement le contenu d'une section
function loadSection(section) {
    if (sections.includes(section)) {
        // Utilisation de fetch pour récupérer le contenu de la section (par exemple, 'about.php')
        fetch(`${section}.php`)  // Par exemple, 'about.php'
            .then(response => response.text())
            .then(data => {
                // Injecter le contenu de la page dans la div appropriée
                document.getElementById("sections-container").innerHTML = data;
            })
            .catch(error => {
                console.error('Erreur de chargement de la section:', error);
            });
    }
}

// Fonction pour gérer le défilement et charger les sections
function onScroll() {
    // Récupérer la position actuelle du scroll
    const scrollPosition = window.scrollY;

    // Vérifier dans quelle section on se trouve et charger la section correspondante
    if (scrollPosition < document.getElementById('about').offsetTop) {
        loadSection("home");
    } else if (scrollPosition >= document.getElementById('about').offsetTop && scrollPosition < document.getElementById('skills').offsetTop) {
        loadSection("about");
    } else if (scrollPosition >= document.getElementById('skills').offsetTop && scrollPosition < document.getElementById('picto').offsetTop) {
        loadSection("skills");
    } else if (scrollPosition >= document.getElementById('picto').offsetTop && scrollPosition < document.getElementById('stage').offsetTop) {
        loadSection("picto");
    } else if (scrollPosition >= document.getElementById('stage').offsetTop && scrollPosition < document.getElementById('certif').offsetTop) {
        loadSection("stage");
    } else if (scrollPosition >= document.getElementById('certif').offsetTop) {
        loadSection("certif");
    }
}

// Attacher l'événement de défilement
window.addEventListener('scroll', onScroll);
