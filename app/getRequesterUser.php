<?php

class getRequesterUser
{

    public function __construct($information, $table, $tokenID)
    {
        global $connection;

        if ($tokenID != null) {
            $tokenID = registerTokenInDb::getTokenID($tokenID);
        }
        $query = "INSERT INTO $table (user_agent,user_language,user_ip,visit_url,token_id)
        values('{$information['HTTP_USER_AGENT']}'
        ,'{$information['HTTP_ACCEPT_LANGUAGE']}'
        ,'{$information['REMOTE_ADDR']}'
        ,'{$information['HTTP_HOST']}{$information['REQUEST_URI']}',{$tokenID['id']})";
        $stmt = $connection->prepare($query);
        $stmt->execute();

    }
}
