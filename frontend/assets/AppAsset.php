<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/lightblueedfb.css',
        'css/responsive.min.css',
        'css/voyage-styleedfb.css',
    ];
    public $js = [
        'js/bootstrap.min254d.js',
        'js/jquery.colorbox-min877b.js',
        'js/modernizr.voyage.js',
        'js/prettify.js',
        'js/voyageedfb.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
