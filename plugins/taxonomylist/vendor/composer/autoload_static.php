<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite611d11e84f56d74cb80353137f35dff
{
    public static $classMap = array (
        'Grav\\Plugin\\Taxonomylist' => __DIR__ . '/../..' . '/classes/taxonomylist.php',
        'Grav\\Plugin\\TaxonomylistPlugin' => __DIR__ . '/../..' . '/taxonomylist.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite611d11e84f56d74cb80353137f35dff::$classMap;

        }, null, ClassLoader::class);
    }
}
