<?php
/**
 * Created by PhpStorm.
 * User: rinzler
 * Date: 19.3.2017
 * Time: 12:06
 */

namespace Mlynek;


class DB
{

    /**
     * @return \PDO handle
     */
    public static function connect()
    {
        $options = array(
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );

        $dsn = Config::getValue('dsn');
        $username = Config::getValue('username');
        $password = Config::getValue('password');


        return new \PDO(
            $dsn,
            $username,
            $password,
            $options
        );
    }


}