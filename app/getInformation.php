<?php
class getInformation extends registerTokenInDb
{
    private $ipData;
    protected $isTokenExist;
    public function __construct($token)
    {
        global $connection;
        if (!$this->checkExistToken($token)) {
            $this->isTokenExist = false;
            echo "not exits";
            return;
        }
        $query = "SELECT * from info where token='$token'";
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $this->ipData = $stmt->fetch(PDO::FETCH_OBJ);
        $isTokenExist = true;

    }

    public function getData()
    {

        return $this->ipData ? $this->ipData : $this->isTokenExist;
    }
}
