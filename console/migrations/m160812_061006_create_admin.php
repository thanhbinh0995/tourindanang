<?php

use yii\db\Migration;
use common\models\User;

class m160812_061006_create_admin extends Migration
{
    public function up()
    {
        $model = new User();
        $model->setAttributes(array(
            'username' => 'admin',
            'email' => 'admin@gmail.com'
        ));
        $model->setPassword("abc123");
        $model->save();

    }

    public function down()
    {
        User::deleteAll(array('username' => 'admin'));
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
