<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManagerBackend' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => '/login/backend/web',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
       'languagepicker' => [
           'class' => 'lajax\languagepicker\Component',
           'languages' => ['en',"vi"]                   // List of available languages (icons only)
       ],
       'i18n' => [
           'translations' => [
               'app*' => [
                   'class' => 'yii\i18n\PhpMessageSource',
                   'basePath' => '@approot/messages',
                ]
           ]
       ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => ''
                ],
            ],
        ],
    ],
    'modules' => [
        'redactor' => [
            'class' => 'yii\redactor\RedactorModule',
            'uploadDir' => '@webroot/path/to/uploadfolder',
            'uploadUrl' => '@web/path/to/uploadfolder',
            'imageAllowExtensions'=>['jpg','png','gif']
        ],
         
    ],

];
