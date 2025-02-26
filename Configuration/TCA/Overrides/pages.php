<?php

declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function(): void {
    // clear the default items for "layout" field to allow for consistent adding of additional items with addItems in
    // PageTSConfig (instead of a combination of altLabels and addItems
    // $GLOBALS['TCA']['pages']['columns']['layout']['config']['items'] = [];

    // zusätzliche Icons für Folder-Seiten
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        'label' => 'LLL:EXT:cpkm/Resources/Private/Language/locallang_db.xlf:pages.label.event',
        'icon' => 'tx-conpassione-event',
        'value' => 'event'
    ];
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-event'] = 'tx-conpassione-event';

    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        'label' => 'LLL:EXT:cpkm/Resources/Private/Language/locallang_db.xlf:pages.label.kennel',
        'icon' => 'tx-conpassione-kennel',
        'value' => 'kennel'
    ];
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-kennel'] = 'tx-conpassione-kennel';

    // zusätzliche Icons für Folder-Seiten
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        'label' => 'LLL:EXT:cpkm/Resources/Private/Language/locallang_db.xlf:pages.label.pedigree',
        'icon' => 'tx-conpassione-pedigree',
        'value' => 'pedigree'
    ];
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-pedigree'] = 'tx-conpassione-pedigree';

    // zusätzliche Icons für Folder-Seiten
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        'label' => 'LLL:EXT:cpkm/Resources/Private/Language/locallang_db.xlf:pages.label.litter',
        'icon' => 'tx-conpassione-litter',
        'value' => 'litter'
    ];
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-litter'] = 'tx-conpassione-litter';
});
