<?php

use yii\db\Migration;

class m170117_051258_init_fk_tour_address_tbl_tour_tbl extends Migration
{
       public function up()
    {
        $this->addForeignKey("fk_tour_address_tbl_tour_tbl", 'tour_address', 'tourId', 'tour', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_tour_address_tbl_tour_tbl", "tour_address");
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
