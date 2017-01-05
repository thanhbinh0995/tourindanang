<?php
 
use yii\db\Migration;

class m170105_032012_init_fk_tourAddress_tbl_tour_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_tourAddress_tbl_tour_tbl", 'tourAddress', 'tourId', 'tour', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_tourAddress_tbl_tour_tbl", "tourAddress");
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
