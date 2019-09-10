<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m190223_075059_create_user_table extends Migration
{
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password' => $this->string()->notNull(),
            'email' => $this->string()->notNull()->unique(),
            'role' => $this->string(32)->notNull()->defaultValue('user'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
