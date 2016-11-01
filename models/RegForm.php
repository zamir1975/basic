<?php

namespace app\models;

use yii\base\Model;
use Yii;

class RegForm extends Model {

public $username;
public $email;
public $password;
    public $status;

public function rules() {

return[
    [['username','email','password'],'filter','filter'=>'trim'],
    [['username','email','password'],'required'],
    ['username', 'string', 'min'=>2, 'max' => 255],
    ['username','unique','targetClass'=>User::className(),'massage'=>'это имя занято'],
    ['email','email'],
    ['username','unique','targetClass'=>User::className(),'massage'=>'Это имя уже занято']
];

 
    }

    public function attributeLabels()
    {
        return[
            'username'=>'Имя пользователя',
            'email'=>'Электронная почта',
            'password'=>'Пароль'
        ];
    }

}


