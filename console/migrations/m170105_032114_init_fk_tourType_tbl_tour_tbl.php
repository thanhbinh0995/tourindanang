<?php
 
use yii\db\Migration;

class m170105_032114_init_fk_tourType_tbl_tour_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_tourType_tbl_tour_tbl", 'tourType', 'tourId', 'tour', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_tourType_tbl_tour_tbl", "tourType");
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
