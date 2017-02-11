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
        'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css?ver=4.7.2',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/responsive.min.css',
        'css/widget1c9b.css',
        'css/related1c9b.css',
        'css/styles_thumbnails.css192d.css',
        'css/voyage-styleedfb.css',
        'css/lightblueedfb.css',
        'css/index.css',
    ];
    public $js = [
        'js/bootstrap.min254d.js',
        'js/jquery.colorbox-min877b.js',
        'js/modernizr.voyage.js',
        'js/prettify.js',
        'js/voyageedfb.js',
        'https://www.google-analytics.com/analytics.js',
        'http://tourindanang.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1',
        'http://tourindanang.com/wp-includes/js/jquery/jquery.js?ver=1.12.4',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
