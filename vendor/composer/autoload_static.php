<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb29c5a9854a59d935f5427a7a3ed13c4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SimplonReunion\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SimplonReunion\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/SimplonReunion',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb29c5a9854a59d935f5427a7a3ed13c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb29c5a9854a59d935f5427a7a3ed13c4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
