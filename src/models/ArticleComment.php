<?php

namespace qwestern\easyii\article\comments\models;

use app\extensions\articles\models\Item;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\easyii\modules\article\api\Article;

/**
 * This is the model class for table "easyii_lender_comment".
 *
 * @property integer $id
 * @property integer $article_item_id
 * @property string $name
 * @property string $comment
 * @property integer $published
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Item $articleItem
 */
class ArticleComment extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'easyii_article_comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_item_id', 'name', 'comment', 'email'], 'required'],
            [['article_item_id'], 'integer'],
            [['created_at', 'updated_at', 'published'], 'safe'],
            [['email'], 'email'],
            [['name', 'comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_item_id' => 'Article Item ID',
            'name' => 'Name',
            'comment' => 'Comment',
            'published' => 'Published',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleItem()
    {
        return $this->hasOne(Item::className(), ['item_id' => 'article_item_id']);
    }
}
