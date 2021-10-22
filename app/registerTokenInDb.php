<?php

class registerTokenInDb
{

    private $obj;
    public function __construct()
    {

        global $connection;
        $this->obj = new createToken();
        $this->token = $this->obj->getToken();
        $query = "INSERT into info (token) values('$this->token')";
        $stmt = $connection->prepare($query);

        if ($this->checkExistToken($this->token)) {
            $this->__construct();
            return true;
        }
        $stmt->execute();
        return $stmt->rowCount() > 0 ? true : false;
    }
    private $token;

    public function getToken()
    {
        return $this->token;
    }

    public function checkExistToken($token)
    {
        global $connection;
        $query = "SELECT * from info where token='$token'";
        $stmt = $connection->prepare($query);
        $stmt->execute();
        return $stmt->rowCount() > 0 ? true : false;
    }
    public static function getTokenID($token)
    {

        global $connection;
        $query = "SELECT id from info where token='$token'";
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}
