<?php

namespace qwestern\easyii\article\comments\models;

use yii\easyii\modules\article\models\Item;

/**
 *  @property ArticleComment[] $articleComments
 */
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
