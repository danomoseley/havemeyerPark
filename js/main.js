var preloadImg = new Image();
var backgroundImageSrc = $.cookie('backgroundImageSrc');
var backgroundImageId = $.cookie('backgroundImageId');
var backgroundImages = JSON.parse($.cookie('backgroundImages'));
preloadImg.onload = function() {
    $('#preload-cover-background-container').fadeIn();
};
preloadImg.src = "images/" + backgroundImageSrc;

var mainImg = new Image();
mainImg.onload = function() {
    $('#cover-background-container').show();
    $('#sponsors').show();
    $('#preload-cover-background-container').remove();
    resizeText();
};
mainImg.src = "images/preload/p_" + backgroundImageSrc;

window.setInterval(function() {
    $.cookie('backgroundImageId', ++backgroundImageId);
    backgroundImageSrc = backgroundImages[backgroundImageId%backgroundImages.length];

    var img = new Image();
    img.onload = function() {
        var oldCover = $('#cover-background-container');
        var newCover = oldCover.clone().hide();
        $('#cover-background-container').parent().append(newCover);
        newCover.css('background-image', 'url(images/' + backgroundImageSrc+')')
        
        oldCover.fadeOut(1500, function() {
            oldCover.remove();    
        });
        newCover.fadeIn(1500);
    };
    img.src = "images/" + backgroundImageSrc;
}, 5000);

function resizeText(firstPass) {
    $('body').css('font-size', ($('.content .name').innerWidth() / ($('.content .name .letter-spaced').html().length+1))/4);
    if (typeof firstPass == 'undefined') {
        resizeText(false);    
    }
}

$(window).resize(function() {
    resizeText();
});