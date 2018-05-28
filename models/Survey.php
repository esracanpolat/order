<?php

namespace kouosl\survey\models;

use Yii;

/**
 * This is the model class for table "survey".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $question
 * @property string $answer
 *
 * @property SurveyAnswer[] $surveyAnswers
 */
class Survey extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'survey';
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
    public function getSurveyAnswers()
    {
        return $this->hasMany(SurveyAnswer::className(), ['survey_id' => 'id']);
    }
}
