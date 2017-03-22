<?php
/**
 * Created by PhpStorm.
 * User: rinzler
 * Date: 19.3.2017
 * Time: 11:53
 */

namespace Mlynek;


class Helpers
{
    public static function redirect($url) {
        header('Location:'.$url);
    }

    public static function absPath() {
        return __DIR__.'/../';
    }
}