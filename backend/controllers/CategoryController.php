<?php

namespace backend\controllers;

use Yii;
use common\models\Category;
use common\models\CategorySearch;
use yii\web\NotFoundHttpException;
use backend\components\BaseController;
use common\components\Util;
use yii\web\UploadedFile;
use common\models\User;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class CategoryController extends BaseController
{
    public function behaviors() {
        $behaviors = parent::behaviors();
        $behaviors['access']['rules'] = [
            [
                'actions' => ['view'],
                'allow' => true,
                'roles' => [User::ROLE_ADMIN, User::ROLE_USER],
            ],
            [
                'allow' => true,
                'roles' => [User::ROLE_ADMIN],
            ],
        ];
        return $behaviors;
    }
    /**
     * Lists all Category models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategorySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Category model.
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
     * Creates a new Category model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Category();
        if($model->load(Yii::$app->request->post())){
            $model->file_image = UploadedFile::getInstance($model, 'file_image');            
            if ($model->file_image) {
                $model->image = Yii::$app->security->generateRandomString() . '.' . $model->file_image->extension;
            }
            if ($model->save()) {
                if (!empty($model->image)) {
                    Util::uploadFile($model->file_image, $model->image);
                }
                return $this->redirect(['index']);
            } else {
                return $this->render('create', [
                            'model' => $model,
                ]);
            }
        }
        else{
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Category model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if($model->load(Yii::$app->request->post())){
            $model->file_image = UploadedFile::getInstance($model, 'file_image');   
            $old_image = "";
            if ($model->file_image) {
                $old_image = $model->image;
                $model->image = Yii::$app->security->generateRandomString() . '.' . $model->file_image->extension;
            }
            if ($model->save()) {
                if (!empty($model->file_image)) {
                    Util::deleteFile($old_image);
                    Util::uploadFile($model->file_image, $model->image);
                }
                return $this->redirect(['index']);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
        else{
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Category model.
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
     * Finds the Category model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Category the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Category::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
