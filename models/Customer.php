<?php

namespace kouosl\order\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $Cust_Numb
 * @property int $Cust_Name
 * @property int $Cust_Surname
 * @property int $Cust_Address
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cust_Numb', 'Cust_Name', 'Cust_Surname', 'Cust_Address'], 'required'],
            [['Cust_Numb', 'Cust_Name', 'Cust_Surname', 'Cust_Address'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Cust_Numb' => 'Cust  Numb',
            'Cust_Name' => 'Cust  Name',
            'Cust_Surname' => 'Cust  Surname',
            'Cust_Address' => 'Cust  Address',
        ];
    }
}
