<?php

class m160420_000001_create_easyii_article_comment extends \yii\db\Migration {

    public function up()
    {
        $this->createTable('easyii_article_comment', [
            'id' => $this->primaryKey(),
            'article_item_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'email' => $this->string()->notNull(),
            'comment' => $this->string()->notNull(),
            'published' => $this->timestamp(),
            'created_at' => $this->timestamp()->notNull(),
            'updated_at' => $this->timestamp()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('easyii_article_comment');
    }
}