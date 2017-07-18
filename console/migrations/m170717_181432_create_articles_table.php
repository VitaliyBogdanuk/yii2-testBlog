<?php

use yii\db\Migration;
use yii\base\Security;


/**
 * Handles the creation of table `articles`.
 */
class m170717_181432_create_articles_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $security = new Security;
        $this->createTable('articles', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
            'image' => $this->text(),
            'created_at' => $this->timestamp(),
        ]);
        $this->insert('user', [
            'username' => 'admin',
            'password_hash' => $security->generatePasswordHash('adminYii'),
            'email' => 'admin@gmail.com',
            'status' => '10',
            'created_at' => '1500313795',
            'updated_at' => '1500313795',
            ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('articles');
    }
}
