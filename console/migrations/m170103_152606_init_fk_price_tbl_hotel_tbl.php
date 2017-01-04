<?php

use yii\db\Migration;

class m170103_152606_init_fk_price_tbl_hotel_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_price_tbl_hotel_tbl", 'price', 'hotelId', 'hotel', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_price_tbl_hotel_tbl", "price");
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
