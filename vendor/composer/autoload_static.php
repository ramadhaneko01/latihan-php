<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8ace310398920ad34cf1a420507e3b9
{
    public static $prefixesPsr0 = array (
        'f' => 
        array (
            'fpdf' => 
            array (
                0 => __DIR__ . '/..' . '/itbz/fpdf/src',
            ),
        ),
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita8ace310398920ad34cf1a420507e3b9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
