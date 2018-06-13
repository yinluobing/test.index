<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4eba914ee2e7336172c5ae3e0956850d
{
    public static $files = array (
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '7ba3c774c30c8399e359b5ff7f3b943e' => __DIR__ . '/..' . '/tightenco/collect/src/Illuminate/Support/helpers.php',
        '33197a0023ced5fbf8f861d1c4ca048d' => __DIR__ . '/..' . '/topthink/think-orm/src/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\' => 6,
        ),
        'Q' => 
        array (
            'QL\\' => 3,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'N' => 
        array (
            'Noodlehaus\\' => 11,
        ),
        'J' => 
        array (
            'Jaeger\\' => 7,
        ),
        'I' => 
        array (
            'Illuminate\\' => 11,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-orm/src',
        ),
        'QL\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaeger/querylist/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Noodlehaus\\' => 
        array (
            0 => __DIR__ . '/..' . '/hassankhan/config/src',
        ),
        'Jaeger\\' => 
        array (
            0 => __DIR__ . '/..' . '/jaeger/g-http/src',
        ),
        'Illuminate\\' => 
        array (
            0 => __DIR__ . '/..' . '/tightenco/collect/src/Illuminate',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'Callback' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'CallbackBody' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'CallbackParam' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'CallbackParameterToReference' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'CallbackReturnReference' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'CallbackReturnValue' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'DOMDocumentWrapper' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'DOMEvent' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'ICallbackNamed' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'phpQuery' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'phpQueryEvents' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'phpQueryObject' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
        'phpQueryPlugins' => __DIR__ . '/..' . '/jaeger/phpquery-single/phpQuery.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4eba914ee2e7336172c5ae3e0956850d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4eba914ee2e7336172c5ae3e0956850d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4eba914ee2e7336172c5ae3e0956850d::$classMap;

        }, null, ClassLoader::class);
    }
}
