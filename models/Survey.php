<?php

namespace kouosl\order\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $question
 * @property string $answer
 *
 * @property OrderAnswer[] $orderAnswers
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'answer'], 'required'],
            [['content', 'question'], 'string'],
            [['title', 'answer'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'question' => 'Question',
            'answer' => 'Answer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrderAnswers()
    {
        return $this->hasMany(OrderAnswer::className(), ['order_id' => 'id']);
    }
}
