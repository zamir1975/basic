<?php
use app\assets\AppAsset;
use yii\bootstrap\NavBar;

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