<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7cb60c3b2e1cc9192a2150fccffe88ff
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Champ\\LoginMVC\\app\\Controller\\' => 30,
            'Champ\\LoginMVC\\Router\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Champ\\LoginMVC\\app\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controller',
        ),
        'Champ\\LoginMVC\\Router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Router',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7cb60c3b2e1cc9192a2150fccffe88ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7cb60c3b2e1cc9192a2150fccffe88ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7cb60c3b2e1cc9192a2150fccffe88ff::$classMap;

        }, null, ClassLoader::class);
    }
}