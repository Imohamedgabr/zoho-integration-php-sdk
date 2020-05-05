<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9187bfbccee3c87074e53e9d2bffe36
{
    public static $prefixLengthsPsr4 = array (
        'z' => 
        array (
            'zcrmsdk\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'zcrmsdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/zohocrm/php-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9187bfbccee3c87074e53e9d2bffe36::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9187bfbccee3c87074e53e9d2bffe36::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
