<?php

use yii\db\Migration;

/**
 * Class m210703_201220_deleteColumn_user_table
 */
class m210703_201220_deleteColumn_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('user',  'auth_key');
        $this->dropColumn('user',  'password_hash');
        $this->dropColumn('user', 'password_reset_token');
        $this->dropColumn('user', 'password_reset_token');
        $this->dropColumn('user', 'password_reset_token');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210703_201220_deleteColumn_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210703_201220_deleteColumn_user_table cannot be reverted.\n";

        return false;
    }
    */
}
