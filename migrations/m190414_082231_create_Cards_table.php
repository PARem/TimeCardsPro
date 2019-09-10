<?php

use yii\db\Migration;

/**
 * Handles the creation of table `Cards`.
 */
class m190414_082231_create_Cards_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('Cards', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'cards' => $this->text()->notNull(),
            'date' => $this->date()->notNull(),
            'user_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('Cards');
    }
}
