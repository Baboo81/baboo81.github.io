//Pour exécuter le js une fois que le document est prêt
//jQuery styles:
jQuery(document).ready(function(){
    jQuery('#logo').css({
        position: 'relative',
        opacity: '100%',
        height: '300px',
        width: '300px',
        left: '80%',
        bottom: '40%',
        });
});

//JSON contenant les informations des différentes cartes:
const DATA = [
    {
        //Card 1:
        "title" : "Molenbeek en promenade",
        "img" : "./img/molenbeek.png",
        "txt" : "Molenbeek en promenade propose une série de parcours à travers cette jolie commune en passant pasr des chemins bucoliques. Le site permet de visualiser les parcours ainsi que la distance de chaque parcours.",
        "svg" : "./img/svg/PictoMolen.svg",
        "btn" : ""
    },
    {
        //Card 2:
        "title" : "Hackathon 2023",
        "img" : "./img/spookyCode.png",
        "txt" : "Challenge réalisé en trois jours avec la collaboration de quatre collègues. Le site contient un jeu, dont le but est de ramasser une série d'objet avec le personnage.",
        "svg" : "./img/svg/PictoHack.svg",
        "btn" : ""
    },
    {
        //Card 3:
        "title" : "Pokemon Game",
        "img" : "./img/pokemon.png",
        "txt" : "Jeu, dont le but est de trouver les bonnes paires de Pokemons.",
        "svg" : "./img/svg/PictosPokemons.svg",
        "btn" : ""
    },
    {
        //Card 4:
        "title" : "Projet React: Asturias",
        "img" : "./img/reactAsturias.png",
        "txt" : "Site proposant un échantillon des jolis endroits à visiter, avec un tour d'horizon sur la gastronomie locale",
        "svg" : "./img/svg/PictosAsturias.svg",
        "btn" : ""
    },
    {
        //Card 5:
        "title" : "Projet Node.JS: API",
        "img" : "./img/API.png",
        "txt" : "Mini application, proposant diverses informations comme la météo, la bourse, la qualité de l'air, ... Les informations sont récupérer via différentes API.",
        "btn" : ""
    },
    {
        //Card 6:
        "title" : "Projet React: ToDoList",
        "img" : "./img/reactToDoList.png",
        "txt" : "Application React peremttant d'organiser son amploi du temps en fonction de ce qui doit être fait des choses déjà accomplies",
        "btn" : ""
    }
];

//Fct randomize:
function shuffle (DATA){
   
   while(l > -1){

   let j = 0;
   let valI = '';
   let valJ = valI;
   let l = DATA.length - 1;

        j = Math.floor(Math.random() * l);
        valI = DATA[l];
        valJ = DATA[j];
        DATA[l] = valJ;
        DATA[j] = valI;
        l = l -1;
   }
   return DATA;
};

//Récupération des informations au niveau des cartes:
$(document).ready(function(){
        for(let  DATA; DATA < 6; DATA++ ){
            $('#cardsBlock').append(`<article class="card col-12 col-md-4"> <h4 class="card-title p-4" ${DATA.title}> <img id="imgCards" ${DATA.img}> <div class="card-body"> <p id="txt" class="card-text p-1" ${DATA.txt}> <div> <img ${DATA.svg }> </article> </h4> </img> </div> </p> </div> </img>`);
            }
        }
    );

 //Gestion des notes:
//Récupération du span:
$(document).ready(function(){
    let footNotes = $('span[data-footnote]');
    if(footNotes){
        let footNoteDisplay = $('<ol></ol>');//Création des balises qui contiendront les notes
        footNotes.each(function(index, element){//index = position du span sur lequel nous sommes
            let current = $(element);
            let footNotesTxt = current.data('footnote');
            current.css('text-decoration', 'underline dashed')
            .after(`<a href="#footnote-${index+1}" id="footnote-anchor-${index+1}"><sup>[${index+1}]</sup></a>`);
            $(`<li id="footInfo-${index+1}">${footNotesTxt}</li>`)
            .append(`<a href="#footNote-anchor-${index+1}"></a>`).appendTo(footNoteDisplay);//apppendTo permet d'injecter dans la balise :<ol>
        });
        //Injecter la balise <ol> dans le doc:
        footNoteDisplay.appendTo('aside ').wrap(`<section id="footnotesDisplay"></section>`);//wrap permet d'emballer les balises <ol>
    }
});

//Gestion slider:
$(document).ready(function(){

});

//Gestion certificats:
$(document).ready(function(){

});

