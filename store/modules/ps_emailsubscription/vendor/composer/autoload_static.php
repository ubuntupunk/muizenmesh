<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3510ae265235abe0038403dd59596b86
{
    public static $classMap = array (
        'Ps_Emailsubscription' => __DIR__ . '/../..' . '/ps_emailsubscription.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit3510ae265235abe0038403dd59596b86::$classMap;

        }, null, ClassLoader::class);
    }
}
