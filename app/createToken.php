<?php

class createToken
{
    private $token;

    public function __construct()
    {
        $token = new getRandStr(30);
        $this->token = $token->getRandomStr();

    }
    public function getToken()
    {
        return $this->token;
    }
}
