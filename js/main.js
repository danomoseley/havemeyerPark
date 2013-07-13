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
    $('.content').css('font-size', $('.content .name').innerWidth()/$('.content .name').html().length);
}

$(window).resize(function() {
    resizeText();
});