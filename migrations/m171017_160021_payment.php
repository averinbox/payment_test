<?php

use yii\db\Migration;

class m171017_160021_payment extends Migration
{
    public function safeUp()
    {
        $this->createTable('payments', [
            'id' => $this->primaryKey(),
            'seller' => $this->string()->notNull(),
            'address' => $this->string()->notNull(),
            'inn' => $this->integer(10)->notNull(),
            'checking_account' => $this->integer(20)->notNull(),
            'correspondent_account' => $this->integer(20)->notNull(),
            'bik' => $this->integer(9)->notNull(),
            'bank_name' => $this->string()->notNull(),
            'price' => $this->float()->notNull(),
        ], 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB');
    }

    public function safeDown()
    {
        $this->dropTable('payments');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171017_160021_payment cannot be reverted.\n";

        return false;
    }
    */
}
