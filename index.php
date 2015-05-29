<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Moray Creative Responsive Demo</title>
        <meta name="description" content="Jeremy McClelland Responsive Portfolio Demo">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/favicon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!-- Adds HTML5 element support for earlier versions of IE -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<?php require 'includes/toppage.php'; //include for header ?>
        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Jeremy McClelland Frontend Demo</h1>
                        <p>This site is designed to demonstratate my frontend development skills. I used the html5 initializr boilerplate template as a starting point. You can see how far I've come by checking our the original code <a href="https://github.com/verekia/initializr-template" title="initializr source code">here</a>.</p>
                    </header>
                    <section>
                        <h2>Animated Banner</h2>
                        <p>For my banner I used multiple css3 transitions and javascript to animate the banner seen <a href="moraybanner.html" title="Moray Creative Banner">here</a>.</p>
                    </section>
                    <section>
                        <h2>CUBE gallery</h2>
                        <p>Animated cube gallery using css3 trasitions and transforms. Created by following lynda.com <i>CSS: Transitions and Transforms with Joseph Lowery</i> tutorials. Click <a href="pictureCube.html" title="Moray Creative Cube">here</a> to view.</p>
                    </section>
                    <section>
                        <h2>3D Carousel</h2>
                        <p>Animated carousel gallery using css3 trasitions and transforms. Created by following lynda.com <i>CSS: Transitions and Transforms with Joseph Lowery</i> tutorials. Click <a href="slideCarousel.html" title="Moray Creative Carousel">here</a> to view.</p>
                    </section>
                    <footer>
                        <h3>article footer h3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
                    </footer>
                </article>

                <aside id="sideBox">
                    <img src="img/moraylogo.png" alt="Moray Creative Logo" title="Moray Creative Logo" id="MorayLogo">
                    <h3>About</h3>
                    <p>Moray Creative is the design alias of Jeremy McClelland. Jeremy is a graphic artist from Charleston, SC with a passion for design and illustration. Over the past eight years he has worked for several print houses and has been actively freelancing in the Charleston area.<br><br>

                    Currently, Jeremy works at Nelson Printing; designing and prepping projects for press. Shifting his focus from print, Jeremy is sharpening his skills as a frontend developer.</p>
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

<?php require 'includes/footer.php'; //include for footer ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>-->
    </body>
</html>
