<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit77246b73b75a0856b0c815bd96b03aab
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit77246b73b75a0856b0c815bd96b03aab', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit77246b73b75a0856b0c815bd96b03aab', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit77246b73b75a0856b0c815bd96b03aab::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
