<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0be987d2d11d85b75fc67cd5bb18fa38
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Dotenv\\' => 25,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dotenv',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0be987d2d11d85b75fc67cd5bb18fa38::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0be987d2d11d85b75fc67cd5bb18fa38::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0be987d2d11d85b75fc67cd5bb18fa38::$classMap;

        }, null, ClassLoader::class);
    }
}
