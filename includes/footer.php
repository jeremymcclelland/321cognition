<?php 
$siteroot = '/321cognition';
//date_default_timezone_set('America/New_York');

//below is for the copyright year to adjust automatically for new year
$startYear = 2013;
$thisYear = date('Y');
if ($thisYear > $startYear) {
    $copyright = "$startYear&ndash;$thisYear";
} else {
    $copyright = $startYear;
}
?> 
        <div class="footer-container" id="bottomFooter">
            <footer class="wrapper">
              <div class="rightCol">
                  <p class="topLink"><a href="#top">return to top</a></p>
                  <p><a href="tel://843-323-8431" title="give me a call">T: 843.323.8431</a></p>
                  <p><a href="mailto:jeremy@moraycreative.com" title="send me a message">jeremy@moraycreative.com</a></p>
              </div>
              <div class="leftCol">
                  <p><small>&copy; <?php echo $copyright; ?> Moray Creative, LLC</small> </p>
                  <p><b>Moray Creative, LLC</b><br>
                  1260 Lakefront Drive<br>
                  Charleston, SC 29412</p>
              </div>
            </footer>
        </div>

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