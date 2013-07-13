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
    $lastBackgroundImageId = $_COOKIE['backgroundImageId'];
    if (empty($lastBackgroundImageId)) {
        $lastBackgroundImageId = 0;
    }
    setcookie('backgroundImageId', ++$lastBackgroundImageId);
    
    $backgroundImage = $backgroundImages[$lastBackgroundImageId%count($backgroundImages)];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Havemeyer Park</title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
        <script src="//cdn.jsdelivr.net/jquery.cookie/1.3.1/jquery.cookie.js"></script> 
        <script>window.backgroundImageSrc = '<?php echo $backgroundImage; ?>';</script>
        <script src="js/main.js"></script>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="cover-background-container" style="background-image:url(images/<?php echo $backgroundImage; ?>);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;"></div>
        <div id="preload-cover-background-container" style="background-image:url(images/preload/<?php echo $backgroundImage; ?>);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;"></div>
    </body>
</html>
