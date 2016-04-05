<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "friendlist".
 *
 * @property integer $f_id
 * @property string $f_name
 * @property string $f_url
 */
class Friendlist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'friendlist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_name', 'f_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_id' => 'F ID',
            'f_name' => 'F Name',
            'f_url' => 'F Url',
        ];
    }
	/**
	 *ÓÑÇéÁ´½Ó
	 *author:wangnana
	 *time:2016/4/5
	 */
	 public function alllist()
	 {
		 return $this->find()->asArray()->all();
	 }
}
