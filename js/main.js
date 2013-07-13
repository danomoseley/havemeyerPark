$('document').ready(function() {
    var backgroundImages = [
        '/images/20130611_1023.jpg',
        '/images/20130611_1124.jpg',
        '/images/20130702_1383.jpg',
        '/images/20130611_1034.jpg',
        '/images/20130611_1151.jpg',
        '/images/20130702_1385.jpg',
        '/images/20130611_1069.jpg',
        '/images/20130702_1350.jpg',
        '/images/20130702_1404.jpg'
    ];
    var lastBackgroundImageId = $.cookie('backgroundImageId');
    if (!lastBackgroundImageId) {
        lastBackgroundImageId = 0;
    }
    $.cookie('backgroundImageId', ++lastBackgroundImageId);
    $('html').css('background', 'url('+backgroundImages[lastBackgroundImageId%backgroundImages.length]+')');
    $('html').css('-webkit-background-size', 'cover');
    $('html').css('-moz-background-size', 'cover');
    $('html').css('-o-background-size', 'cover');
    $('html').css('background-size', 'cover');
});

