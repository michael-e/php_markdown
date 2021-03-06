<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0e9776e60065003894b8b76fb3ace31
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Michelf\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Michelf\\' => 
        array (
            0 => __DIR__ . '/..' . '/michelf/php-markdown/Michelf',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0e9776e60065003894b8b76fb3ace31::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0e9776e60065003894b8b76fb3ace31::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
