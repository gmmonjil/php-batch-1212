<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita498ae56891b6a3910d29752837bce95
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita498ae56891b6a3910d29752837bce95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita498ae56891b6a3910d29752837bce95::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita498ae56891b6a3910d29752837bce95::$classMap;

        }, null, ClassLoader::class);
    }
}
