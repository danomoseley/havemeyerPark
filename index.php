<?php
    $backgroundImages = array(
        '20130611_1023.jpg',
        '20130611_1124.jpg',
        '20130702_1383.jpg',
        '20130611_1034.jpg',
        '20130611_1151.jpg',
        '20130702_1385.jpg',
        '20130611_1069.jpg',
        '20130702_1350.jpg',
        '20130702_1404.jpg'
    );
    $lastBackgroundImageId =  isset($_COOKIE['backgroundImageId']) ? $_COOKIE['backgroundImageId'] : null;
    if (empty($lastBackgroundImageId)) {
        $lastBackgroundImageId = 0;
    }
    $lastBackgroundImageId++;
    $backgroundImage = $backgroundImages[$lastBackgroundImageId%count($backgroundImages)];

    setcookie('backgroundImageId', $lastBackgroundImageId);
    setcookie('backgroundImages', json_encode($backgroundImages));
    setcookie('backgroundImageSrc', $backgroundImage);
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Havemeyer Park</title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
        <script src="//cdn.jsdelivr.net/jquery.cookie/1.3.1/jquery.cookie.js"></script>
        <script src="js/main.js"></script>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="border-box content" id="cover-background-container" style="background-image:url(images/<?php echo $backgroundImage; ?>);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
            <div class="border border-box ">
                <div class="name border-box"><span class="letter-spaced">HAVEMEYERPAR</span><span class="last">K</span></div>
            </div>
        </div>
        <div class="border-box" id="preload-cover-background-container" style="background-image:url(images/preload/p_<?php echo $backgroundImage; ?>);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;"></div>
        <div id="sponsors">
            <a target="_blank" height=34 href="http://northbrooklynfarms.com"><img src="logos/nbk.png"/></a>
            <a target="_blank" href="https://twitter.com/bbbyrdd"><img src="logos/redcircle.png"/></a>
            <a target="_blank" href="http://brooklynbikepark.org/"><img src="logos/brooklynbikepark.png"/></a>
            <a target="_blank" href="http://www.bignyc.org/"><img src="logos/bignyc.png"/></a>
        </div>
    </body>
</html>
