<?php

include "init/autoload.php";

if (!isset($_GET['resultId'])) {

    header("location: " . DOMAIN . "ip-graber/index.php");
} else {
    $information = new getInformation($_GET['resultId']);
    $result = $information->getData();

}

// echo $a->ipaddr . " " . $a->visit_at . " " . $a->create_at;

include "template/result.php";
