var preloadImg = new Image();
preloadImg.onload = function() {
    $('#preload-cover-background-container').fadeIn();
};
preloadImg.src = "images/" + window.backgroundImageSrc;

var mainImg = new Image();
mainImg.onload = function() {
    $('#cover-background-container').show();
    $('#preload-cover-background-container').remove();
};
mainImg.src = "images/preload/p_" + window.backgroundImageSrc;

function resizeText() {
    $('.content').css('font-size', $('body').innerWidth()/75);
}

$(document).ready(function() {
    resizeText();    
});

$(window).resize(function() {
    resizeText();
});