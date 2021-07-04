<?php
 namespace common\models;

 use yii\base\Model;
 use Yii;
 use yii\web\UploadedFile;
 class ImageUpload extends Model{

     public $img;

     public function uploadFile(UploadedFile $file, $currentImage){
         if ($currentImage){
             if (file_exists('uploads/'. $currentImage)){
                 unlink('uploads/'. $currentImage);
             }
         }
         $file->name = md5(uniqid() . $file->baseName) . '.' . $file->extension;
         $file->saveAs('uploads/' . $file->name); //сохраним файл в папку
         return $file->name; //и вернем его название
     }


 }