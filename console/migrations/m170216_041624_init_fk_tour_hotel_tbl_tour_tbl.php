<?php

use yii\db\Migration;

class m170216_041624_init_fk_tour_hotel_tbl_tour_tbl extends Migration
{
     public function up()
    {
        $this->addForeignKey("fk_tour_hotel_tbl_tour_tbl", 'tour_hotel', 'tourId', 'tour', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_tour_hotel_tbl_tour_tbl", "tour_hotel");
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
