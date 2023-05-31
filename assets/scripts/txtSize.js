$(document).ready(function(){
    $('#txtSize button:not(.active)').on('click', changeTxtSize);
});

function changeTxtSize(e){
    let clicked = $(e.target);
    let newSize = clicked.data('size');
    //Animation txt:
    $('#pageContent').animate({'fontSize': `${newSize}rem`}, 1000, function(){
        $('#txtSize button.active').removeClass('active').on('click', changeTxtSize);
        clicked.addClass('active').off('click');//Permet de retirer l'evenement click du btn
    });
} 