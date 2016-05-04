<?php
namespace qwestern\easyii\article\comments\models;


/*
 *  @property ArticleComment[] $articleComments
 */

use app\extensions\articles\models\Item;

class ArticleItem extends Item
{

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleComments()
    {
        return $this->hasMany(ArticleComment::className(), ['article_item_id' => 'item_id']);
    }

    public function getArticleCommentsCount()
    {
        return $this->hasOne(ArticleCommentCount::className(), ['article_item_id' => 'item_id']);
    }
}
