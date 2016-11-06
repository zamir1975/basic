﻿<?php
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Modal;

/*
 *  @var $content string
 *  @var $this \yii\web\View
 */
AppAsset::register($this);
$this->beginPage();

?>

<!DOCTYPE html>
<html lang="<?=Yii::$app->language ?>">
<head>
       <meta charset="<?=Yii::$app->charset ?>">
       <?php $this->registerMetaTag(['name'=>'viewport','content'=>'width=device-width, initial-scale=1']) ?>

       <title><?=Yii::$app->name ?></title>
       <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="wrap">
       <?php NavBar::begin(
           [
               'brandLabel'=>'Тестовое приложение'
           ]

       );
       ActiveForm::begin(
           [
                  'action'=>['main/search'],
                  'method'=>'post',
                  'options'=>[
                         'class'=>'navbar-form navbar-right'
                  ]
           ]
       );
       echo '<div class="input-group input-group-sm">';
       echo Html::input(
           'type: text',
           'search',
           '',
           [
                  'placeholder'=>'Найти ...',
                  'class'=>'form-control'
           ]

       );
       echo '<span class="input-group-btn">';
       echo Html::submitButton(
           '<span class="glyphicon glyphicon-search"></span>',
           [
                  'class'=>'btn btn-success'
           ]
       );
       echo '</span></div>';
       ActiveForm::end();

       echo Nav::widget([
         'items'=>[
             [
                 'label'=>'Главная<span class="glyphicon glyphicon-home"></span>',
                 'url'=>['main/index']
             ],
             [
                 'label'=>'Из коробки<span class="glyphicon glyphicon-inbox"></span>',
                 'items'=>[
                     '<li class=dropdown-header">Расширения</li>',
                      '<li class="devider"></li>',
                     [
                         'label'=>'Перейти к просмотру',
                         'url'=>['widget-test/index']
                     ]
                 ]
             ],
             '<li>
              <a data-toggle="modal" data-target="#modal" style="cursor: pointer">

              О проекте <span class="glyphicon glyphicon-question-sign"></span>
</a>
             </li>',
             [
                 'label'=>'Регистрация',
                 'url'=>['main/reg']

             ],
             [
                 'label'=>'Войти',
                 'url'=>['main/login']

             ],
             [
                 'label'=>'Загрузка фото',
                 'url'=>['main/upload']

             ]
         ],
       'encodeLabels'=>false,
       'options'=>[
           'class'=>'navbar-nav navbar-right'
           ]
       ]);

       Modal::begin([

           'header'=>'<h2>phpNT</h2>',
           'id'=>'modal'

       ]);
       echo'Проект для продвинутых PHP разработчиков.';
       Modal::end();

       NavBar::end();
       ?>
<?= $content ?>
</div>
<footer class="footer">
       <div class="container">
              <span class="badge">
                     <span class="glyphicon glyphicon-copyright-mark"></span>z-kalazh<?= date('Y') ?>
              </span>

       </div>

</footer>
<?php $this->endBody(); ?>
</body>
</html>
<?php
$this->endPage();