<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitebca1f1a1cf21696311dd69172735d98
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'Acme' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitebca1f1a1cf21696311dd69172735d98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitebca1f1a1cf21696311dd69172735d98::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitebca1f1a1cf21696311dd69172735d98::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitebca1f1a1cf21696311dd69172735d98::$classMap;

        }, null, ClassLoader::class);
    }
}
