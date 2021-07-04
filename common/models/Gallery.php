<?php

namespace common\models;

use Yii;
use yii\helpers\Html;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string|null $img
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
        ];
    }

    public function saveImage($name){

        $this->img = $name;
        return $this->save(false); //сохраним название картинки в бд
    }

    static function getImageGallery(){
        $result = [];
        $k = 0;
        $gallery = Gallery::find()->all();
        foreach ($gallery as $obj){
            $result[$k]['content'] = Html::img('/backend/web/uploads/'.$obj->img, ['style' => ['text-align'=>'center', 'height' => '650px']]);
            $result[$k]['options'] = ['style' => 'text-align: center; height: 650px'];
            $k++;
        }
        return $result;
    }
}
