<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Heidtech Karaoke Rooms',
    'description' => 'Karaoke Rooms',
    'category' => 'templates',
    'author' => 'Rafael Heid',
    'author_email' => 'rafael.heid@heid.tech',
    'author_company' => 'Heidtech',
    'version' => '0.0.1',
    'state' => 'dev',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'clearCacheOnLoad' => true
];