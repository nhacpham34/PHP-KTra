﻿<?php
class User
{
    var $userName;
    var $passWord;
    var $fullName;
    function User($userName, $passWord, $fullName)
    {
        $this->userName = $userName;
        $this->passWord = $passWord;
        $this->fullName = $fullName;
    }
    static function authentication($userName, $pw)
    {
        if ($userName == "nhac1998@gmail.com" && $pw == "123")
            return new User($userName, $pw, "Phạm Nhạc");
        return null;
    }
}
