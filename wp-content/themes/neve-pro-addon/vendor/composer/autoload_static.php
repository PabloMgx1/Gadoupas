<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87ffbee64658e58f021086ce57f8d07e
{
    public static $files = array (
        '9db40b6ab5393a6e86e41b56f8af779c' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit87ffbee64658e58f021086ce57f8d07e::$classMap;

        }, null, ClassLoader::class);
    }
}
