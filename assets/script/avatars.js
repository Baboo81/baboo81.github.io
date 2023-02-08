
const avatAllina = document.getElementById('allina');

avatAllina.addEventListener('click' , function(){
    document.querySelector('.avat-popup').style.display = 'flex';
});

const closeAvat = document.getElementById('closeAvat');

closeAvat.addEventListener('click' , function(){
    document.querySelector('.avat-popup').style.display = 'none';
});