<?php
    $backgroundImages = array(
        'images/20130611_1023.jpg',
        'images/20130611_1124.jpg',
        'images/20130702_1383.jpg',
        'images/20130611_1034.jpg',
        'images/20130611_1151.jpg',
        'images/20130702_1385.jpg',
        'images/20130611_1069.jpg',
        'images/20130702_1350.jpg',
        'images/20130702_1404.jpg'
    );
    $lastBackgroundImageId = $_COOKIE['backgroundImageId'];
    if (empty($lastBackgroundImageId)) {
        $lastBackgroundImageId = 0;
    }
    setcookie('backgroundImageId', ++$lastBackgroundImageId);
    
    $backgroundImage = $backgroundImages[$lastBackgroundImageId%count($backgroundImages)];
?>

<!doctype html>
<html lang="en" style="background-image:url(<?php echo $backgroundImage; ?>);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
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
    </body>
</html>
