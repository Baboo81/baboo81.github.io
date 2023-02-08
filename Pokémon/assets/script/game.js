const board = document.getElementById('board');
let firstCard = null;
let canplay = true;

/**
 * Initialise le plateau de jeu en créant nbPairs de paires de cartes
 * @param {number} nbPairs 
 */
const init = (nbPairs) => {

    const myList = createList(nbPairs);
    shuffle(myList);
    for(let item of myList) {
        createCard(item);
    }
}

/** */
const createCard = (item) => {
    //<div class="card">
        // <div class="card-back"></div>
        // <div class="card-front"></div>
    //</div>
    const card = document.createElement('div');
    card.classList.add('card');

    const front = document.createElement('div');
    front.style.backgroundImage = `
        url('https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/dream-world/${item}.svg')
    `;
    front.classList.add('card-front');

    const back = document.createElement('div');
    back.classList.add('card-back');

    card.append(back, front);
    board.append(card);

    card.addEventListener('click', () => {
        pick(card);
    });
}

const pick = (card) => {
    if(card.classList.contains('visible') || !canplay) {
        return;// arrêter la fonction
    }
    card.classList.add('visible');
    
    if(firstCard !== null) {

        if(!compareCards(firstCard, card)) {
            //reverseCards
            canplay = false;
            setTimeout(() => {
                firstCard.classList.remove('visible');
                card.classList.remove('visible');
                firstCard = null;
                canplay = true;
            },2000); 
        } else {
            firstCard = null;
        }
        
    }
    else {
        firstCard = card;
    }
}

const createList = (nbPairs) => {
    const l = []; // si nbPairs == 6 => [1,1,2,2,3,3,4,4,5,5,6,6]
    // code
    for(let i = 1; i <= nbPairs; i++) {
        l.push(i, i);
    }
    return l;
} 

const shuffle = (list) => {
    //hint: sort + random
    list.sort(() => Math.random() - 0.5);
}

const compareCards = (card1, card2) => {
    if(
        card1.querySelector('.card-front').style.backgroundImage 
        === 
        card2.querySelector('.card-front').style.backgroundImage
    ) return true;
    return false
}

init(6);