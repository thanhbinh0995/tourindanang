<?php

use yii\db\Migration;

class m170103_152554_init_fk_price_tbl_tour_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_price_tbl_tour_tbl", 'price', 'tourId', 'tour', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_price_tbl_tour_tbl", "price");
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
