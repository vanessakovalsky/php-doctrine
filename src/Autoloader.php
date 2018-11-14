<?php
/**
 * Created by PhpStorm.
 * User: vdavid2
 * Date: 14/11/2018
 * Time: 14:29
 */

class Autoloader {

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    static function autoload($class){
        require(__DIR__.'/'.str_replace('\\', '/', $class).'.php');
    }
}