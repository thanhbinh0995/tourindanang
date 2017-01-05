<?php
 
use yii\db\Migration;

class m170105_032031_init_fk_tourAddress_tbl_address_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_tourAddress_tbl_address_tbl", 'touraddress', 'addressId', 'address', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_tourAddress_tbl_address_tbl", "touraddress");
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
