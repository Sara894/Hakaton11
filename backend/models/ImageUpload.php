<?php


namespace backend\models;
use Yii;
use yii\base\Model;
use  yii\web\UploadedFile;


class ImageUpload extends Model
{
    public $image;

    public function rules()
    {
        return [
            [['image'],'required'],
            [['image'],'file','extensions'=>'jpg,png']
        ];
    }
    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;

       $this->deleteCurrentImage($currentImage);
        $filename = strtolower(md5(uniqid($file->baseName))) .'.'.$file->extension;
        $file->saveAs(Yii::getAlias('@app').'/web/uploads/'. $filename);
        return $filename;
    }

    public function deleteCurrentImage($currentImage)
    {
        if (file_exists(Yii::getAlias('@app') . '/web/uploads/'. $currentImage) && is_file(Yii::getAlias('@app') . '/web/uploads/'. $currentImage) && (!empty(Yii::getAlias('@app') . '/web/uploads/'. $currentImage)))
        {
            unlink(Yii::getAlias('@app').'/web/uploads/'.$currentImage);
        }
    }



}