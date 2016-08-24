<?php
namespace api\controllers;


use yii\rest\Controller;
use Yii;
use common\models\Category;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;

class SiteController extends Controller
{
    public function behaviors() {
    $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'authMethods' => [
                HttpBasicAuth::className(),
                HttpBearerAuth::className(),
                QueryParamAuth::className(),
            ],
        ];
        return $behaviors;
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = Category::findOne(3) ;
            
        $data = array(
            '343'
        );
        return $model;
    }
    
    public function actionTest() {
        $token = Yii::$app->jwt->getBuilder()->setIssuer('http://example.com') // Configures the issuer (iss claim)
                ->setId('4f1g23a12aa', true) // Configures the id (jti claim), replicating as a header item
                ->setIssuedAt(time()) // Configures the time that the token was issue (iat claim)
                ->setNotBefore(time() + 60) // Configures the time that the token can be used (nbf claim)
                ->setExpiration(time() + 3600) // Configures the expiration time of the token (nbf claim)
                ->set('uid', 1) // Configures a new claim, called "uid"
                ->getToken(); // Retrieves the generated token


//        $token->getHeaders(); // Retrieves the token headers
//        $token->getClaims(); // Retrieves the token claims

        return $token; // The string representation of the object is a JWT string (pretty easy, right?)
    }

}
