<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74679096f8b264e6a9e84db1f0b74ce8
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
            0 => __DIR__ . '/../..' . '/../app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74679096f8b264e6a9e84db1f0b74ce8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74679096f8b264e6a9e84db1f0b74ce8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
