<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit522ce67df2191e7d895b420f9d37c048
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
            'Svg\\' => 4,
            'Sabberworm\\CSS\\' => 15,
        ),
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
        'F' => 
        array (
            'FontLib\\' => 8,
        ),
        'D' => 
        array (
            'Dompdf\\' => 7,
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
        'Svg\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/php-svg-lib/src/Svg',
        ),
        'Sabberworm\\CSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabberworm/php-css-parser/src',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'FontLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/php-font-lib/src/FontLib',
        ),
        'Dompdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/dompdf/dompdf/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dompdf\\Cpdf' => __DIR__ . '/..' . '/dompdf/dompdf/lib/Cpdf.php',
        'PdfCrowd' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'PdfcrowdException' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\ConnectionHelper' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\Error' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\HtmlToImageClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\HtmlToPdfClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\ImageToImageClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\ImageToPdfClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\PdfToHtmlClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\PdfToImageClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\PdfToPdfClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
        'Pdfcrowd\\PdfToTextClient' => __DIR__ . '/..' . '/pdfcrowd/pdfcrowd/pdfcrowd.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit522ce67df2191e7d895b420f9d37c048::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit522ce67df2191e7d895b420f9d37c048::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit522ce67df2191e7d895b420f9d37c048::$classMap;

        }, null, ClassLoader::class);
    }
}