var preloadImg = new Image();
preloadImg.onload = function() {
    $('#preload-cover-background-container').fadeIn();
};
preloadImg.src = "images/" + window.backgroundImageSrc;

var mainImg = new Image();
mainImg.onload = function() {
    $('#cover-background-container').fadeIn();
    $('#preload-cover-background-container').remove();
};
mainImg.src = "images/preload/" + window.backgroundImageSrc;