<?php

use yii\db\Migration;

/**
 * Handles the creation of table `image`.
 */
class m170718_013858_create_image_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('{{%image}}', [
            'id' => $this->primaryKey(),
            'filePath' => $this->string(400)->notNull(),
            'itemId' => $this->integer(),
            'isMain' => $this->boolean(),
            'modelName' => $this->string(150)->notNull(),
            'urlAlias' => $this->string(400)->notNull(),
            'name' => $this->string(80),
        ]);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%image}}');
    }
}
