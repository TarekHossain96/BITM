<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c6785dd27e1ee6dbd48d10c60e2a989
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App:\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App:\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c6785dd27e1ee6dbd48d10c60e2a989::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c6785dd27e1ee6dbd48d10c60e2a989::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
