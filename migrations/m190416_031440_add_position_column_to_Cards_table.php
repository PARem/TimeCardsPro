<?php

use yii\db\Migration;

/**
 * Handles adding position to table `Cards`.
 * Has foreign keys to the tables:
 *
 * - `user`
 */
class m190416_031440_add_position_column_to_Cards_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('Cards', 'user_id', $this->integer()->notNull());

        // creates index for column `user_id`
        $this->createIndex(
            'idx-Cards-user_id',
            'Cards',
            'user_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-Cards-user_id',
            'Cards',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-Cards-user_id',
            'Cards'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-Cards-user_id',
            'Cards'
        );

        $this->dropColumn('Cards', 'user_id');
    }
}
