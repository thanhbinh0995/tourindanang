<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-api',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'api\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'swagger' => [
            'class' => 'gbksoft\modules\swagger\Module',
            'swaggerUrl' => '/api/web/swagger/swagger.json',
            'swaggerPath' => __DIR__ . '/../../api/web/swagger/swagger.json',
            'on beforeJson' => function($event) {
                // Replace response content (swagger.json)
                $event->responseText = mb_ereg_replace('{{http_host}}', \Yii::$app->request->hostInfo, $event->responseText);
                $event->responseText = mb_ereg_replace('{{apiversion}}', \Yii::$app->params['apiversion'], $event->responseText);
            },
        ],
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'response' => [
            'class' => 'yii\web\Response',
            'on beforeSend' => function ($event) {
                $response = $event->sender;
                if ($response->data !== null) {
                    $response->data = [
                        'success' => $response->isSuccessful,
                        'data' => $response->data,
                    ];
                }
            },
            'format' => yii\web\Response::FORMAT_JSON,
            'charset' => 'UTF-8',
        ],
    ],
    'params' => $params,
];