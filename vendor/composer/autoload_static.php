<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc0deeb04140c0a5e729f943d18ffef9c
{
    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kouosl\\order\\\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kouosl\\order\\\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc0deeb04140c0a5e729f943d18ffef9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc0deeb04140c0a5e729f943d18ffef9c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
