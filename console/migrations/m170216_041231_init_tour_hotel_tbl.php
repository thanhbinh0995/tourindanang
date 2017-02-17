<?php

use yii\db\Migration;

class m170216_041231_init_tour_hotel_tbl extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tour_hotel}}', [
            'id' => $this->primaryKey(),
            'tourId' => $this->integer()->notNull(),
            'level' => $this->string()->notNull(),
            'twoPax' => $this->integer()->notNull(),
            'threeFivePax' => $this->integer()->notNull(),
            'sixEightPax' => $this->integer()->notNull(),
            'ninePax' => $this->integer()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'deleted_at' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%tour_hotel}}');
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
