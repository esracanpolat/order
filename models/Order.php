<?php

namespace kouosl\order\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
			[['question'], 'string'],
			[['answer'], 'string'],
        ];
    }

    /**
     * @inheritdoc
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
}
