<?php
namespace backend\controllers;

use Yii;
use common\models\Tour;
use common\models\TourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\components\BaseController;
use common\components\Util;
use yii\web\UploadedFile;
use yii\imagine\Image;  
use Imagine\Image\Box; 
/**
 * TourController implements the CRUD actions for Tour model.
 */
class TourController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tour models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TourSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tour model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tour model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tour();

        if ($model->load(Yii::$app->request->post())) {
            
            $model->file_image = UploadedFile::getInstance($model, 'file_image');
            if ($model->file_image) {
                $model->avatar = Yii::$app->security->generateRandomString() . '.' . $model->file_image->extension;
            }
            if ($model->save()) {
                $model->setTypes();
                if (!empty($model->avatar)) {
                    $uploadPath = \Yii::getAlias('@uploadPath');
                    Util::uploadFile($model->file_image, $model->avatar);
                }
                return $this->redirect(['index']);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Tour model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        var_dump($model->getTypes());
        exit();
        if ($model->load(Yii::$app->request->post())) {
            $model->file_image = UploadedFile::getInstance($model, 'file_image');   
            $old_image = "";
            if ($model->file_image) {
                $old_image = $model->avatar;
                $model->avatar = Yii::$app->security->generateRandomString() . '.' . $model->file_image->extension;
            }
            if ($model->save()) {
                if (!empty($model->file_image)) {
                    Util::deleteFile($old_image);
                    Util::uploadFile($model->file_image, $model->avatar);
                }
                return $this->redirect(['index']);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tour model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tour model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tour the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tour::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}