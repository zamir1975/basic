<?php
use app\assets\AppAsset;
use yii\bootstrap\NavBar;


AppAsset::register($this);
$this->beginPage();
?>



<!DOCTIPE html>
<html lang="<?=Yii::$app->language ?>">
<head>
       <meta charset="<?=Yii::$app->charset ?>">
       <title><?=Yii::$app->name ?></title>
       <?php $this->head(); ?>
</head>
<body>
<?php $this->beginBody(); ?>
<div class="wrap">


</div>
<?php $this->endBody(); ?>
</body>
</html>