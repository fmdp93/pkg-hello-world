<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit667894a45fba894f88d5c243cbea7f22
{
    public static $files = array (
        'adc0dfaebaffcbc941e06006f60d43ae' => __DIR__ . '/../..' . '/src/hello-world.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit667894a45fba894f88d5c243cbea7f22::$classMap;

        }, null, ClassLoader::class);
    }
}
