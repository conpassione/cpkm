<?php
declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function(): void {
    ExtensionManagementUtility::addTcaSelectItemGroup(
        'tt_content',
        'CType',
        'kennel',
        'LLL:EXT:cpkm/Resources/Private/Language/locallang_db.xlf:extname',
        'before:default'
    );
});
