<?php

declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function(): void {
    // clear the default items for "layout" field to allow for consistent adding of additional items with addItems in
    // PageTSConfig (instead of a combination of altLabels and addItems
    $GLOBALS['TCA']['pages']['columns']['layout']['config']['items'] = [];

    // zusätzliche Icons für Folder-Seiten
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        'label' => 'Kennels',
        'icon' => 'tx-conpassione-kennellist',
        'value' => 'kennellist'
    ];

    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-kennellist'] = 'tx-conpassione-kennellist';

    // zusätzliche Icons für Folder-Seiten
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        'label' => 'Pedigree',
        'icon' => 'tx-conpassione-pedigree',
        'value' => 'pedigree'
    ];
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-pedigree'] = 'tx-conpassione-pedigree';
});
