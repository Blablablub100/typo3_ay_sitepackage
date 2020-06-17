<?php

/**
 * Extension Manager/Repository config file for ext "typo3_ay_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'typo3-ay-sitepackage',
    'description' => 'Sitepackage for the ayurveda site',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'PandomediaGmbh\\Typo3AySitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Clemens Tisch',
    'author_email' => 'clemens@pandomedia.de',
    'author_company' => 'Pandomedia GmbH',
    'version' => '1.0.0',
];
