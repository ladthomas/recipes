<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8995b27950c3001aa89af0032c7c6ef6
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8995b27950c3001aa89af0032c7c6ef6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8995b27950c3001aa89af0032c7c6ef6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8995b27950c3001aa89af0032c7c6ef6::$classMap;

        }, null, ClassLoader::class);
    }
}
