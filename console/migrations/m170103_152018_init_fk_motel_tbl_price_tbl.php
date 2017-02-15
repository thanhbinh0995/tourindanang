<?php
 
use yii\db\Migration;

class m170103_152018_init_fk_motel_tbl_price_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_motel_tbl_price_tbl", 'motel', 'priceId', 'price', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_motel_tbl_price_tbl", "motel");
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
