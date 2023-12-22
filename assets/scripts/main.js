"use strict";

//Footer map:

//Create map:
const centroid = [50.71036, 4.36889];
const map = L.map('mapid').setView(centroid, 16.4);

//Add tiles & marker:
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
L.marker([50.71036, 4.36889]).addTo(map);

//Horloge:
function clock () {
    //Récupération de : l'heure, des minutes, des secondes:
    const date = new Date();
    const hours = ((date.getHours() + 11) % 12 + 1);
    const minutes = date.getMinutes();
    const secondes = date.getSeconds();
    //Corréler les valeurs avec les degrés de l'hotloge:
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

//Animation balls:
const ball = document.getElementById('logo');
let leftPos = 0;
let upDownPos = 0;
let dir = -1;
let current_rotation = 0; 

ball.style.position = "absolute";

function ballAnimate1 () {

    if (leftPos == 1900) {
        dir = 1
    } else if 
        (leftPos == -90) {
        dir = -1
    }
    
    leftPos += -2 * dir;
    current_rotation += 1;
    

    ball.style.left = `${leftPos}px`;
    ball.style.transform = 'rotate('  + current_rotation + 'deg)';

    requestAnimationFrame(ballAnimate1);
};

requestAnimationFrame(ballAnimate1);