<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd4d083cf01ab772c3e2486cea565852
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vendorB\\' => 8,
            'vendorA\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vendorB\\' => 
        array (
            0 => __DIR__ . '/..' . '/vendorB',
        ),
        'vendorA\\' => 
        array (
            0 => __DIR__ . '/..' . '/vendorA',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd4d083cf01ab772c3e2486cea565852::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd4d083cf01ab772c3e2486cea565852::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd4d083cf01ab772c3e2486cea565852::$classMap;

        }, null, ClassLoader::class);
    }
}
