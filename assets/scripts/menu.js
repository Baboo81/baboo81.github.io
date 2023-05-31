$(document).ready(function(){
    $('#mainNav li:has(ul) > a').append('<span>&#9660;</span>');
    $('#mainNav li:has(ul)').hover(function(){
        $('ul', this).stop(true, true).slideToggle();//stop(true, true) = vider la liste d'attente des animations
    });
});