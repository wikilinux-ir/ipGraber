<?php

list($host, $dbname, $username, $password) = ["127.0.0.1", "ipgrab", "", ""];

try {

    $connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

} catch (PDOException $e) {

    echo $e->getMessage();
}
