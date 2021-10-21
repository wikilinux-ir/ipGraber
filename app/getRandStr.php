<?php

class getRandStr
{
    private $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private $randomStr;

    public function __construct(int $len)
    {
        $randStr = '';
        for ($i = 0; $i < (int) $len; $i++) {
            $index = rand(0, strlen($this->chars) - 1);
            $randStr .= $this->chars[$index];
        }
        $this->randomStr = $randStr;
    }

    public function getRandomStr()
    {
        return $this->randomStr;
    }
}
