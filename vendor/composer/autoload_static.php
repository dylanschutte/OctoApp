<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita871b179b38d465215c5817a1eba08a8
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Liquidedge\\Octoapp\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Liquidedge\\Octoapp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita871b179b38d465215c5817a1eba08a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita871b179b38d465215c5817a1eba08a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita871b179b38d465215c5817a1eba08a8::$classMap;

        }, null, ClassLoader::class);
    }
}
