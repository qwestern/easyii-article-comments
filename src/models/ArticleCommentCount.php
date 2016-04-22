<?php

namespace qwestern\easyii\article\comments\models;

/**
*
*/
class ArticleCommentCount extends ArticleComment
{
    public $count;

    public static function primaryKey()
    {
        return 'article_item_id';
    }

    public static function find()
    {
        return parent::find()->select(['article_item_id', 'count' => 'count(id)'])->groupBy('article_item_id');
    }
}
