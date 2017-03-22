<?php
/**
 * Created by PhpStorm.
 * User: rinzler
 * Date: 19.3.2017
 * Time: 12:07
 */

namespace Mlynek;

class Config
{
    public static function getValue($key) {
        $config = include(Helpers::absPath().'config/db.php');

        return $config[$key];
    }
}