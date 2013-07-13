var preloadImg = new Image();
preloadImg.onload = function() {
    $('#preload-cover-background-container').fadeIn();
};
preloadImg.src = "images/" + window.backgroundImageSrc;

var mainImg = new Image();
mainImg.onload = function() {
    $('#cover-background-container').show();
    $('#sponsors').show();
    $('#preload-cover-background-container').remove();
    resizeText();
};
mainImg.src = "images/preload/p_" + window.backgroundImageSrc;

function resizeText(firstPass) {
    $('body').css('font-size', ($('.content .name').innerWidth() / ($('.content .name .letter-spaced').html().length+1))/4);
    if (typeof firstPass == 'undefined') {
        resizeText(false);    
    }
}

$(window).resize(function() {
    resizeText();
});