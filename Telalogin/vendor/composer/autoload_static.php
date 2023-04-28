<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26431d2a99a92a64b5a4f2a31e95fb97
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26431d2a99a92a64b5a4f2a31e95fb97::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26431d2a99a92a64b5a4f2a31e95fb97::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit26431d2a99a92a64b5a4f2a31e95fb97::$classMap;

        }, null, ClassLoader::class);
    }
}
