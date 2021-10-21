<?php

include "init/autoload.php";
// var_dump($_SERVER);
if (isset($_GET['requestId'])) {
    $tok = $_GET['requestId'];

}
if (isset($tok)) {

    list($ipAddr, $userAgent, $userLanguage) = [$_SERVER['REMOTE_ADDR'], $_SERVER['HTTP_USER_AGENT'], $_SERVER['HTTP_ACCEPT_LANGUAGE']];
    new setInformation($tok, $ipAddr, $userAgent, $userLanguage);
}

// $a = new createToken();
// echo $a->getToken();
// var_dump($a);
$a = new registerTokenInDb();

include "template/index.php";
