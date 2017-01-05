<?php

class Autoload
{
    private static $classdirectory = './classe/';

    public static function classeAutoloader($class) {
        $path = static::$classdirectory . "/" . $class . ".class.php";
        if (file_exists($path) && is_readable($path)) require $path;
    }
}