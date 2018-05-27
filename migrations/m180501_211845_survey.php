<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m180501_211845_survey
 */
class m180501_211845_survey extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	$this->createTable('survey', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
			'question' => 'text',
			'answer' => 'text',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('survey');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180501_211845_survey cannot be reverted.\n";

        return false;
    }
    */
}
