<?php
return [
    'components' => array_merge([
        'db' => require(__DIR__ . '/db.php'),        
        'i18n' => [
            'translations' => [
                'app*' => [
                        'class' => 'yii\i18n\PhpMessageSource',
                        'basePath' => '@approot/messages',
                    ]
                ]
        ],
        'mailer' => require(__DIR__ . '/mail.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],        
        ],
        'backup' => [
            'class' => 'demi\backup\Component',
            // The directory for storing backups files
            'backupsFolder' => dirname(dirname(__DIR__)) . '/backups', // <project-root>/backups
            // Directories that will be added to backup
            'directories' => [
                'uploads' => '@api/web/uploads',
            ],
        ],
    ], require(__DIR__ . '/url.php')),
    'timeZone' => 'Europe/London',
];
