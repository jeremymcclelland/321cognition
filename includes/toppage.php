<?php 
$siteroot = '/321cognition'; //sets variable for siteroot for testing environment
//set siteroot to empty string when launching site
//date_default_timezone_set('America/New_York');
?>  
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Moray Creative</title>
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


<div class="header-container">
    <header class="wrapper clearfix">
        <h1 class="title">Moray Creative</h1>
        <nav>
            <ul>
                <li><a href="<?php echo $siteroot; ?>/index.php">Home</a></li>
                <li><a href="<?php echo $siteroot; ?>/page2.php">Page 2</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
</div>