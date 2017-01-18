<?php
namespace qwestern\easyii\article\comments\controllers;

use qwestern\easyii\article\comments\models\ArticleComment;
use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
use yii\easyii\components\Controller;

class AController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider(['query' => ArticleComment::find()->with(['subscriberUser'])->where(['published' => null])->orderBy(['updated_at' => SORT_DESC])]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionPublish($id)
    {
        $model = ArticleComment::findOne($id);
        $model->published = new Expression('NOW()');
        $model->save();
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $model = ArticleComment::findOne($id);
        $model->delete();
        return $this->redirect(['index']);
    }
}
