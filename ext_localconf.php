<?php

defined('TYPO3') or die();

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('iconpack')) {
    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \Quellenform\Iconpack\IconpackRegistry::class
    )->registerIconpack(
        'EXT:iconpack_feather/Configuration/Iconpack/Feather.yaml',
        \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
            \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
        )->get('iconpack_feather', 'configFile')
    );
}
