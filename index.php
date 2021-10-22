<?php

include "init/autoload.php";
// var_dump($_SERVER);

if (isset($_GET['requestId'])) {
    $uri = null;
    $tok = $_GET['requestId'];

}
if (isset($tok)) {

    list($ipAddr, $userAgent, $userLanguage) = [$_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $_SERVER['HTTP_ACCEPT_LANGUAGE']];
    new setInformation($tok, $ipAddr, $userAgent, $userLanguage);
}

if (!isset($_GET['requestId'])) {
    $a = new registerTokenInDb();
    $uri = $a->getToken();

}

$userData = new getRequesterUser($_SERVER, 'users', $uri);

include "template/index.php";
