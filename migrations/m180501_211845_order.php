<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180501_211845_order
 */
class m180501_211845_order extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('product', array(
            'Product_ID' => 'pk',
            'Product_Kodu' => 'string NOT NULL',
            'Product_Name' => 'text',
			'Product_Cost' => 'text',
			
        ));
		$this->createTable('customer', array(
            'Cust_Numb' => 'pk',
            'Cust_Name	' => 'string NOT NULL',
            'Cust_Surname	' => 'text',
			  'Cust_Address	' => 'text',
		));
			$this->createTable('order', array(
            'Order_ID' => 'pk',
            'Product_Kodu' => 'string NOT NULL',
            'Cust_Numb' => 'text',
			'order_date' => 'text',
			'order_total' => 'text',
			'cost_total'=>'text',
			

        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180501_211845_order cannot be reverted.\n";

        return false;
    }
    */
}
