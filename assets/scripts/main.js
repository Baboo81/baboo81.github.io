"use strict";

//Animation balls:
const ball = document.getElementById('logo2');
let leftPos = 0;
let upDownPos = 0;
let dir = -1;
let current_rotation = 0; 

ball.style.position = "absolute";

function ballAnimate1 () {

    if (leftPos == 1200) {
        dir = 1
    } else if 
        (leftPos == -100) {
        dir = -1
    }
    
    leftPos += -2 * dir;
    current_rotation += 1;
    

    ball.style.left = `${leftPos}px`;
    ball.style.transform = 'rotate('  + current_rotation + 'deg)';

    requestAnimationFrame(ballAnimate1);
};

requestAnimationFrame(ballAnimate1);
//////////////////////////////////////
//Cards:
//Card content collapse:
const togg = document.getElementById('togg');
const togg2 = document.getElementById('togg2');
const content = document.getElementById('cardContent');
const content2 = document.getElementById('cardContent2');


togg.addEventListener("click", () => {
    if(getComputedStyle(content).display != "none") {
        content.style.display = "none";
    } else {
        content.style.display = "block";
    }
});

togg2.addEventListener("click", () => {
    if(getComputedStyle(content2).display != "none") {
        content2.style.display = "none";
    } else {
        content2.style.display = "block";
    }
});


function collapsed () {
    if(getComputedStyle(content).display != "none") {
        content.style.display = "none";
        content2.style.display = "none";
  }
};

collapsed();
/////////////////////////////////////////////
//CarouselProduct
let slides = document.querySelectorAll(".carousel-slide");
let currentSlide = 0;

function resetSlides() {
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
}

function showSlide(n) {
  resetSlides();
  slides[n].style.display = "flex";
}

showSlide(currentSlide);

document.querySelector(".carousel-control-prev").addEventListener("click", function () {
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  }
  showSlide(currentSlide);
});

document.querySelector(".carousel-control-next").addEventListener("click", function () {
  currentSlide++;
  if (currentSlide >= slides.length) {
    currentSlide = 0;
  }
  showSlide(currentSlide);
});

//fct afficher txt (btn carouselProduct):
const carouselBtn1 = document.getElementById('carousel-btn1');
const baliseP1 = document.getElementById('p1');
const carouselBtn2 = document.getElementById('carousel-btn2');
const baliseP2 = document.getElementById('p2');
const carouselBtn3 = document.getElementById('carousel-btn3');
const baliseP3 = document.getElementById('p3');


carouselBtn1.addEventListener("click", () => {
  if(getComputedStyle(baliseP1).display != "none") {
      baliseP1.style.display = "none";
  } else {
      baliseP1.style.display = "block";
  }
});

carouselBtn2.addEventListener("click", () => {
  if(getComputedStyle(baliseP2).display != "none") {
      baliseP2.style.display = "none";
  } else {
      baliseP2.style.display = "block";
  }
});

carouselBtn3.addEventListener("click", () => {
  if(getComputedStyle(baliseP3).display != "none") {
     baliseP3.style.display = "none";
  } else {
    baliseP3.style.display = "block";
  }
});

function txtCarouselProduct () {
    if (getComputedStyle(baliseP1, baliseP2, baliseP3).display != "none") {
      baliseP1.style.display = "none";
      baliseP2.style.display = "none";
      baliseP3.style.display = "none";
    }
};

txtCarouselProduct ();
///////////////////////////////////////////
//Footer map:
//Create map:
const centroid = [50.709925, 4.352603];
const map = L.map('mapid').setView(centroid, 16.4);

//Add tiles & marker:
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
L.marker([50.709925, 4.352603]).addTo(map);
////////////////////////////////////////////
//Fonction de substitution à target _blank:
function openLink (event) {
    const link = "https://booking.optios.net/19311";
    window.open(link, "https://soinsdesoie.be", "_self");
    event.preventDefault();
}

