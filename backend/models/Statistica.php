<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ksl_ip_count".
 *
 * @property int $id
 * @property string $ip
 * @property string|null $str_url
 * @property int|null $date_ip
 * @property int $black_list_ip
 * @property string|null $comment
 */
class Statistica extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ksl_ip_count';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ip'], 'required'],
            [['date_ip', 'black_list_ip'], 'integer'],
            [['ip'], 'string', 'max' => 15],
            [['str_url'], 'string', 'max' => 255],
            [['comment'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'Ip',
            'str_url' => 'Str Url',
            'date_ip' => 'Date Ip',
            'black_list_ip' => 'Black List Ip',
            'comment' => 'Comment',
        ];
    }
}
