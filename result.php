<?php

include "init/autoload.php";

$uri = $_GET['resultId'];

if (!isset($uri)) {

    header("location: " . DOMAIN . "ip-graber/index.php");
} else {
    $information = new getInformation($uri);
    $result = $information->getData();

}
new getRequesterUser($_SERVER, 'users', $uri);

include "template/result.php";
