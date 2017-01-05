<?php
 
use yii\db\Migration;
use common\models\User;

class m160816_072949_init_admin extends Migration
{
    public function up()
    {
        $model = new User();
        $model->setAttributes(array(
            'username' => 'admin',
            'email' =>'admin@gmail.com',
            'role' => User::ROLE_ADMIN,
            'avatar' => 'no-image.jpg'
        ));
        $model->setPassword("abc123");
        $model->generateAuthKey();
        $model->save(false);

    }

    public function down()
    {
        User::deleteAll(array('email' => 'admin@gmail.com'));
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
