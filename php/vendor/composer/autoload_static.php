<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9bbbe910b4226681a644c730ed957dd8
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'mikehaertl\\wkhtmlto\\' => 20,
            'mikehaertl\\tmp\\' => 15,
            'mikehaertl\\shellcommand\\' => 24,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Process\\' => 26,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'K' => 
        array (
            'Knp\\Snappy\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'mikehaertl\\wkhtmlto\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/phpwkhtmltopdf/src',
        ),
        'mikehaertl\\tmp\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/php-tmpfile/src',
        ),
        'mikehaertl\\shellcommand\\' => 
        array (
            0 => __DIR__ . '/..' . '/mikehaertl/php-shellcommand/src',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Knp\\Snappy\\' => 
        array (
            0 => __DIR__ . '/..' . '/knplabs/knp-snappy/src/Knp/Snappy',
        ),
    );

    public static $classMap = array (
        'App' => __DIR__ . '/../..' . '/App.php',
        'BlockingCommandTest' => __DIR__ . '/..' . '/mikehaertl/php-shellcommand/tests/BlockingCommandTest.php',
        'CommandTest' => __DIR__ . '/..' . '/mikehaertl/php-shellcommand/tests/CommandTest.php',
        'ComposerAutoloaderInit9bbbe910b4226681a644c730ed957dd8' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit9bbbe910b4226681a644c730ed957dd8' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/Connection.php',
        'Knp\\Snappy\\AbstractGenerator' => __DIR__ . '/..' . '/knplabs/knp-snappy/src/Knp/Snappy/AbstractGenerator.php',
        'Knp\\Snappy\\Exception\\FileAlreadyExistsException' => __DIR__ . '/..' . '/knplabs/knp-snappy/src/Knp/Snappy/Exception/FileAlreadyExistsException.php',
        'Knp\\Snappy\\GeneratorInterface' => __DIR__ . '/..' . '/knplabs/knp-snappy/src/Knp/Snappy/GeneratorInterface.php',
        'Knp\\Snappy\\Image' => __DIR__ . '/..' . '/knplabs/knp-snappy/src/Knp/Snappy/Image.php',
        'Knp\\Snappy\\Pdf' => __DIR__ . '/..' . '/knplabs/knp-snappy/src/Knp/Snappy/Pdf.php',
        'Model' => __DIR__ . '/../..' . '/Model.php',
        'Psr\\Log\\AbstractLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/AbstractLogger.php',
        'Psr\\Log\\InvalidArgumentException' => __DIR__ . '/..' . '/psr/log/Psr/Log/InvalidArgumentException.php',
        'Psr\\Log\\LogLevel' => __DIR__ . '/..' . '/psr/log/Psr/Log/LogLevel.php',
        'Psr\\Log\\LoggerAwareInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareInterface.php',
        'Psr\\Log\\LoggerAwareTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerAwareTrait.php',
        'Psr\\Log\\LoggerInterface' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerInterface.php',
        'Psr\\Log\\LoggerTrait' => __DIR__ . '/..' . '/psr/log/Psr/Log/LoggerTrait.php',
        'Psr\\Log\\NullLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/NullLogger.php',
        'Psr\\Log\\Test\\DummyTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\LoggerInterfaceTest' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
        'Psr\\Log\\Test\\TestLogger' => __DIR__ . '/..' . '/psr/log/Psr/Log/Test/TestLogger.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/Routes/Request.php',
        'Router' => __DIR__ . '/../..' . '/Routes/Router.php',
        'Symfony\\Component\\Process\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/process/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Process\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/process/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Process\\Exception\\LogicException' => __DIR__ . '/..' . '/symfony/process/Exception/LogicException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessFailedException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessFailedException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessSignaledException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessSignaledException.php',
        'Symfony\\Component\\Process\\Exception\\ProcessTimedOutException' => __DIR__ . '/..' . '/symfony/process/Exception/ProcessTimedOutException.php',
        'Symfony\\Component\\Process\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/process/Exception/RuntimeException.php',
        'Symfony\\Component\\Process\\ExecutableFinder' => __DIR__ . '/..' . '/symfony/process/ExecutableFinder.php',
        'Symfony\\Component\\Process\\InputStream' => __DIR__ . '/..' . '/symfony/process/InputStream.php',
        'Symfony\\Component\\Process\\PhpExecutableFinder' => __DIR__ . '/..' . '/symfony/process/PhpExecutableFinder.php',
        'Symfony\\Component\\Process\\PhpProcess' => __DIR__ . '/..' . '/symfony/process/PhpProcess.php',
        'Symfony\\Component\\Process\\Pipes\\AbstractPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/AbstractPipes.php',
        'Symfony\\Component\\Process\\Pipes\\PipesInterface' => __DIR__ . '/..' . '/symfony/process/Pipes/PipesInterface.php',
        'Symfony\\Component\\Process\\Pipes\\UnixPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/UnixPipes.php',
        'Symfony\\Component\\Process\\Pipes\\WindowsPipes' => __DIR__ . '/..' . '/symfony/process/Pipes/WindowsPipes.php',
        'Symfony\\Component\\Process\\Process' => __DIR__ . '/..' . '/symfony/process/Process.php',
        'Symfony\\Component\\Process\\ProcessUtils' => __DIR__ . '/..' . '/symfony/process/ProcessUtils.php',
        'mikehaertl\\shellcommand\\Command' => __DIR__ . '/..' . '/mikehaertl/php-shellcommand/src/Command.php',
        'mikehaertl\\tmp\\File' => __DIR__ . '/..' . '/mikehaertl/php-tmpfile/src/File.php',
        'mikehaertl\\wkhtmlto\\Command' => __DIR__ . '/..' . '/mikehaertl/phpwkhtmltopdf/src/Command.php',
        'mikehaertl\\wkhtmlto\\Image' => __DIR__ . '/..' . '/mikehaertl/phpwkhtmltopdf/src/Image.php',
        'mikehaertl\\wkhtmlto\\Pdf' => __DIR__ . '/..' . '/mikehaertl/phpwkhtmltopdf/src/Pdf.php',
        'tests\\FileTest' => __DIR__ . '/..' . '/mikehaertl/php-tmpfile/tests/FileTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9bbbe910b4226681a644c730ed957dd8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9bbbe910b4226681a644c730ed957dd8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9bbbe910b4226681a644c730ed957dd8::$classMap;

        }, null, ClassLoader::class);
    }
}
