<?php
class setInformation extends getInformation
{

    public function __construct($token, $ip, $userAgent, $userLanguage)
    {
        global $connection;
        if (!$this->checkExistToken($token)) {
            $this->isTokenExist = false;
            return;
        }
        if (!$this->checkExistToken($token)) {
            $this->isTokenExist = false;
            return;
        }
        $query = "UPDATE info set ipaddr = '$ip',veiw = 1 ,visit_at = current_timestamp ,
         user_agent = :userAgent ,user_language = :userLanguage where token = '$token' ";
        $stmt = $connection->prepare($query);
        $stmt->execute([':userAgent' => $userAgent, ':userLanguage' => $userLanguage]);

        if ($stmt->rowCount() > 0) {
            $this->isTokenExist = true;
        } else {
            $this->isTokenExist = false;

        }

    }

    public function tokenIsSet($token)
    {
        global $connection;
        $query = "SELECT veiw from info where token = '$token'";
        $stmt = $connection->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        if ((int) $result->veiw == 1) {
            return false;
        }
        return true;

    }
}
