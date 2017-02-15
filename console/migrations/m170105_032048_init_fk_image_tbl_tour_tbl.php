<?php
 
use yii\db\Migration;

class m170105_032048_init_fk_image_tbl_tour_tbl extends Migration
{
    public function up()
    {
        $this->addForeignKey("fk_image_tbl_tour_tbl", 'image', 'tourId', 'tour', 'id', "CASCADE", "RESTRICT");
    }

    public function down()
    {
        $this->dropForeignKey("fk_image_tbl_tour_tbl", "image");
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
