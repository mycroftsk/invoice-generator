<?php

namespace Mlynek;


class Auth
{
    public static function isLogged()
    {
        if($_SESSION['logged_in'] == true) {
            return true;
        }

        return false;
    }
}