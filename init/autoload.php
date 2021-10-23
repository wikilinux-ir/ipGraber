<?php

include "dbc.php";
include "consts.php";
function auto($className)
{

    $fileName = PATH . "app/$className.php";
    if (file_exists($fileName)) {
        include $fileName;
    }

}
spl_autoload_register('auto');
