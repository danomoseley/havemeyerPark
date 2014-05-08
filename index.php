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
    $backgroundViewCount =  isset($_COOKIE['backgroundViewCount']) ? $_COOKIE['backgroundViewCount'] : 0;
    setcookie('backgroundViewCount', ++$backgroundViewCount);

    $backgroundImage = $backgroundImages[$backgroundViewCount%count($backgroundImages)];
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Havemeyer Park</title>
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/jquery.min.js"></script> 
        <script src="//cdn.jsdelivr.net/jquery.cookie/1.3.1/jquery.cookie.js"></script>
        <script>window.backgroundImages = <?php echo json_encode($backgroundImages) ?>;</script>
        <script src="js/main.js"></script>
        <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
	<script>
  	 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-42557504-1', 'havemeyerpark.com');
	  ga('send', 'pageview');
	</script>
    </head>
    <body>
        <div class="border-box content" id="cover-background-container" style="background-image:url(images/preload/p_<?php echo $backgroundImage; ?>);-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
            <div class="border border-box ">
                <div class="name border-box"><span class="letter-spaced">HAVEMEYERPAR</span><span class="last">K</span></div>
            </div>
        </div>
        <div id="sponsors">
            <a target="_blank" href="http://northbrooklynfarms.com"><img src="logos/nbk.png"/></a>
            <a target="_blank" href="https://twitter.com/bbbyrdd"><img src="logos/redcircle.png"/></a>
            <a target="_blank" href="http://brooklynbikepark.org/"><img src="logos/brooklynbikepark.png"/></a>
            <a target="_blank" href="http://www.bignyc.org/"><img src="logos/bignyc.png"/></a>
        </div>
    </body>
</html>
