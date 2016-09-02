<?php
namespace api\controllers;


use Yii;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;
use api\components\ApiController;
use common\models\LoginForm;
use yii\filters\auth\CompositeAuth;

class SiteController extends ApiController
{
    public function behaviors() {
    $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'except' => ['create', 'login', 'resetpassword'],
            'authMethods' => [
                HttpBasicAuth::className(),
                HttpBearerAuth::className(),
                QueryParamAuth::className(),
            ],
        ];
        return $behaviors;
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin() {
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return "ok";
        } else {
            return "ok";
        }
    }

}
