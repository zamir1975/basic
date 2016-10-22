<?php

namespace app\models;

use yii\base\Model;
use Yii;

class LoginForm extends Model {

public $username;
public $password;

public function rules() {

return[
       [['username','password'],'required']
];

 
    }
}
