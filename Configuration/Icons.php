<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'tx-conpassione-kennel' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpkm/Resources/Public/Icons/Kennel.svg',
    ],

    'tx-conpassione-pedigree' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpkm/Resources/Public/Icons/Pedigree.svg',
    ],

    'tx-conpassione-litter' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpkm/Resources/Public/Icons/Litter.svg',
    ],

/*    'tx-myext-bitmapicon' => [
        'provider' => BitmapIconProvider::class,
        'source' => 'EXT:my_extension/Resources/Public/Icons/mybitmap.png',
        // All icon providers provide the possibility to register an icon that spins
        'spinning' => true,
    ],*/
];
