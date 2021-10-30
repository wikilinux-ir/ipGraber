<?php

include "init/autoload.php";
// use \Hekmatinasser\Verta;

$uri = $_GET['resultId'];

if (!isset($uri)) {

    header("location: " . DOMAIN . "ip-graber/index.php");
} else {

    $information = new getInformation($uri);
    $result = $information->getData();

}
new getRequesterUser($_SERVER, 'users', $uri);
$a = new \Hekmatinasser\Verta($result->visit_at);
include "template/result.php";
