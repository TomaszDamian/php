<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf534bb1a63a188e3066d7bc8f187bd6
{
    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/app.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/router.php',
        'ComposerAutoloaderInitaf534bb1a63a188e3066d7bc8f187bd6' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitaf534bb1a63a188e3066d7bc8f187bd6' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/queryBuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitaf534bb1a63a188e3066d7bc8f187bd6::$classMap;

        }, null, ClassLoader::class);
    }
}