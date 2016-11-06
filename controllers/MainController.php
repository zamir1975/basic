<?php

namespace app\controllers;

use Yii;
use app\models\RegForm;
use app\models\LoginForm;


class MainController extends \yii\web\Controller
{
    public function actionIndex()
     
    {
        $hello='Hello!!!';
        $hello1='Hi!!!';
        return $this->render(

             'index',
             [
                  'hello' => $hello,
                  'hello1' => $hello1

             ]);
    }

public function actionReg() {

$model=new RegForm();

    if($model->load(Yii::$app->request->post()) && $model->validate()):
    if($model->reg()):
        return $this->goHome();
    else:
        Yii::$app->session->session->setFlash('error','Возникла ошибка при регистрации.');
        Yii::error('Ошибка при регистрации');
        return $this->refresh();
        endif;
        endif;

return $this->render(
'reg',
['model'=>$model]
);

}

public function actionLogin() {

$model=new LoginForm();

    if($model->load(Yii::$app->request->post()) && $model->login()):
        return $this->goBack();

    endif;

return $this->render(
'login',
['model'=>$model]
);

}

    /**
     *
     */
    public function actionSearch()
    {
        $search = Yii::$app->request->post('search');
        return $this->render(
        'search',
    [
        'search'=>$search
    ]

    );

    }


}
