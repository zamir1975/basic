﻿<?php
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

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