<?php
if (!defined('ABSPATH')) exit;
// autoload_real.php @generated by Composer
class ComposerAutoloaderInit802228c417e35cae98babe7ea8303047
{
 private static $loader;
 public static function loadClassLoader($class)
 {
 if ('Composer\Autoload\ClassLoader' === $class) {
 require __DIR__ . '/ClassLoader.php';
 }
 }
 public static function getLoader()
 {
 if (null !== self::$loader) {
 return self::$loader;
 }
 require __DIR__ . '/platform_check.php';
 spl_autoload_register(array('ComposerAutoloaderInit802228c417e35cae98babe7ea8303047', 'loadClassLoader'), true, true);
 self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
 spl_autoload_unregister(array('ComposerAutoloaderInit802228c417e35cae98babe7ea8303047', 'loadClassLoader'));
 require __DIR__ . '/autoload_static.php';
 call_user_func(\Composer\Autoload\ComposerStaticInit802228c417e35cae98babe7ea8303047::getInitializer($loader));
 $loader->register(true);
 $includeFiles = \Composer\Autoload\ComposerStaticInit802228c417e35cae98babe7ea8303047::$files;
 foreach ($includeFiles as $fileIdentifier => $file) {
 composerRequire802228c417e35cae98babe7ea8303047($fileIdentifier, $file);
 }
 return $loader;
 }
}
function composerRequire802228c417e35cae98babe7ea8303047($fileIdentifier, $file)
{
 if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
 $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;
 require $file;
 }
}