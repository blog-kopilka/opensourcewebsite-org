<?php

use yii\db\Migration;

/**
 * Class m190123_183404_alter_column_in_support_group_outside_message_table
 */
class m190123_183404_alter_column_in_support_group_outside_message_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('support_group_outside_message', 'message',
            $this->text()->append('CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('support_group_outside_message', 'message',
            $this->text()->append('CHARACTER SET utf8 COLLATE utf8_general_ci'));
    }
}
