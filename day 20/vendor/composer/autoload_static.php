<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d3424d6ab0a6072d228b95dfb9c0aa3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d3424d6ab0a6072d228b95dfb9c0aa3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d3424d6ab0a6072d228b95dfb9c0aa3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}