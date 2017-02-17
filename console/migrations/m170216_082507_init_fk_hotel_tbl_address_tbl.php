<?php

use yii\db\Migration;

class m170216_082507_init_fk_hotel_tbl_address_tbl extends Migration
{
     public function up()
    {
        $this->addForeignKey("fk_tour_hotel_tbl_address_tbl", 'hotel', 'addressId', 'address', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_tour_hotel_tbl_address_tbl", "hotel");
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
