//
const icon = document.querySelector('.hamburger');
const menu = document.querySelector('.menu');
const one = document.querySelector('.one');
const two = document.querySelector('.two');
const three = document.querySelector('.three');

//Fonction ouverture du menu
let open = () => {
    one.style.transform = 'rotate(45deg)';
    two.style.transform = 'rotate(-45deg)';
    one.style.top = '12px';
    two.style.top = '12px';
    three.style.top = '24px';
    three.style.opacity = '0';

    menu.style.transform = 'translateX(0)';

    icon.classList.remove('closed');
    icon.classList.add('open');
    
    icon.removeEventListener('click', open);
    icon.addEventListener('click', close);
};

//Fonction fermeture du menu
let close = () => {
    
    one.style.transform = 'rotate(0)';
    two.style.transform = 'rotate(0)';

    three.style.opacity = '1';
  
    one.style.top = '0';
    two.style.top = '12px';
    three.style.top = '24px';

    menu.style.transform = 'translateX(-100%)';

    icon.classList.remove('open');
    icon.classList.add('closed');
  
    icon.removeEventListener('click', close);
    icon.addEventListener('click', open);
};


  if(icon.classList.contains('closed')){
    icon.addEventListener('click', open);

    } else {
    icon.addEventListener('click', close);
  }
