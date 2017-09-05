<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$f=ActiveForm::begin();
echo $f->field($form,'name');
echo Html::submitButton('lolkek');
ActiveForm::end();
