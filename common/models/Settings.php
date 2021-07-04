<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string $setting_name
 * @property string $value_name
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['setting_name', 'value_name'], 'required'],
            [['setting_name', 'value_name'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'setting_name' => 'Setting Name',
            'value_name' => 'Value Name',
        ];
    }

    static function getEmail(){
        return Settings::findOne(1)->attributes['value_name'];
    }

    static function getNumPage(){
        return Settings::findOne(2)->attributes['value_name'];
    }
}
