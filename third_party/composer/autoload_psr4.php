<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Twig\\' => array($vendorDir . '/twig/twig/src'),
    'Symfony\\Polyfill\\Ctype\\' => array($vendorDir . '/symfony/polyfill-ctype'),
    'LimeSurvey\\PluginManager\\' => array($baseDir . '/application/libraries/PluginManager', $baseDir . '/application/libraries/PluginManager/Storage'),
    'LimeSurvey\\Models\\Services\\' => array($baseDir . '/application/models/services'),
    'LimeSurvey\\Menu\\' => array($baseDir . '/application/libraries/MenuObjects'),
    'LimeSurvey\\Helpers\\' => array($baseDir . '/application/helpers'),
    'LimeSurvey\\ExtensionInstaller\\' => array($baseDir . '/application/libraries/ExtensionInstaller'),
    'LimeSurvey\\Datavalueobjects\\' => array($baseDir . '/application/datavalueobjects'),
);
