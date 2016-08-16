<?php
namespace api\controllers;


use yii\rest\Controller;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $data = array(
            '343'
        );
        return $data;
    }
}
