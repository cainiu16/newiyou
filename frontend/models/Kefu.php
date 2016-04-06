<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kefu".
 *
 * @property integer $q_id
 * @property string $q_name
 * @property string $q_qq
 */
class Kefu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kefu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['q_name', 'q_qq'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'q_id' => 'Q ID',
            'q_name' => 'Q Name',
            'q_qq' => 'Q Qq',
        ];
    }
	/**
	 *��ѯ�����пͷ�
	 *
	 */
	 public function allkefu()
	 {
		 return $this->find()->asArray()->all();
	 }
}
