<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fbd08c049ce12f6a96360c5c9f64d2d
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'L' => 
        array (
            'Lockme\\SDK\\' => 11,
            'Lockme\\OAuth2\\Client\\' => 21,
            'LockmeIntegration\\' => 18,
            'League\\OAuth2\\Client\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Lockme\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/lustmored/lockme-sdk/src',
        ),
        'Lockme\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/lustmored/oauth2-lockme/src',
        ),
        'LockmeIntegration\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3fbd08c049ce12f6a96360c5c9f64d2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3fbd08c049ce12f6a96360c5c9f64d2d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
