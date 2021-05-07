<?php

use yii\db\Migration;

/**
 * Class m210422_052139_user_attribute
 */
class m210422_052139_create_user_attribute extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user_attribute', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->unique()->notNull(),
        ]);

        $this->createIndex(
            'idx-user_status-id',
            'user_attribute',
            'id'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropIndex(
            'idx-user_attribute-id',
            'user_attribute'
        );

        $this->dropTable('user_attribute');
    }
}
