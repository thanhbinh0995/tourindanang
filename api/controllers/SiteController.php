<?php
namespace api\controllers;


use yii\rest\ActiveController;

class SiteController extends ActiveController
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
        echo "thanh";
        exit();
        return $data;
    }
}