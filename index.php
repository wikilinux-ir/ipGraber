<?php

include "init/autoload.php";
// var_dump($_SERVER);

if (isset($_GET['requestId'])) {
    $uri = $_GET['requestId'];

}
if (isset($uri)) {

    list($ipAddr, $userAgent, $userLanguage) = [$_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $_SERVER['HTTP_ACCEPT_LANGUAGE']];
    new setInformation($uri, $ipAddr, $userAgent, $userLanguage);
}

if (!isset($_GET['requestId'])) {
    $getNewToken = new registerTokenInDb();
    $uri = $getNewToken->getToken();

}

$userData = new getRequesterUser($_SERVER, 'users', $uri);

include PATH . "template/index.php";
