<?php 
$siteroot = '/hanselandpetal';
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