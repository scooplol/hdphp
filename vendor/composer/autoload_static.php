<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit56bcde02c6496615086eb139feaf87d7
{
    public static $files = array (
        'e27462e627a88b1c7e8df9acd31610f4' => __DIR__ . '/..' . '/houdunwang/framework/src/kernel/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'system\\' => 7,
        ),
        'h' => 
        array (
            'hdphp\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'system\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
        ),
        'hdphp\\' => 
        array (
            0 => __DIR__ . '/..' . '/houdunwang/framework/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit56bcde02c6496615086eb139feaf87d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit56bcde02c6496615086eb139feaf87d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}