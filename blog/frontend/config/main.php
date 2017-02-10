<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
        'defaultRoute'=>'post/index',
        'language'=>'zh-CN',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'session'=>[
                'name'=>'PHPHOMESESSION',
                'savePath'=>sys_get_temp_dir(),
        ],
        'request'=>[
                'cookieValidationKey'=>'1eTk6rTp0oapyGdUX7ME2NQ7FlPE6KUi',
                'csrfParam'=>'_homeCSRF',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
             //'suffix'=>'.html',
             'rules' => [
          
                 '<controller:\w+>/<id:\d+>'=>'<controller>/detail',

             ],
        ],



        
    ],
    'params' => $params,
];
