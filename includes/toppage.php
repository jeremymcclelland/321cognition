<?php 
$siteroot = '/Responsive_PHP'; //sets variable for siteroot for testing environment
//set siteroot to empty string when launching site
//date_default_timezone_set('America/New_York');
?>  

<div class="header-container">
    <header class="wrapper clearfix">
        <h1 class="title">Moray Creative</h1>
        <nav>
            <ul>
                <li><a href="<?php echo $siteroot; ?>/index.php">Home</a></li>
                <li><a href="<?php echo $siteroot; ?>/page2.php">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
        </nav>
    </header>
</div>