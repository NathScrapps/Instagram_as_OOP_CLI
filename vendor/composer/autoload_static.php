<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb55e5ace0b377178093e0fce4997a03d
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nathscrapps\\Phppoo\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nathscrapps\\Phppoo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb55e5ace0b377178093e0fce4997a03d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb55e5ace0b377178093e0fce4997a03d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb55e5ace0b377178093e0fce4997a03d::$classMap;

        }, null, ClassLoader::class);
    }
}
