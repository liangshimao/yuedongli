<?php

use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?= Html::encode(Yii::$app->name)?></title>
</head>
<body>
<?php $this->beginBody() ?>
<?php echo $content; ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
