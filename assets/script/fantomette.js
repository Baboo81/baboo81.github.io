const btnPopup = document.getElementById('btn-popup');

btnPopup.addEventListener('click' , function(){
    document.querySelector('.bg-popup').style.display = 'flex';
});

const close = document.getElementById('close');

close.addEventListener('click' , function(){
    document.querySelector('.bg-popup').style.display = 'none';
});