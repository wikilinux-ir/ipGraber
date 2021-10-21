<?php

include "dbc.php";
include "consts.php";
function auto($className)
{

    $fileName = "/srv/train/ip-graber/app/$className.php";
    if (file_exists($fileName)) {
        include $fileName;
    }

}
spl_autoload_register('auto');
