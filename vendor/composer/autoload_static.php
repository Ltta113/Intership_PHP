<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3eade972653fd8979ec82c8b11014957
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3eade972653fd8979ec82c8b11014957::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3eade972653fd8979ec82c8b11014957::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3eade972653fd8979ec82c8b11014957::$classMap;

        }, null, ClassLoader::class);
    }
}
