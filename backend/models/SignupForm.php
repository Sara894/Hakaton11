<?php


namespace backend\models;

use yii\base\Model;


class SignupForm extends Model
{
    public $username;
    public $email;
    public $password_hash;

    public function rules()
    {
        return [
            [['username','email','password_hash'],'required'],
            [['username'],'string'],
            [['email'],'email'],
            [['email'],'unique','targetClass'=>'backend\models\User', 'targetAttribute'=>'email']
        ];
    }

    public function signup()
    {
        if($this->validate())
        {
            $user = new User;
            var_dump($this->attributes);die;

            $user->attributes = $this->attributes;

            return $this->create();
        }

    }


}