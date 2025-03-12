<?php
declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// call_user_func(static function(): void {});
ExtensionManagementUtility::addTypoScriptSetup(
    '
   module.tx_form {
       settings {
           yamlConfigurations {
               36651 = EXT:cpkm/Configuration/Form/CpFormSetup.yaml
           }
       }
   }
'
);
