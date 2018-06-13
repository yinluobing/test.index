<?php

/**
 * Created by PhpStorm.
 * User: wangruirong
 * Date: 2017/4/13
 * Time: 13:54
 */


include __DIR__.'/vendor/autoload.php';
include __DIR__.'/common/function.php';
//类的自动加载
spl_autoload_register(function ($class) {
    include __DIR__. '/core/' . $class . '.php';
});