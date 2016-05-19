<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\helpers\Url;

/**
 * @var yii\data\ActiveDataProvider $dataProvider
 */
$this->title = 'Article Comments';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Unpublished Comments</h1>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'name',
        'email',
        'comment:ntext',
        [
            'label' => 'Article',
            'value' => function ($model) {

                return Html::a($model->articleItem->title, ['/blog/view', 'slug' => $model->articleItem->slug], ['target' => '_blank']);
            },
            'format' => 'raw'
        ],
        'created_at:date',
        [
            'label' => 'publish',
            'value' => function ($model) {

                return Html::a('<span class="glyphicon glyphicon-thumbs-up"></span>', ['publish', 'id' => $model->primaryKey], ['data-confirm' => 'Publish comment']);
            },
            'format' => 'raw'
        ],
        [
            'label' => 'delete',
            'value' => function ($model) {

                return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->primaryKey], ['data-confirm' => 'Delete comment']);
            },
            'format' => 'raw'
        ]
    ]
]); ?>
