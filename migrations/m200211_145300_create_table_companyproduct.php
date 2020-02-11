<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200211_145300_create_table_companyproduct
 */
class m200211_145300_create_table_companyproduct extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        // Create user table
        $this->createTable('{{%companyproduct}}', [
            'ID' => Schema::TYPE_PK.' NOT NULL AUTO_INCREMENT',
            'lpo_number' => Schema::TYPE_INTEGER,
            'lpo_date' => $this->datetime(),
            'item_description' => Schema::TYPE_STRING,
            'unit_of_issue' => $this->string(),
            'quantity' => Schema::TYPE_INTEGER,
            'unit_price' => $this->float(),
            'total_cost' =>$this->float(),
            'PL4A_No' => Schema::TYPE_INTEGER,
            'Item_category' => Schema::TYPE_STRING,
            'Vehicle_No' => Schema::TYPE_INTEGER,
            'Requisioner' => Schema::TYPE_STRING,
            'Directors'=>$this->string(),
            'Department'=>Schema::TYPE_INTEGER,
            'Authorised_By'=>Schema::TYPE_INTEGER,
            'Procurement_Method'=>Schema::TYPE_STRING,
            'Supplier'=>$this->string(),
            'Invoice_no'=>Schema::TYPE_INTEGER,
            'Scheme_Applied'=>Schema::TYPE_INTEGER,
            'AGPO_No'=>Schema::TYPE_INTEGER,
            'Invoice_Date'=>$this->datetime(),
            'Invoice_Amount'=>$this->float(),
            'Delivery_Note_No'=>Schema::TYPE_INTEGER,
            'Status'=>Schema::TYPE_STRING,
            'Quote'=>Schema::TYPE_STRING,

        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%companyproduct}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200211_145300_create_table_companyproduct cannot be reverted.\n";

        return false;
    }
    */
}
