<?php

use yii\db\Migration;

class m170117_014448_init_fk_tour_address_tbl_address_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_tour_address_tbl_address_tbl", 'tour_address', 'addressId', 'address', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_tour_address_tbl_address_tbl", "tour_address");
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
