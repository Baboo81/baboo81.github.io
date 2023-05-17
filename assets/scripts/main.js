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


function cards($){
    $('cardsBlock').prepend("<article class='col-lg-12 col-md-4 col-sm-1 d-md-flex p-4'> <h4 class='card-title p-4'> " + DATA.title + " ");

    if($('cardsBlock').length > 0){
        console.log("cet ID existe");
    }
};
    


