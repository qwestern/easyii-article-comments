<?php

use yii\db\Migration;

class m170118_134223_add_created_by_to_blog extends Migration
{
    public function up()
    {
        $this->addColumn('easyii_article_comment', 'created_by', $this->integer());
    }

    public function down()
    {
        $this->dropColumn('easyii_article_comment', 'created_by');
    }
}
