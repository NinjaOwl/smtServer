<?php

namespace app\controllers;

use app\models\Dictcontent;
use app\models\Xjcrs;
use app\models\XjcrsSearch;
use app\tools\CommonFunc;
use app\tools\Constants;
use Intervention\Image\ImageManagerStatic;
use Yii;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\Response;

/**
 * XjcrsController implements the CRUD actions for Xjcrs model.
 */
class XjcrsController extends Controller
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


    public function actions()
    {
        return [
            'upload' => [
                'class' => 'trntv\filekit\actions\UploadAction',
                'multiple' => true,
                'disableCsrf' => true,
                'responseFormat' => Response::FORMAT_JSON,
                'responsePathParam' => 'path',
                'responseBaseUrlParam' => 'base_url',
                'responseUrlParam' => 'url',
                'responseDeleteUrlParam' => 'delete_url',
                'responseMimeTypeParam' => 'type',
                'responseNameParam' => 'name',
                'responseSizeParam' => 'size',
                'deleteRoute' => 'delete',
                'fileStorage' => 'fileStorage', // Yii::$app->get('fileStorage')
                'fileStorageParam' => 'fileStorage', // ?fileStorage=someStorageComponent
                'sessionKey' => '_uploadedFiles',
                'allowChangeFilestorage' => false,
                'validationRules' => [

                ],
                'on afterSave' => function ($event) {
                    /* @var $file \League\Flysystem\File */
                    $file = $event->file;
                    $img = ImageManagerStatic::make($file->read())->fit(500, 500);
                    $file->put($img->encode());
//                     do something (resize, add watermark etc)
                }
            ], 'delete2' => [
                'class' => 'trntv\filekit\actions\DeleteAction',
                //'fileStorage' => 'fileStorageMy', // my custom fileStorage from configuration(such as in the upload action)
            ], 'view2' => [
                'class' => 'trntv\filekit\actions\ViewAction',
            ]
        ];
    }

    /**
     * Lists all Xjcrs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new XjcrsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Dwrs models.
     * @return mixed
     */
    public function actionDownload()
    {
        $searchModel = new XjcrsSearch();
        CommonFunc::exportSearch($searchModel, '党外人士.xls', ['avatarUpload' => 1, 'avatar' => 1]);
    }

    /**
     * Displays a single Xjcrs model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Xjcrs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Xjcrs();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Xjcrs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Xjcrs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Xjcrs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Xjcrs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Xjcrs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist . ');
        }
    }

    /**
     * 新阶层人士统计
     */
    public function actionStatistics()
    {
        $groupMap = ArrayHelper::map(Dictcontent::getDictContentList(Constants::DICT_CONTENT_XJC_GROUP), 'id', 'value');
        $groupItemList = array_values($groupMap);
        $statisticsList = Xjcrs::find()->select(["group", "count(1) as num"])->asArray()->groupBy("group")->all();
        $statisticsItemList = [];
        $totalNum = 0;
        foreach ($statisticsList as $item) {
            $totalNum += $item['num'];
            $statisticsItemList[] = ['value' => $item['num'], 'name' => $groupMap[$item['group']]];
        }
        return $this->render('statistics', [
            'groupItemList' => $groupItemList,
            'statisticsItemList' => $statisticsItemList,
            'totalNum' => $totalNum
        ]);
    }
}
