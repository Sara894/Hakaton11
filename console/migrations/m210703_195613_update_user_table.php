<?php

use yii\db\Migration;

/**
 * Class m210703_195613_update_user_table
 */
class m210703_195613_update_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {

        $this->addColumn('user',  'password',$this->string());
        $this->addColumn( 'user',  'isAdmin',$this->integer()->defaultValue(0));
        $this->addColumn( 'user', 'photo',$this->integer()->defaultValue(0));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user',  'password');
        $this->dropColumn('user',  'isAdmin');
        $this->dropColumn('user', 'photo');
    }
}
