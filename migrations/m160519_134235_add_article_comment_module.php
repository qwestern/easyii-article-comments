<?php

use yii\db\Migration;

class m160519_134235_add_article_comment_module extends Migration
{

    public function up()
    {
        $this->alterColumn('easyii_article_comment', 'published', $this->timestamp().' NULL');
        
        $this->insert('easyii_modules', [
            'name' => 'articlecomments',
            'class' => 'qwestern\easyii\article\comments\Module',
            'title' => 'Article Comment',
            'icon' => 'list-alt',
            'settings' => '[]',
            'notice' => 0,
            'order_num' => 122,
            'status' => 1,
        ]);
    }

    public function down()
    {

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
