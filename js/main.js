var preloadImg = new Image();
preloadImg.onload = function() {
    $('#preload-cover-background-container').fadeIn();
};
preloadImg.src = "images/" + window.backgroundImageSrc;

var mainImg = new Image();
mainImg.onload = function() {
    $('#cover-background-container').show();
    resizeText();
    $('#preload-cover-background-container').remove();
};
mainImg.src = "images/preload/p_" + window.backgroundImageSrc;

function resizeText() {
    $('.content').css('font-size', ($('.content .name').innerWidth() / ($('.content .name .letter-spaced').html().length+1))/4);
}

$(window).resize(function() {
    resizeText();
});