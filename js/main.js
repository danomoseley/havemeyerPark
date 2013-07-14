backgroundViewCount = $.cookie('backgroundViewCount');
currentBackgroundImageSrc = backgroundImages[backgroundViewCount%backgroundImages.length]

setBackgroundImage({
    'source': "preload/p_" + currentBackgroundImageSrc,
    'transition': false,
    'callback': function() {
        $('#sponsors').show();
        resizeText();
        setBackgroundImage({
            'source': currentBackgroundImageSrc,
            'transition': false
        });
    }
});

window.setInterval(function() {
    $.cookie('backgroundViewCount', ++backgroundViewCount);
    currentBackgroundImageSrc = backgroundImages[backgroundViewCount%backgroundImages.length];
    setBackgroundImage({'source':currentBackgroundImageSrc});
}, 10000);

$(window).resize(function() {
    resizeText();
});

function setBackgroundImage(options) {
    if (typeof options['source'] == 'undefined') { return false; }
    var imageSource = options['source'];
    var transition = typeof options['transition'] == 'undefined' || options['transition'] == true;
    var img = new Image();
    img.onload = function() {
        var oldCover = $('#cover-background-container');
        var newCover = oldCover.clone().hide();
        $('#cover-background-container').parent().append(newCover);
        newCover.css('background-image', 'url(images/' + imageSource+')')
        
        if (transition) {
            oldCover.fadeOut(1500, function() {
                oldCover.remove();
            });
            newCover.fadeIn(1500, function() {
                if (typeof options['callback'] != 'undefined') {
                    options['callback']();
                }
            });
        } else {
            newCover.show();
            oldCover.remove();
            if (typeof options['callback'] != 'undefined') {
                options['callback']();
            }
        }
    };
    img.src = "images/" + imageSource;
}

function resizeText(firstPass) {
    $('body').css('font-size', ($('.content .name').innerWidth() / ($('.content .name .letter-spaced').html().length+1))/4);
    if (typeof firstPass == 'undefined') {
        resizeText(false);    
    }
}