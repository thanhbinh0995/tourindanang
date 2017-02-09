<?php

use yii\db\Migration;

class m170207_082957_add_slug_to_tour_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
      $this->addColumn('{{%tour}}','slug',$this->string()->notNull());
    }
 
    public function down()
    {
      $this->dropColumn('{{%tour}}','slug');
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
